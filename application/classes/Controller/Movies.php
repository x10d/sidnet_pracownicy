<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Movies extends Controller_Base
{
    public function before() {
        parent::before();
    }

    public function action_search() {
        if ($this->request->post()) {
            $modelMovies = New Model_Movies();
            $movies = $modelMovies->search($this->request->post('searchString'));
            $this->template->content = View::factory('foundAndSearchMovie')->set('movies', $movies);
        } else {
            $this->template->content = View::factory('searchMovie');
        }
    }

    public function action_searchSphinx() {
        if ($this->request->post()) {
            $modelMovies = New Model_Movies();
            $movies = $modelMovies->searchSphinx($this->request->post('searchString'));
            $this->template->content = View::factory('foundAndSearchMovie')->set('movies', $movies);
        } else {
            $this->template->content = View::factory('searchMovie');
        }
    }
    
    public function after() {        
        parent::after();
    }
}
