<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembelianModel extends CI_Model {

    public function getData($select)
    {
        $this->db->select($select);
        $this->db->from("trans_barang_datang as tbd");
        $this->db->join('barang as b','tbd.id_barang = b.id_barang');
        $this->db->join('supplier as s','tbd.id_supplier = s.id_supplier');
        $this->db->join('user as u','tbd.id_user = u.id_user');
        $this->db->order_by('tanggal_datang','desc');
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
