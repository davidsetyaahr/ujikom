<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('BarangModel');
    }
	public function index()
	{
        $param['pageInfo'] = 'List Barang';
        $param['barang'] = $this->BarangModel->getData('barang.*,user.nama_lengkap')->result_array();
        $this->template->load('Barang/list-barang',$param);
	}
	public function add()
	{
        $param['pageInfo'] = 'Tambah Barang';
        $this->template->load('barang/tambah-barang',$param);
	}
    public function insert()
    {
        $insert = array(
            'nama_barang' => $_POST['nama_barang'],
            'harga_beli' => $_POST['harga_beli'],
            'harga_jual' => $_POST['harga_jual'],
            'stok' => $_POST['stok'],
            'last_update' => date('Y-m-d H:i:s'),
            'last_update_by' => $this->session->userdata('id_user'),
        );
        $insert = $this->CommonModel->insert('barang',$insert);
        if($insert){
            $this->session->set_flashdata("msg", alert('success','Tambah Barang Berhasil. Barang Baru Berhasil Ditambahkan'));
            redirect(base_url().'barang');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Tambah Barang Gagal. Terjadi Kesalahan'));
            redirect(base_url().'barang/insert');
        }
    }
	public function edit($id)
	{
        $param['pageInfo'] = 'Edit Barang';
        $param['barang'] = $this->BarangModel->getDataById('*',$id)->result_array()[0];
        $this->template->load('barang/edit-barang',$param);
	}
    public function update()
    {
        $update = array(
            'nama_barang' => $_POST['nama_barang'],
            'harga_beli' => $_POST['harga_beli'],
            'harga_jual' => $_POST['harga_jual'],
            'stok' => $_POST['stok'],
            'last_update' => date('Y-m-d H:i:s'),
            'last_update_by' => $this->session->userdata('id_user'),
        );
        $update = $this->CommonModel->update('barang',$update,['id_barang' => $_POST['id_barang']]);
        if($update){
            $this->session->set_flashdata("msg", alert('success','Update Barang Berhasil. Data Barang Berhasil Diperbarui'));
            redirect(base_url().'barang');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Update Barang Gagal. Terjadi Kesalahan'));
            redirect(base_url().'barang/edit'.$_POST['id_barang']);
        }
    }
    public function delete($id)
    {
        $delete = $this->CommonModel->delete('barang',['id_barang' => $id]);
        if($delete){
            $this->session->set_flashdata("msg", alert('success','Hapus Barang Berhasil. Data Barang Berhasil Dihapus'));
            redirect(base_url().'barang');
        }
        else{
            $this->session->set_flashdata("msg", alert('danger','Hapus Barang Gagal. Terjadi Kesalahan'));
            redirect(base_url().'barang');
        }
    }
}
