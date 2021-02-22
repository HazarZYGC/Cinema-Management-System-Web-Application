<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('frontend/main');
	}

	public function tomovie()
	{
		$this->load->view('frontend/movielist');
	}

	public function tomoviesingle()
	{
		$this->load->view('frontend/moviesingle');
	}

	public function toadminpanel()
	{
		$this->load->view('frontend/adminpanel');
	}

	public function movie($sef)
	{
		$this->load->model('movielist');
		$isav = $this->movielist->movie_isexist($sef);
		if($isav)
		{
			echo "var";
		}
		else{
			echo "yok";
		}
	}
	
}
