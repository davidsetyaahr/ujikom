<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."barang" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <hr>
        <?php
            echo $this->session->flashdata('error');
        ?>
        <form method="POST" action="<?php echo base_url().'barang/update' ?>">
            <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">
            <div class="row">
                <div class="col-md-12">
                <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang" value="<?= $barang['nama_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Harga Beli</label>
                        <input type="number" class="form-control" name="harga_beli" placeholder="Masukkan Harga Beli" value="<?= $barang['harga_beli'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual</label>
                        <input type="number" class="form-control" name="harga_jual" placeholder="Masukkan Harga Jual"  value="<?= $barang['harga_jual'] ?>">
                    </div>
                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Masukkan Stok" value="<?= $barang['stok'] ?>">
                    </div>
                </div>
            </div>
            <?= btnSubmit() ?>
        </form>
    </div>
</div>
