<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	public function login()
	{
        $this->db->select('id_user,username,level');
        $this->db->from('user');
        $this->db->where(['username' => $_POST['username'],'password' => md5($_POST['password'])]);
        return $this->db->get();
	}
    public function getData($select)
    {
        $this->db->select($select);
        $this->db->from('user');
        $this->db->order_by('id_user','desc');
        return $this->db->get();
    }
    public function getDataById($select,$id)
    {
        $this->db->select($select);
        $this->db->from('user');
        $this->db->where('id_user',$id);
        return $this->db->get();
    }
}
