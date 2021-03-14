<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."user" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <hr>
        <?php
            echo $this->session->flashdata('error');
        ?>
        <form method="POST" action="<?php echo base_url().'user/update' ?>">
            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?= $user['nama_lengkap'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?= $user['tanggal_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?= $user['username'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" name="password" placeholder="Kosongi Jika Tidak Ingin Mengubah Password">
                    </div>
                    <div class="mb-3">
                        <label>Level</label>
                        <select name="level" id="" class="select2 form-control">
                            <option <?= $user['level']=='admin' ? 'selected' : '' ?>>Admin</option>
                            <option <?= $user['level']=='kasir' ? 'selected' : '' ?>>Kasir</option>
                        </select>
                    </div>
                </div>
            </div>
            <?= btnSubmit() ?>
        </form>
    </div>
</div>
