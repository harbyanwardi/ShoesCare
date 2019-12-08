<section id="portfolio" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Portfolio</h3>
                            <p></p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                
                    <div class="col-md-12">
                        
                        <!-- Start Portfolio items -->
                        <ul id="portfolio-list">
                        <?php
                            $no = 1; 
                            foreach ($data as $show) { ?>    
                            <li>
                            
                                <div class="portfolio-item delay_<?php echo $no; ?>" >
                                    <img src="<?php echo base_url().'assets/backend/uploads/image_resize/portofolio/'.$show['gambar'] ?>" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4><?php echo $show['nama_kegiatan'] ?></h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                               
                            </li>
                        <?php $no = $no+1; } ?>        
                            
                        </ul>
                        <!-- End Portfolio items -->
                    </div>
                 
                </div>
            </div>
        </section>