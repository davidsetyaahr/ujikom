<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login()
	{
        $this->load->model('UserModel');
        $cekLogin = $this->UserModel->login()->num_rows();
        if($cekLogin==1){
            $user = $this->UserModel->login()->result_array()[0];
            $session = array(
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'level' => $user['level']
            );
            $this->session->set_userdata($session);
            redirect(base_url().'dashboard');
        }
        else{
			$this->session->set_flashdata("error", alert('danger','Gagal Login. Periksa Kembali Username dan Password Anda'));
			redirect(base_url());
        }
	}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
