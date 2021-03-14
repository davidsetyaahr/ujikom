<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."barang" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <hr>
        <?php
            echo $this->session->flashdata('error');
        ?>
        <form method="POST" action="<?php echo base_url().'barang/insert' ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label>Harga Beli</label>
                        <input type="number" class="form-control" name="harga_beli" placeholder="Masukkan Harga Beli">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual</label>
                        <input type="number" class="form-control" name="harga_jual" placeholder="Masukkan Harga Jual">
                    </div>
                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Masukkan Stok">
                    </div>
                </div>
            </div>
            <?= btnSubmit() ?>
        </form>
    </div>
</div>
