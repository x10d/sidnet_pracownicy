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
        $sphinxql = new SphinxQL();
        $query = $sphinxql->new_query();
        $query->add_field('title', 'tytul')
            ->add_field('text', 'opis')
            ->search($searchString);
        $result = $query->execute();
    }

}
