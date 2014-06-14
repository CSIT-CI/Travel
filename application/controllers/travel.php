<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class travel extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */



	// function __construct()
	// {
	// 	parent::CI_Controller();
	// 	$this->is_logged_in();
	// }




	public function index()
	{
		$this->load->view('travel/index');
	}

	public function login()
	{
		$this->load->view('travel/login');
	}

	public function register()
	{
		$this->load->view('travel/register');
	}


	function hotels()
	{
		$this->load->view('travel/hotels');
	}


	function flights()
	{
		$this->load->view('travel/flights');
	}

	function flight_hotel()
	{
		$this->load->view('travel/flight_and_hotels');
	}

	function selfcatering()
	{
		$this->load->view('travel/self_catering');
	}

	function cruises()
	{
		$this->load->view('travel/cruise');
	}

	function car_rental()
	{
		$this->load->view('travel/car_rental');
	}

	function hot_deals()
	{
		$this->load->view('travel/hot_deals');
	}

	function vacations()
	{
		$this->load->view('travel');
	}

	function business_travel()
	{
		$this->load->view('travel');
	}

	function group_travel()
	{
		$this->load->view('travel');
	}

	function get_inspired()
	{
		$this->load->view('travel/get_inspired');
	}

	function travel_guide()
	{
		$this->load->view('travel');
	}

	function location()
	{
		$this->load->view('travel/location');
	}





	function signup()
	{
		$data=array(

			'fname' => $this->input->post('f_name'),
			'lname' => $this->input->post('l_name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
				);
		
		$this->form->registeruser($data);

		// session_start();
		// $_SESSION['register']="User Registered";

		$this->load->view('travel/register');
	}

	function logincheck()
	{
		if(isset($_session['user']))
		{
			$this->load->view('travel/index');

		}else{
			
			$check=$this->form->logincheck();
			if($check)
			{
				$data=$this->form->logincheck();
				$user="Welcome";
				$this->nativesession->set($data);
				$this->load->view('travel/index',$data);
			}
			else{
			$this->load->view('travel/login');
		}
		}		
	}


	// function is_logged_in()
	// {
	// 	$is_logged_in=$this->session->userdata('is_logged_in');

	// 	if (!isset($is_logged_in) || $is_logged_in !=true) 
	// 	{
	// 		echo "you dont have permission";
	// 	}
	// }


	function logout()
	{
		$this->nativesession->delete();
		$this->load->view('travel/index');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */