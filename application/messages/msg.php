<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'imie' => array(
    	'not_empty' => 'Pole nie może pozostać puste',
    ),
        'nazwisko' => array(
    	'not_empty' => 'Pole nie może pozostać puste',
    ),
    'stanowisko' => array(
    	'not_empty'=>'Pole nie może pozostać puste',
    ),
    'pesel' => array(
    	'not_empty' => 'Pole nie może pozostać puste',
    	'numeric' => 'Dozwolone są wyłącznie cyfry',
    	'exact_length' => 'PESEL powinien składać się z 11 cyfr'
    ),
    'username' => array(
        'not_empty' => 'Pole nie może pozostać puste',
    ),
    'email' => array(
        'not_empty' => 'Pole nie może pozostać puste',
        'email' => 'Pole musi zawierać prawidłowy adres mailowy',
    ),
    'password' => array(
        'not_empty' => 'Pole nie może pozostać puste',
    ),
    'passwordchecker' => array(
        'matches' => 'Hasła nie są identyczne',
    ),
    'oldpassword' => array(
        'not_empty' => 'Pole nie może pozostać puste',
        'Model_User::isOldPasswordCorrect' => 'Niepoprawne stare hasło'
    ),
);
