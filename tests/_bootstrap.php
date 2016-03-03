<?php
// This is global bootstrap for autoloading
// Ustawiamy zmienną środowiskową
$_SERVER['CI_ENV'] = 'testing';
// Ładujemy nasz specjalny plik
require_once dirname(__FILE__) .'/CodeIgniterTestCase.php';