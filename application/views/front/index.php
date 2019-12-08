<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EIGHTEEN SHOES CARE</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/backend/asset/css/bootstrap.min.css') ?>" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url('assets/backend/css/font-awesome.min.css') ?>" rel="stylesheet">
    
    <!-- Animate CSS -->
    <link href="<?php echo base_url('assets/backend/css/animate.css') ?>" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/owl.carousel.css') ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/owl.theme.css') ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/owl.transitions.css') ?>" >

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/backend/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/css/responsive.css') ?>" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/backend/css/color/green.css') ?>">
    
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    <!-- Modernizer js -->
    <script src="<?php echo base_url('assets/backend/js/modernizr.custom.js') ?>"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">

    <!-- Navigation -->
    <?php echo $nav; ?>
    
    <!-- Start About Us Section -->
        <?php echo $about; ?>
    <!-- End About Us Section -->

    <!-- Start Feature Section -->
       <?php echo $features; ?> 
        <!-- End Feature Section -->

    <!-- Start Portfolio Section -->
        <?php echo $portofolio; ?>
        <!-- End Portfolio Section -->
    
    <!-- Start Portfolio Modal Section -->
        <?php echo $portofolio_modal; ?>
        <!-- End Portfolio Modal Section -->
    
    <!-- Start Feature Section -->
        <?php echo $services; ?>
        <!-- End Feature Section -->

    <!-- Start Testimonial Section -->
    <?php echo $testimoni; ?>
    <!-- End Testimonial Section -->

    <section id="contact" class="contact">
        <?php echo $contact; ?>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <span class="copyright">Copyright &copy; GuardinTheme 2015</span>
                    </div>
                    
                </div>
            </div>
        </footer>
    </section>
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    
    <!-- jQuery Version 2.1.1 -->
    <script src="<?php echo base_url('assets/backend/js/jquery-2.1.1.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/backend/asset/js/bootstrap.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/backend/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/classie.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/count-to.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/jquery.appear.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/cbpAnimatedHeader.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/owl.carousel.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/backend/js/jquery.fitvids.js') ?>"></script>
	<script src="<?php echo base_url('assets/backend/js/styleswitcher.js') ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/backend/js/jqBootstrapValidation.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/contact_me.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/backend/js/script.js') ?>"></script>

</body>
</html>
