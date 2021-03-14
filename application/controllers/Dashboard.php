<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		if(empty($this->session->userdata('id_user'))){
			$this->load->view('auth/login');
		}
		else{
			$param['pageInfo'] = 'Dashboard';
			$this->template->load('pages/dashboard',$param);
		}
	}
}
