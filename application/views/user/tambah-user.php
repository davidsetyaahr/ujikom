<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."user" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <hr>
        <?php
            echo $this->session->flashdata('error');
        ?>
        <form method="POST" action="<?php echo base_url().'user/insert' ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="mb-3">
                        <label>Level</label>
                        <select name="level" id="" class="select2 form-control">
                            <option>Admin</option>
                            <option>Kasir</option>
                        </select>
                    </div>
                </div>
            </div>
            <?= btnSubmit() ?>
        </form>
    </div>
</div>
