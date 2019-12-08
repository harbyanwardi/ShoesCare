<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Cek Status | Eighteen Shoes Care</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

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
                <div class="col-md-7 col-md-offset-2 col-sm-5 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="<?php echo base_url('front/order/testi') ?>" method="POST">
                        <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        CEK STATUS ORDER
                                    </h3>
                                    <?=$this->session->flashdata('pesan')?>
                                    <br>
                                    <?php foreach($data as $d){ ?>
                                    <a href="<?php echo base_url()."front/Testimoni/index/".$d['id_order']; ?>">Sepatu <?php echo $d['merk_sepatu'] ?> <?php echo $d['ket_sepatu'] ?> dengan size <?php echo $d['size_sepatu'] ?></a>
                                    <hr>
                                    <?php } ?>
                                </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('welcome')?>"><input type='button' class='btn btn-primary' name='previous' value='Kembali' />
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
