<!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2 col-sm-5 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            <form action="<?php echo base_url('front/order/testi') ?>" method="POST">
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        CEK STATUS ORDER
                                    </h3>
                                    <br>
                                    <h5>Sepatu <?php echo $merk_sepatu; ?> dengan size <?php echo $size_sepatu; ?></h5>
                                    <h5><?php echo $ket_sepatu; ?></h5>
                                    <h5>Layanan Treatment : <?php echo $jenis_layanan; ?></h5>
                                    <h5>STATUS : <?php echo $status; ?></h5>
                                    <hr>
                                    <br>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#testimoni" data-toggle="tab">Testimoni</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="testimoni">
                                        <h4 class="info-text"></h4>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                               <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Bagaimana pelayanan yang kami berikan ?</label>
                                                        <textarea name="deskripsi_testimoni" type="text" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                             <br>
                                            <div class="wizard-header">
                                                <h5><i>Terima Kasih Telah Percaya Menggunakan Jasa Kami</i></h5>
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