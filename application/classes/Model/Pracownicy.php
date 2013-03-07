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
}
