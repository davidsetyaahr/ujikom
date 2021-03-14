<a href="<?php echo base_url()."pembelian/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Tambah Pembelian</a>
<?php
    echo $this->session->flashdata('msg');
?>

<div class="table-responsive">
    <table class="table datatable table-custom">
        <thead>
            <tr>
                <td>#</td>
                <td>Nama Barang</td>
                <td>Jumlah Datang</td>
                <td>Tanggal Datang</td>
                <td>Supplier</td>
                <td>User</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($pembelian as $key => $value) {
                    $key++;
            ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['nama_barang'] ?></td>
                    <td><?= $value['jumlah_datang'] ?></td>
                    <td><?= dateOnly($value['tanggal_datang']) ?></td>
                    <td><?= $value['nama_supplier'] ?></td>
                    <td><?= $value['nama_lengkap'] ?></td>
                    <td>
                        <a href="<?= base_url().'pembelian/edit/'.$value['id_trans'] ?>" class="btn btn-success"><span class="fa fa-pencil-alt"></span></a>
                        <a href="<?= base_url().'pembelian/delete/'.$value['id_trans'] ?>" class="btn btn-danger confirm-alert" data-alert='Data Akan Terhapus' data-submit='Hapus'><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>