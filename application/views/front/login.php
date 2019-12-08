<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>EIGHTEEN SHOES CARE</title>
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
    <div class="image-container set-full-height" style="background-image: url('<?php echo base_url('assets/face/img/leathershoes3.jpg')?>')">
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
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="<?php echo base_url('front/login/auth') ?>" method="post">
                        <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Login
                                    </h3>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#captain" data-toggle="tab">Eighteen Shoes Care</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="captain">
                                        <h4 class="info-text">Masukan Username dan password untuk Login</h4>
                                        <?=$this->session->flashdata('pesan')?>
                                        <div class="row">
                                            <div class="col-sm-9 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Username</label>
                                                        <input name="username" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Password</label>
                                                        <input name="password" type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <br/>
                                                Belum Punya Akun ? <a href="<?php echo base_url('front/register') ?>" >Daftar Sekarang </a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <button class="btn btn-primary ">Login</button>
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
