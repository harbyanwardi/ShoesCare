<section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Layanan Kami</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                    $no = 1; 
                    foreach ($data as $show) {
                    ?>
                    <div class="col-md-6 col-sm-6 col-xs-12 delay_<?php echo $no; ?>">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <div class="icon"><i class="<?php echo $show['icon'] ?>"></i></div>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $show['jenis_layanan'] ?></h4>
                                    <p><?php echo $show['deskripsi'] ?></p>
                                    <p>Rp <?php echo $show['harga'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                <?php $no=$no+1; } ?>    
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>