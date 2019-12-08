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
                                    <br>
                                    <h5>Sepatu <?php echo $merk_sepatu; ?> dengan size <?php echo $size_sepatu; ?></h5>
                                    <h5><?php echo $ket_sepatu; ?></h5>
                                    <h5>STATUS : <?php echo $status; ?></h5>
                                    <hr>
                                    <br>
                                </div>
                            </div>   
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('welcome')?>"><input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Selesai' />
                                    </div>
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('front/order/cekstatus')?>"><input type='button' class='btn btn-primary' name='previous' value='Kembali' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->