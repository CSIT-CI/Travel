<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nativesession
{
	// calling construct
	public function __construct()
	{
		// starting sesssion
		session_start();
	}

	// function to start session
	public function set ($key)
	{
		// return isset($_SESSION[$key])?
		// $_SESSION[$key]:null;

		return $_SESSION['user']=$key;

		// if session is set then return the session else return null to the session
	}


	public function regenerated_id($delOld=false)
	// deleting any data if on session by mistake
	{
		session_regenerate_id($delOld);
		// calling finction to delete garbage data over the session phase if any
	}

	// unsetting session
	public function delete()
	{
		unset($_SESSION['user']);
	}
	

	// public function get()
	// {
	// 	$test=$_SESSION[$key];
	// 	$this->load->view('test',$test);
	// }

}


// how to load

// $this->load->librariess('nativesession');
// on the controller part or whatever you would like to set the data use
// $this->nativesession->set('ram');
// data will be set here

// $this->nativesession->delete('ram');
// sesssion will be unset


// ex:
// $data=$this->nativesession->set('ram');
// printf("welcome",$data);

// output welcome ram



