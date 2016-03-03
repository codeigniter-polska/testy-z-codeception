<?php

class Login extends CI_Controller {
	
	/**
	 * Logowanie do aplikacji
	 */
	public function index()
	{
		$this->load->helper('form');
		
		if ($this->input->method() !== 'post')
		{
			$this->load->view('login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username === 'ren' && $password === 'secret')
			{
				echo '<h1>Witaj ' . $username . '!</h1>';
			}
		}
	}
}