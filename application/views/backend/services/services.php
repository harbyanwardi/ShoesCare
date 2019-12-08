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
     <!-- MORRIS CHART STYLES-->
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/admin/css/custom.css') ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url('assets/admin/js/dataTables/dataTables.bootstrap.css') ?>" rel="stylesheet" />
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
                <a class="navbar-brand" href="<?php echo base_url('admin/Admin') ?>">Admin</a> 
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
                        <a  href="<?php echo base_url('admin/C_portofolio') ?>"><i class="fa fa-photo fa-3x"></i> Portfolio</a>
                    </li>
                     <li  >
                        <a class="active-menu"  href="<?php echo base_url('admin/C_services') ?>"><i class="fa fa-paint-brush fa-3x"></i>Layanan</a>
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
                     <h2>Table Layanan</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Service
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?=$this->session->flashdata('pesan')?>
                                <a href="<?php echo base_url('admin/C_services/add')?>"><button class="btn btn-success" style="margin-bottom: 10px;">TAMBAH</button></a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Jenis Layanan</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Icon</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($data as $show){ 
                                         ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['jenis_layanan']?></td>
                                            <td><?php echo $show['deskripsi']?></td>
                                            <td><?php echo $show['harga']?></td>
                                            <td><?php echo $show['icon']?></td>
                                            </td>
                                            <td align="center">
                                                <a href="<?php echo base_url()."admin/C_services/do_edit/".$show['id_services']; ?>"><button class="btn btn-primary btn-sm" style="margin-bottom: 5px;">EDIT</button></a>
                                                <a href="<?php echo base_url()."admin/C_services/do_delete/".$show['id_services']; ?>"><button class="btn btn-danger btn-sm" style="margin-bottom: 5px;">DELETE</button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/jquery.metisMenu.js') ?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/dataTables/dataTables.bootstrap.js') ?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/custom.js') ?>"></script>
</body>
</html>
