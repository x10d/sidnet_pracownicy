<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Movies extends Kohana_Model
{
    public function search($searchString) {
        $result = DB::select('*')
            ->from('movies')
            ->where('title', 'LIKE', '%' . $searchString . '%')
            ->or_where('text', 'LIKE', '%' . $searchString . '%')
            ->execute()
            ->as_array();
        
        return $result;
    }

    public function searchSphinx($searchString) {
        if (!$searchString) return false;
        $getIdList = $this->getSphinxIds($searchString);
        $result = $this->searchDb($getIdList['data']);
        return $result;
    }


    private function getSphinxIds($searchString) {
        $sphinxql = new SphinxQL();
        $result = $sphinxql->new_query()
            ->add_index('movies')
            ->add_field('id')
            ->search($searchString)
            ->execute();
        return $result;
    }

    private function searchDb($searchIds) {
        foreach ($searchIds as $key => $value) {
            $result[$key] = DB::select('*')
                ->from('movies')
                ->where('id', '=', $value['id'])
                ->execute()
                ->current();
        }
        return $result;
    }


}
