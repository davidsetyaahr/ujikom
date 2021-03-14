<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierModel extends CI_Model {
    public function getData($select)
    {
        $this->db->select($select);
        $this->db->from('supplier');
        $this->db->order_by('id_supplier','desc');
        return $this->db->get();
    }
    public function getDataById($select,$id)
    {
        $this->db->select($select);
        $this->db->from('supplier');
        $this->db->where('id_supplier',$id);
        return $this->db->get();
    }
}
