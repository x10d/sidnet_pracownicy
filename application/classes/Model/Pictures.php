<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pictures extends Kohana_Model
{
    private $_arrayOfPictures = null;

    public function __construct() {
        $this->_arrayOfPictures = glob('themes/assets/pix/images_*.jpeg');
    }

    public function getList() {
        return $this->_arrayOfPictures;
    }

    public function count() {
        return count($this->_arrayOfPictures);
    }
}
