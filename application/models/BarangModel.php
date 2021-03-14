<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {
    public function getData($select)
    {
        $this->db->select($select);
        $this->db->from('barang');
        $this->db->join('user','barang.last_update_by = user.id_user');
        $this->db->order_by('nama_barang','asc');
        return $this->db->get();
    }
    public function getDataById($select,$id)
    {
        $this->db->select($select);
        $this->db->from('barang');
        $this->db->where('id_barang',$id);
        return $this->db->get();
    }
}
