<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <li class="dropdown navbar-brand">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil
                        <span class="caret"></span></a>
                        <ul  class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url()."front/register/do_edit/" ?>">Edit Profil</a></li>
                            <li><a href="<?php echo base_url('front/order/cekstatus') ?>">Cek Status</a></li>
                            <li><a href="<?php echo base_url('front/logout/index') ?>">Keluar</a></li>
                        </ul>
                    </li>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about-us">Tentang Kami</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Layanan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
 <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="assets/face/img/Image-97022.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1>
                                <span>EIGHTEEN <strong>SHOES CARE</strong></span>
                            </h1>
                            <p>Shoes Care Pertama <br> Dengan Fitur Order Online Via Website di Bekasi</p>  
                            <a href="<?php echo base_url('front/order/index')?>" class="btn btn-primary ">GUNAKAN LAYANAN ANTAR JEMPUT</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="assets/face/img/Image-36992.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1>
                              <span>EIGHTEEN <strong>SHOES CARE </strong></span>
                            </h1>
                            <p>Anda Ingin Konsultasi Masalah<br>Sepatu Anda ?</p>
                            <a href="<?php echo base_url('chat/index')?>" class="page-scroll btn btn-primary ">KLIK OBROLAN</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>   
