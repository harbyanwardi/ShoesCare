<div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Portfolio Detail</h3>
                            
                        </div>
                    </div>
                    <div class="row">
                     <?php
                            $no = 1; 
                            foreach ($data as $show) { ?>
                        
                        <div class="col-md-6 delay_<?php echo $no; ?>">
                            <img src="<?php echo base_url().'assets/backend/uploads/image/portofolio/'.$show['gambar'] ?>" class="img-responsive" alt="..">
                        </div>
                        
                     <?php $no = $no+1; } ?>   
                    </div><!-- /.row -->
                </div>                
            </div>
        </div>