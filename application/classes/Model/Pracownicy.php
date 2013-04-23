<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pracownicy extends Kohana_Model
{
    public function add($page_data){
        $result = DB::insert('pracownicy',array_keys($page_data))
            ->values($page_data)
            ->execute();        

        Cache::instance('apc')->delete_all();

        return $result;
    }
    
    public function getList($pagination) {
        if ($result = Cache::instance('apc')->get('workerlist_'.$pagination->items_per_page.'_'.$pagination->offset)) {
            return $result;
        } else {
            $result = DB::select('*')
                ->from('pracownicy')
                ->limit($pagination->items_per_page)
                ->offset($pagination->offset)
                ->execute()
                ->as_array();
            Cache::instance('apc')->set('workerlist_'.$pagination->items_per_page.'_'.$pagination->offset, $result);
            return $result;
        }
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

        Cache::instance('apc')->delete_all();
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
        
        Cache::instance('apc')->delete_all();

	    return $result;
    }

    public function search($searchString){
        $result = DB::select('imie', 'nazwisko')
            ->from('pracownicy')
            ->where('imie', 'LIKE', '%'.$searchString.'%')
            ->or_where('nazwisko', 'LIKE', '%'.$searchString.'%')
            ->execute()
            ->as_array();
        
        return $result;
    }

}
