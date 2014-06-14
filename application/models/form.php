<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class form extends CI_Model {


	function registeruser($data)

	{
			$this->db->insert('tbl_registration',$data);
	}

	function logincheck()
	{
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',$this->input->post('password'));
		$q=$this->db->get('tbl_registration');

		if($q->num_rows==1)
		{
				foreach ($q->result() as $row)
				{
    				$data=$row->fname;
				}
				return $data;
				return true;
		}	

	}




	public function adminlogincheck()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q=$this->db->get('tbl_login');

		if($q->num_rows==1)
		{
			return true;
		}

	}





}