<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_WorkingHours extends Kohana_Model
{
    public function add($page_data) {
        $result = DB::insert('working_hours',array_keys($page_data))
            ->values($page_data)
            ->execute();        

        return $result;
    }

    public function getMonthlyEarning($id) {
        $begin_timestamp = mktime(0,0,0,date('m'),1,date('Y'));
        $end_timestamp = mktime(23,59,59,date('m')+1,0,date('Y'));

        $result = DB::select('hours')
            ->from('working_hours')
            ->where('worker_id', '=', $id)
            ->where('date', 'BETWEEN', array($begin_timestamp, $end_timestamp))
            ->execute()
            ->as_array();
        
        return $result;
    }

}
