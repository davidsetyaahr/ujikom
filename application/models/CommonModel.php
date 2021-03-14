<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	public function insert($tb,$value)
	{
		return $this->db->insert($tb,$value);
	}

	public function update($tb,$value,$where)
	{
		return $this->db->update($tb,$value,$where);
	}

	public function delete($tb,$where)
	{
		return $this->db->delete($tb,$where);
	}
}
