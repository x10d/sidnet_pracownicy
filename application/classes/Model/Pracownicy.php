<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pracownicy extends Kohana_Model
{
    public function add($page_data) {
        $result = DB::insert('pracownicy',array_keys($page_data))
            ->values($page_data)
            ->execute();        

        Cache::instance('apc')->delete_all();

        return $result;
    }
    
    public function getList($pagination) {
        $cacheItemName = 'workerlist_' . $pagination->items_per_page . '_'
            . $pagination->offset;
        if ($result = Cache::instance('apc')->get($cacheItemName)) {
            return $result;
        } else {
            $result = DB::select('*')
                ->from('pracownicy')
                ->limit($pagination->items_per_page)
                ->offset($pagination->offset)
                ->execute()
                ->as_array();
            Cache::instance('apc')->set($cacheItemName, $result);

            return $result;
        }
    }

    public function getListCalc($options, &$total_rows) {
        $default_options = array(
            'limit' => 20,
            'offset' => 0
        );
        $options += $default_options;
        $result = DB::select(DB::expr('sql_calc_found_rows *'))
            ->from('pracownicy')
            ->limit($options['limit'])
            ->offset($options['offset'])
            ->execute()
            ->as_array();
        $total_rows = DB::select(array(DB::expr('found_rows()'), 'total_rows'))
            ->execute()
            ->get('total_rows');
        return $result;
    }

    public function count() {
        $result = DB::select('*')
            ->from('pracownicy')
            ->execute()
            ->count();

        return $result;        
    }

    public function delete($id) {
        $result = DB::delete('pracownicy')
            ->where('id', '=', $id)
            ->execute();       
        Cache::instance('apc')->delete_all();
    }

    public function get($id) {
	    $result = DB::select('*')
    		->from('pracownicy')
    		->where('id', '=', $id)
    		->execute()
    		->current();
	    
	    return $result;
    }

    public function update($id,$pracownicy) {
	    $result = DB::update('pracownicy')
    		->set($pracownicy)
    		->where('id', '=', $id)
    		->execute();
        
        Cache::instance('apc')->delete_all();

	    return $result;
    }

    public function search($searchString) {
        $result = DB::select('imie', 'nazwisko')
            ->from('pracownicy')
            ->where('imie', 'LIKE', '%' . $searchString . '%')
            ->or_where('nazwisko', 'LIKE', '%' . $searchString . '%')
            ->execute()
            ->as_array();
        
        return $result;
    }
}
