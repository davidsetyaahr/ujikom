<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
	public function index()
	{
        $param['pageInfo'] = 'List User';
        $param['user'] = $this->UserModel->getData('*')->result_array();
        $this->template->load('user/list-user',$param);
	}
	public function add()
	{
        $param['pageInfo'] = 'Tambah User';
        $this->template->load('user/tambah-user',$param);
	}
    public function insert()
    {
        $insert = array(
            'nama_lengkap' => $_POST['nama_lengkap'],
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'level' => $_POST['level'],
        );
        $insert = $this->CommonModel->insert('user',$insert);
        if($insert){
            $this->session->set_flashdata("msg", alert('success','Tambah User Berhasil. User Baru Berhasil Ditambahkan'));
            redirect(base_url().'user');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Tambah User Gagal. Terjadi Kesalahan'));
            redirect(base_url().'user/insert');
        }
    }
	public function edit($id)
	{
        $param['pageInfo'] = 'Edit User';
        $param['user'] = $this->UserModel->getDataById('*',$id)->result_array()[0];
        $this->template->load('user/edit-user',$param);
	}
    public function update()
    {
        $update = array(
            'nama_lengkap' => $_POST['nama_lengkap'],
            'username' => $_POST['username'],
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'level' => $_POST['level'],
        );
        if($_POST['password']!=""){
            $insert['password'] = md5($_POST['password']);
        }
        $update = $this->CommonModel->update('user',$update,['id_user' => $_POST['id_user']]);
        if($update){
            $this->session->set_flashdata("msg", alert('success','Update User Berhasil. Data User Berhasil Diperbarui'));
            redirect(base_url().'user');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Tambah User Gagal. Terjadi Kesalahan'));
            redirect(base_url().'user/edit'.$_POST['id_user']);
        }
    }
    public function delete($id)
    {
        $delete = $this->CommonModel->delete('user',['id_user' => $id]);
        if($delete){
            $this->session->set_flashdata("msg", alert('success','Hapus User Berhasil. Data User Berhasil Dihapus'));
            redirect(base_url().'user');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Hapus User Gagal. Terjadi Kesalahan'));
            redirect(base_url().'user');
        }
    }
}
