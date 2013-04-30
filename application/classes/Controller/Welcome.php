<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base
{

    public function action_index() {
        $this->template->content = View::factory('home');
    }

    public function action_masonryPix() {
        $modelPictures = new Model_Pictures();

        $pagination = Pagination::factory(array(
            'total_items'    => $modelPictures->count(),
            'items_per_page' => 50,
        ));

        $pixTable = $modelPictures->getList($pagination);
        $pageLinks = $pagination->render();

        if ($pagination->total_pages < $this->request->query('page')) {
            die;
        }

        $res = '';
        if ($this->request->is_ajax()) {
                foreach ($pixTable as $key => $value) {
                $res .= '<div class="masonryItem"><img class="imagediv" id="mItem' . $key . '" src="' . $value . '"/></div>';
            }
            $response = $res . $pageLinks;
            $this->request->headers('Content-type', 'application/json; charset=' . Kohana::$charset);
            $this->response->body($res);
        } else {
            $this->template->content = View::factory('masonryPix')
                ->set('pixTable', $pixTable)
                ->bind('pageLinks', $pageLinks);
        }
    }

} // End Welcome
