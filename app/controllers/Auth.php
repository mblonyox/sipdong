<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		echo "Auth Index.";
  }

  /**
   * Show Login Page.
   */
  public function login()
  {
    $data['title'] = 'Login';
    $data['styles'][] = 'auth.css';
    $this->load->view('layouts/head', $data);
    $this->load->view('auth/login');
    $this->load->view('layouts/foot');
  }
}
