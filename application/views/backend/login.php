<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Shoes Care</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/backend/asset/css/bootstrap.css') ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/backend/css/font-awesome.css')?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/backend/css/custom.css') ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Admin Shoes Care : Login</h2>
                <h5>( Login untuk mendapatkan akses )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Masukan username dan password untuk Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo base_url('login/auth') ?>" method="post" role="form" >
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                             <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                        </div>
                                     <button class="btn btn-primary ">Login Now</button>
                                    <hr />
                                    </form>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/backend/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/backend/js/bootstrap.min.js')?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/backend/js/jquery.metisMenu.js')?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/backend/js/custom.js')?>"></script>
</body>
</html>
