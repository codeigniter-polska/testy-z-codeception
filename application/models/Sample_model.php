<?php

class Sample_model extends CI_Model {
	
	/**
	 * Sprawdzamy, czy liczba jest parzysta
	 */
	public function is_even_number($number)
	{
		return $number % 2 === 0 ? TRUE : FALSE;
	}
}