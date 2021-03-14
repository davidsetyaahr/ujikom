<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('PembelianModel');
        $this->load->model('BarangModel');
        $this->load->model('SupplierModel');
        $this->load->model('UserModel');
    }

	public function index()
	{
        $param['pageInfo'] = 'List Pembelian';
        $param['pembelian'] = $this->PembelianModel->getData('tbd.id_trans,tbd.tanggal_datang,tbd.jumlah_datang,b.nama_barang,s.nama_supplier,u.nama_lengkap')->result_array();
        $this->template->load('pembelian/list-pembelian',$param);
	}
	public function add()
	{
        $param['pageInfo'] = 'Tambah Pembelian';
        $param['barang'] = $this->BarangModel->getData('id_barang,nama_barang')->result_array();
        $param['supplier'] = $this->SupplierModel->getData('id_supplier,nama_supplier')->result_array();
        $this->template->load('pembelian/tambah-pembelian',$param);
	}
    public function insert()
    {
        $insert = array(
            'id_barang' => $_POST['id_barang'],
            'id_supplier' => $_POST['id_supplier'],
            'id_user' => $this->session->userdata('id_user'),
            'tanggal_datang' => $_POST['tanggal_datang'],
            'jumlah_datang' => $_POST['jumlah_datang'],
        );
        $insert = $this->CommonModel->insert('trans_barang_datang',$insert);
        if($insert){
            $insert = $this->db->query("update barang set stok = stok + $_POST[jumlah_datang] where id_barang = '$_POST[id_barang]' ");
            $this->session->set_flashdata("msg", alert('success','Pembelian Barang Berhasil. Pembelian Baru Berhasil Ditambahkan'));
            redirect(base_url().'pembelian');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Pembelian Barang Gagal. Terjadi Kesalahan'));
            redirect(base_url().'pembelian/insert');
        }
    }

}
