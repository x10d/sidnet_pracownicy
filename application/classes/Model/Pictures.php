<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Pictures extends Kohana_Model
{
    private $_arrayOfPictures = null;
    private $_numberOfPictures = null;

    public function __construct() {
        $this->_arrayOfPictures = glob('themes/assets/pix/images_*.jpeg');
        $this->_numberOfPictures = count($this->_arrayOfPictures);
    }

    public function getList($pagination) {

        $begin = $pagination->offset;
        $end = $pagination->offset + $pagination->items_per_page;
        
        if ($end > $this->_numberOfPictures) {
            $end = $this->_numberOfPictures;
        }

        for ($i = $begin; $i < $end; $i++) {
            $result[$i] = $this->_arrayOfPictures[$i];
        }

        return $result;
    }

    public function getFullList() {
        return $this->_arrayOfPictures;
    }

    public function count() {
        return $this->_numberOfPictures;
    }
}
