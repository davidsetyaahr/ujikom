<a href="<?php echo base_url()."barang/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Tambah Barang</a>
<?php
    echo $this->session->flashdata('msg');
?>

<div class="table-responsive">
    <table class="table datatable table-custom">
        <thead>
            <tr>
                <td>#</td>
                <td>Nama Barang</td>
                <td>Harga Beli</td>
                <td>Harga Jual</td>
                <td>Stok</td>
                <td>Terakhir Diupdate</td>
                <td>User</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($barang as $key => $value) {
                    $key++;
            ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['nama_barang'] ?></td>
                    <td><?= rupiah($value['harga_beli']) ?></td>
                    <td><?= rupiah($value['harga_jual']) ?></td>
                    <td><?= $value['stok'] ?></td>
                    <td><?= dateTime($value['last_update']) ?></td>
                    <td><?= $value['nama_lengkap'] ?></td>
                    <td>
                        <a href="<?= base_url().'barang/edit/'.$value['id_barang'] ?>" class="btn btn-success"><span class="fa fa-pencil-alt"></span></a>
                        <a href="<?= base_url().'barang/delete/'.$value['id_barang'] ?>" class="btn btn-danger confirm-alert" data-alert='Data Akan Terhapus' data-submit='Hapus'><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>