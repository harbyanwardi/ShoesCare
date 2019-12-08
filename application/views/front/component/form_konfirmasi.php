<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Form Konfirmasi Eighteen Shoes Care</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/font-awesome.css') ?>" />

    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/form/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/form/css/material-bootstrap-wizard.css') ?>" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url('assets/form/css/demo.css') ?>" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('<?php echo base_url('assets/face/img/vans1-2.jpg')?>')">
        <!--   Creative Tim Branding   -->
        <a href="<?php echo base_url('Welcome')?>">
             <div class="logo-container">
                <div class="logo">
                    <img src="<?php echo base_url('assets/form/img/logo181.png') ?>">
                </div>
                <div class="brand">
                    Beranda
                </div>
            </div>
        </a>

        <!--  Made With Material Kit  -->
        <a href="<?php echo base_url('Welcome')?>" class="made-with-mk">
            <div class="brand">EP</div>
            <div class="made-with">Eighteen Plus <strong>Shoes Care</strong></div>
        </a>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="<?php echo base_url('front/order/insert') ?>" method="POST">
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        EIGHTEEN SHOES CARE
                                    </h3>
                                    <h5>Kami siap melayani dengan sebaik baiknya</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#konfirmasi" data-toggle="tab">Konfirmasi</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="konfirmasi">
                                        <h4 class="info-text">Cek Kembali Form Dibawah Ini Sebelum Melanjutkan Transaksi</h4>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Merk Sepatu</label>
                                                        <input readonly name="merk_sepatu" type="text" value="<?php echo $merk_sepatu; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Size Sepatu</label>
                                                        <input readonly name="size_sepatu" type="text" value="<?php echo $size_sepatu; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Keterangan Sepatu</label>
                                                        <input readonly name="ket_sepatu" type="text" value="<?php echo $ket_sepatu; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-home fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Alamat Antar Jemput Sepatu</label>
                                                        <textarea readonly name="alamat" type="text" class="form-control"><?php echo $alamat; ?></textarea>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Jenis Layanan</label>
                                                        <input readonly name="jenis_layanan" type="text" value="<?php echo $jenis_layanan; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Warna untuk Recolour</label>
                                                        <input readonly name="warna" type="text" value="<?php echo $warna; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-offset-1">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-dollar fa-2x"></i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Harga</label>
                                                            <input readonly name="harga" type="text" value="<?php echo $harga; ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-dollar fa-2x"></i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Total Biaya</label>
                                                            <input readonly name="total" type="text" value="<?php echo $total; ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Biaya Antar Jemput</label>
                                                        <input readonly name="ongkir" type="text" value="Rp <?php echo $ongkir; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                 <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">KODE PROMO</label>
                                                        <input readonly name="kode_promo" type="text" value="<?php echo $kode_promo; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="eighteenshoesclean@gmail.com" name="to">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="eighteenshoesclean@gmail.com" name="from">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="Order Masuk" name="subject">   
                                                </div> 
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="<?php echo $tanggal ,"<br/> ", $username ,"<br/>", $merk_sepatu,"<br/>",$jenis_layanan,"<br/>",$alamat ?> " name="isi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Selesai' />
                                    </div>
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('front/order/index')?>"><input type='button' class='btn btn-primary' name='previous' value='Kembali' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->
        <div class="footer">
            <div class="container text-center">
                 Made with <i class="fa fa-heart heart"></i> by Creative Tim
            </div>
        </div>
    </div>

</body>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/form/js/jquery-2.2.4.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/form/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/form/js/jquery.bootstrap.js') ?>" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="<?php echo base_url('assets/form/js/material-bootstrap-wizard.js') ?>"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="<?php echo base_url('assets/form/js/jquery.validate.min.js') ?>"></script>
</html>
