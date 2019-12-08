<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Eighteen Shoes Care | Form Order</title>

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
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/  css" media="all" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('<?php echo base_url('assets/face/img/vans1.jpg')?>')">
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
                            <form action="<?php echo base_url('front/order/do_insert') ?>" method="POST">
                        <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        EIGHTEEN SHOES CARE
                                    </h3>
                                    <h5>Kami siap melayani dengan sebaik baiknya</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        
                                        <li><a href="#captain" data-toggle="tab">Form Order</a></li>
                                        
                                        
                                    </ul>
                                </div>

                                <div class="tab-content">
                                
                                    
                                    <div class="tab-pane" id="captain">
                                        <h4 class="info-text">Isi Form Order Secara Lengkap dan Benar </h4>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                            <?=$this->session->flashdata('pesan')?>
                                               <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Merk Sepatu</label>
                                                        <input name="merk_sepatu" type="text" class="form-control">
                                                    </div>
                                                    
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Size Sepatu</label>
                                                        <input name="size_sepatu" type="text" class="form-control">
                                                    </div>
                                                    
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Keterangan Sepatu</label>
                                                        <input name="ket_sepatu" type="text" class="form-control">
                                                    </div>
                                                    <span style="font-size: 12px; color: #666;"><i>Isi keterangan dengan model dan warna sepatu</i></span>
                                                    <br>
                                                    
                                                </div>
                                                
                                              
                                                <br>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        
                                                    </span>
                                                    <span style="font-size: 15px; color: #666;">Pilih Layanan Treatment</span>
                                                    <div class="form-group">
                                                    
                                                        <input onclick="recolour_true()" type="radio" name="jenis_layanan" value="Fast Cleaning">Fast Cleaning
                                                        <input onclick="recolour_true()" type="radio" name="jenis_layanan" value="Deep Cleaning">Deep Cleaning
                                                        <input onclick="recolour_false()" type="radio" name="jenis_layanan" value="Repaint">Repaint
                                                        <input onclick="recolour_false()" type="radio" name="jenis_layanan" value="Recolour">Recolour
                                                        
                                                                                                     
                                                    </div>
                                                    
                                                </div>
                                                <br>
                                                
                                                <div id="warna" style="display:none" class="input-group">

                                                    <span class="input-group-addon">
                                                        
                                                    </span>
                                                    
                                                    <div class="form-group label-floating">
                                                        <label><i class="fa fa-paint-brush fa-2x"></i>Warna untuk Recolour</label>
                                                        <select class="form-control" name="warna">
                                                           
                                                            
                                                            <option value="">Warna yang tersedia</option>
                                                            <option value="Biru Navy">Biru Navy</option>
                                                            <option value="Biru Terang">Biru Terang</option>
                                                            <option value="Merah">Merah</option>
                                                            <option value="Merah Maroon">Merah Maroon</option>
                                                            <option value="Hitam">Hitam</option>
                                                            <option value="Pink">Pink</option>
                                                            <option value="Ungu">Ungu</option>
                                                            <option value="Kuning">Kuning</option>
                                                            <option value="Coklat">Coklat</option>
                                                            <option value="Hijau Terang">Hijau Terang</option>
                                                            <option value="Abu Abu">Abu Abu</option>

                                                            
                                                        </select> 
                                                    </div>
                                                    <span style="font-size: 12px; color: #666;"><i>Disarankan konsultasi dengan admin sebelum menggunakan layanan repaint dan recolour</i></span>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>KODE PROMO</label>
                                                    
                                                    <input class="form-control" name="kode_promo" />
                                                    
                                                </div>
                                                <div class="form-group">
                                                   
                                                    <input type="hidden" class="form-control" value="eighteenshoesclean@gmail.com" name="email" />
                                                    
                                                </div>  
                                                <br>
                                                <label>Alamat</label>
                                                <div class="form-group" style="border: 1px solid #CCC; margin: 10px 0px; padding: 10px; width: auto; height: auto; text-align: left;">
                                                
                                                <?php echo form_open('front/order/submit');?>
                                                    <div id="kota" style="width:250px;float:left;">
                                                    kota : <br/>
                                                    <?php
                                                        echo form_dropdown("kota_id",$option_kota,"","id='kota_id'");
                                                    ?>
                                                    </div>
                                                    <div id="kecamatan">
                                                    Kecamatan :<br/>
                                                    <?php
                                                        echo form_dropdown("kecamatan_id",array('Pilih Kecamatan'=>'Pilih kota Dahulu'),'','disabled');
                                                    ?>
                                                    </div>
                                                   
                                                    <script type="text/javascript">
                                                        $("#kota_id").change(function(){
                                                                var selectValues = $("#kota_id").val();
                                                                if (selectValues == 0){
                                                                    var msg = "Kecamatan :<br><select name=\"kecamatan_id\" disabled><option value=\"Pilih Kecamatan\">Pilih kota Dahulu</option></select>";
                                                                    $('#kecamatan').html(msg);
                                                                }else{
                                                                    var kota_id = {kota_id:$("#kota_id").val()};
                                                                    $('#kecamatan_id').attr("disabled",true);
                                                                    $.ajax({
                                                                            type: "POST",
                                                                            url : "<?php echo site_url('front/order/select_kecamatan')?>",
                                                                            data: kota_id,
                                                                            success: function(msg){
                                                                                $('#kecamatan').html(msg);
                                                                            }
                                                                    });
                                                                }
                                                        });
                                                       </script>
                                                       <br>
                                                       <br>
                                                       <label>Alamat Lengkap</label>
                                                       <input class="form-control" name="alamat_lengkap" />
                                                       <span style="font-size: 12px; color: #666;"><i>Isi Detail Alamat (Perumahan , RT , RW)</i></span>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                       
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        
                                        <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Lanjut' />
                                    </div>
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('welcome')?>"><input type='button' class='btn btn-primary' name='previous' value='Kembali' />

                                        <div class="footer-checkbox">
                                            <div class="col-sm-12">
                                              
                                          </div>
                                        </div>
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
    <script>
        function recolour_true() {
        document.getElementById("warna").style.display = 'none';
        
        }
        function recolour_false() {
        document.getElementById("warna").style.display = 'block';
        
        }
    </script>
</html>
