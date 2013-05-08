<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_WorkingHours extends Kohana_Model
{
    public function add($page_data) {
        $result = DB::insert('working_hours',array_keys($page_data))
            ->values($page_data)
            ->execute();        

        return $result;
    }
}
