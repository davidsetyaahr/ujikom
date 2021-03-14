<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo assetUrl() ?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link
      href="<?php echo assetUrl() ?>vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?php echo assetUrl() ?>css/custom.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINTAK - LOGIN</title>
</head>
<body class="bg-light">
    <div class="container container-login">
        <div class="row justify-content-center">
            <div class="col-md-10" id="body_form" style="overflow:auto">
                <div class="box-login">
                <?php
                    echo $this->session->flashdata('error');
                ?>
                    <div class="left">
                        <form action="<?= base_url()."auth/login" ?>" method="post">
                            <img src="<?= assetUrl().'img/LSP.png' ?>" width='150px' alt="">
                            <br>
                            <label for="" class="mt-4">Username</label>
                            <div class="form-underline username">
                                <input type="text" placeholder="Masukkan Username" name="username" required autofocus>
                                <span class="fa fa-user"></span>
                            </div>
                            <br>
                            <label for="">Password</label>
                            <div class="form-underline password">
                                <input type="password" placeholder="Masukkan Password" name="password" required>
                                <span class="fa fa-lock"></span>
                            </div>
                            <br>
                            <a href="<?php echo base_url() . 'resetpassword' ?>" >Reset Password</a>
                            <br>
                            <br>
                            <button type="sumit" class="btn btn-primary px-5 font-weight-bold ls-1">Login</button>
                        </form>
                    </div>
                    <div class="right">
                        <div class="text">
                            <h5>Selamat Datang di</h5>
                            <p class="font-weight-light">Ujian Kompetensi Web POLIJE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright mt-4">
      <span>Copyright &copy; Sintak JTI <?= date('Y') ?></span>
    </div>
<!-- jQuery 3 -->
<script src="<?php echo assetUrl(); ?>vendor/jquery/jquery.min.js"></script>

	<script src="<?php echo assetUrl() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</script>
