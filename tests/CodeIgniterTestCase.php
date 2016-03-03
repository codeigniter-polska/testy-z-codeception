<?php
// Upewniamy się, że mamy ustawioną strefę czasową
if( ! ini_get('date.timezone') )
{
	date_default_timezone_set('UTC');
}

// Nadpsujemy zachowanie niektórych funkcji, które znajdują się w pliku code/Common.php
function show_error($message, $status_code = 500, $heading = 'An Error Was Encountered')
{
	throw new PHPUnit_Framework_Exception($message, $status_code);
}

function show_404($page = '', $log_error = TRUE)
{
//	throw new PHPUnit_Framework_Exception($page, 404);
}

// Ładujemy CodeIgniter
ob_start();
include(getcwd() . '/' . 'index.php');
ob_end_clean();

/**
 * Klasa CodeIgniterTestCase
 *
 * Używamy tego wszędzie, gdzie potrzebujemy dostępu do super obiektu $ci.
 *
 */
class CodeIgniterTestCase extends \Codeception\TestCase\Test {

	protected $ci;

	public function __construct()
	{
		parent::__construct();

		$this->ci =& get_instance();
	}

	public function __get($var)
	{
		return $this->ci->$var;
	}

}