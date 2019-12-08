<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Shoes Care</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.css') ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/admin/css/font-awesome.css') ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/admin/css/custom.css') ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('admin/Admin') ?>">Admin </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="<?php echo base_url('logout/index') ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url().'assets/admin/img/find_user.png'?>" class="user-image img-responsive"/>
					</li>
                   <li>
                        <a href="<?php echo base_url('admin/Admin') ?>"><i class="fa fa-dashboard fa-3x"></i> Data Order Online</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('admin/C_transaksi') ?>"><i class="fa fa-book fa-3x"></i>Aktivitas Transaksi</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('chat') ?>"><i class="fa fa-comments fa-3x"></i>Obrolan</a>
                    </li>
                    <li  >
                        <a  href="<?php echo base_url('admin/C_features') ?>"><i class="fa fa-table fa-3x"></i> Fitur</a>
                    </li>
                    <li  >
                        <a   href="<?php echo base_url('admin/C_Account') ?>"><i class="fa fa-user fa-3x"></i> Akun</a>
                    </li> 
                     <li  >
                        <a href="<?php echo base_url('admin/C_portofolio') ?>"><i class="fa fa-photo fa-3x"></i> Portfolio</a>
                    </li>
                     <li  >
                        <a class="active-menu" href="<?php echo base_url('admin/C_services') ?>"><i class="fa fa-paint-brush fa-3x"></i>Layanan</a>
                    </li>
                     <li  >
                        <a   href="<?php echo base_url('admin/C_testimoni') ?>"><i class="fa fa-comments fa-3x"></i> Testimoni</a>
                    </li>
                    <li  >
                        <a href="<?php echo base_url('admin/C_about') ?>"><i class="fa fa-edit fa-3x"></i> Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Jasa Layanan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>LAYANAN</h3>
                                    <form role="form"  action="<?php echo base_url('admin/C_services/do_insert') ?>" method="POST" enctype="multipart/form-data">
                                         <div class="form-group">
                                            <label>Jenis Layanan</label>
                                            <input name="jenis_layanan" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Icon</label>
                                            <input name="icon" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                             <textarea class="form-control" rows="3" name="deskripsi" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input name="harga" class="form-control" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">SELESAI</button>
                                    </form>
                                    <br />
    </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/jquery.metisMenu.js') ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
