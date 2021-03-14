<div class="card shadow py-2">
    <div class="card-body">
        <a href="<?php echo base_url()."pembelian" ?>" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Lihat Data</a>
    <hr>
        <?php
            echo $this->session->flashdata('error');
        ?>
        <form method="POST" action="<?php echo base_url().'pembelian/insert' ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <select name="id_barang" id="" class="select2 form-control">
                            <option value="">---Pilih Barang---</option>
                            <?php 
                                foreach ($barang as $key => $value) {
                                    echo "<option value='$value[id_barang]'>$value[nama_barang]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Supplier</label>
                        <select name="id_supplier" id="" class="select2 form-control">
                            <option value="">---Pilih Barang---</option>
                            <?php 
                                foreach ($supplier as $key => $value) {
                                    echo "<option value='$value[id_supplier]'>$value[nama_supplier]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Datang</label>
                        <input type="text" class="datepicker form-control" name="tanggal_datang" placeholder="Masukkan Tanggal Datang">
                    </div>
                    <div class="mb-3">
                        <label>Jumlah Datang</label>
                        <input type="number" class="form-control" name="jumlah_datang" placeholder="Masukkan Jumlah Datang">
                    </div>
                </div>
            </div>
            <?= btnSubmit() ?>
        </form>
    </div>
</div>
