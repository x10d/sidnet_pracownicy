<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Base
{
    public function before() {
        parent::before();
    }

    public function action_searchDb() {
        if ($this->request->post()) {
            $modelMovies = New Model_Movies();
            if ($movies = $modelMovies->search($this->request->post('searchString'))) {
                $this->template->content = View::factory('foundAndSearchMovie')->set('movies', $movies)->set('searchString', $this->request->post('searchString'));
            } else {
                $this->template->content = View::factory('searchMovie');
            }
        } else {
            $this->template->content = View::factory('searchMovie');
        }
    }

    public function action_search() {
        if ($this->request->post()) {
            $modelMovies = New Model_Movies();
            if ($movies = $modelMovies->searchSphinx($this->request->post('searchString'))) {
                $this->template->content = View::factory('foundAndSearchMovie')->set('movies', $movies)->set('searchString', $this->request->post('searchString'));
            } else {
                $this->template->content = View::factory('searchMovie')->set('error', 'Brak wprowadzonej frazy do szukania!');
            }
        } else {
            $this->template->content = View::factory('searchMovie');
        }
    }
    
    public function after() {        
        parent::after();
    }
}
