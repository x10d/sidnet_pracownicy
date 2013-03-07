<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pracownicy extends Kohana_Model
{
    public function add($page_data){
        $result = DB::insert('pracownicy',array_keys($page_data))
                    ->values($page_data)
                    ->execute();        
        return $result;
    }
    
    public function getList()
    {
        $result = DB::select('*')
                    ->from('pracownicy')
                    ->execute()
                    ->as_array();
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
