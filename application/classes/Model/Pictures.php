<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pictures extends Kohana_Model
{

    public function getList() {
        $result = glob('themes/assets/pix/images_*.jpeg');
        return $result;
    }

}
