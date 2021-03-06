<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('Home');
	}
    public function Home()
    {
        $this->load->view('Home');
    }

    public function AboutUs()
    {
        $this->load->view('AboutUs');
    }

    public function Cakes()
    {
        $this->load->view('Cakes');
    }

    public function CupCakes()
    {
        $this->load->view('CupCakes');
    }

    public function Pastries()
    {
        $this->load->view('Pastries');
    }

    public function Breads()
    {
        $this->load->view('Breads');
    }

    public function Instructions()
    {
        $this->load->view('Instructions');
    }

    public function Wedding()
    {
        $this->load->view('Wedding');
    }

    public function Birthday()
    {
        $this->load->view('Birthday');
    }
}
