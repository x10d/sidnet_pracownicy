<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pracownicy extends Kohana_Model
{
    public function add($page_data){
        $result = DB::insert('pracownicy',array_keys($page_data))
                    ->values($page_data)
                    ->execute();        
        return $result;
    }
    
    public function getList($pagination) {
        $result = DB::select('*')
                    ->from('pracownicy')
                    ->limit($pagination->items_per_page)
                    ->offset($pagination->offset)
                    ->execute()
                    ->as_array();
        return $result;
    }

    public function count(){
        $result = DB::select('*')
                    ->from('pracownicy')
                    ->execute()
                    ->count();
        return $result;        
    }

    public function delete($id){
	$result = DB::delete('pracownicy')
		->where('id', '=', $id)
		->execute();       
    }

    public function get($id){
	    $result = DB::select('*')
		->from('pracownicy')
		->where('id', '=', $id)
		->execute()
		->current();
	    
	    return $result;
    }

    public function update($id,$pracownicy){
	    $result = DB::update('pracownicy')
		->set($pracownicy)
		->where('id', '=', $id)
		->execute();
	    
	    return $result;
    }
}
