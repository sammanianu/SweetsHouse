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

    public function Register()
    {
        $this->load->view('Register');
    }

    public function Login()
    {
        $this->load->view('Login');
    }

    public function Home()
    {
        $this->load->view('Home');
    }

    public function Delivery()
    {
        $this->load->view('Delivery');
    }

    public function AboutUs()
    {
/*        $this->load->view('AboutUs');*/

        $this->load->model('ShoppingCart');
        $data["product"] = $this->ShoppingCart->fetch_all();
        $this->load->view("AboutUs",$data);
    }

    public function Cakes()
    {
        $this->load->model('ShoppingCart');
        $data["cakes"] = $this->ShoppingCart->fetch_cakes();
        $this->load->view("Cakes",$data);    }

    public function CupCakes()
    {
        $this->load->model('ShoppingCart');
        $data["cupCakes"] = $this->ShoppingCart->fetch_cupCakes();
        $this->load->view("CupCakes",$data);
    }

    public function Pastries()
    {
        $this->load->model('ShoppingCart');
        $data["pastries"] = $this->ShoppingCart->fetch_pastries();
        $this->load->view("Pastries",$data);
    }

    public function Breads()
    {
        $this->load->view('Breads');
    }

    public function Breads2()
    {
        $this->load->model('ShoppingCart');
        $data["breads2"] = $this->ShoppingCart->fetch_all_breads2();
        $this->load->view("Breads2",$data);
    }

    public function Instructions()
    {
        $this->load->view('Instructions');
    }

    public function Wedding()
    {
        $this->load->model('ShoppingCart');
        $data["wCakes"] = $this->ShoppingCart->fetch_wCakes();
        $this->load->view("Wedding",$data);
    }

    public function Birthday()
    {
        $this->load->model('ShoppingCart');
        $data["bCakes"] = $this->ShoppingCart->fetch_bCakes();
        $this->load->view("Birthday",$data);
    }

    public function ShoppingCart()
    {
/*        $this->load->view('ShoppingCart');*/
        $this->load->model('ShoppingCart');
        $data["product"] = $this->ShoppingCart->fetch_all();
        $this->load->view("ShoppingCart",$data);
    }
}
