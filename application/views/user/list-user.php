<a href="<?php echo base_url()."user/add" ?>" class="btn btn-primary mb-3"> <span class="fa fa-plus-circle"></span> Tambah User</a>
<?php
    echo $this->session->flashdata('msg');
?>

<div class="table-responsive">
    <table class="table datatable table-custom">
        <thead>
            <tr>
                <td>#</td>
                <td>Username</td>
                <td>Nama Lengkap</td>
                <td>Level</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($user as $key => $value) {
                    $key++;
            ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['username'] ?></td>
                    <td><?= $value['nama_lengkap'] ?></td>
                    <td><?= $value['level'] ?></td>
                    <td>
                        <a href="<?= base_url().'user/edit/'.$value['id_user'] ?>" class="btn btn-success"><span class="fa fa-pencil-alt"></span></a>
                        <a href="<?= base_url().'user/delete/'.$value['id_user'] ?>" class="btn btn-danger confirm-alert" data-alert='Data Akan Terhapus' data-submit='Hapus'><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>