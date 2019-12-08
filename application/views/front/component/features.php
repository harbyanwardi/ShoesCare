<section id="feature" class="feature-section">
            <div class="container">
                <div class="row">
                <?php
                    $no = 1; 
                    foreach ($data as $show) {
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12 delay_<?php echo $no; ?>">
                        <div class="feature">
                            <div class="icon"><i class="<?php echo $show['icon'] ?>"></i></div>
                            <div class="feature-content">
                                <h4><?php echo $show['nama_features'] ?></h4>
                                <p><?php echo $show['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                <?php $no = $no+1; } ?>    
 
                </div><!-- /.row -->
            
            </div><!-- /.container -->
</section>