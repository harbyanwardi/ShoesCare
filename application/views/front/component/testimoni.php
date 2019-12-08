<div id="testimonial" class="testimonial-section">
        <div class="container">
            <!-- Start Testimonials Carousel -->
            <div class="section-title text-center">
                            <h3>Testimoni</h3>  
                            <p></p>
                        </div>
            <div id="testimonial-carousel" class="testimonials-carousel">
            <?php
             foreach ($data as $show) {
            ?>
                <!-- Testimonial 1 -->
                <div class="testimonials ">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url().'assets/backend/uploads/image_resize/account/'.$show['foto_profil'] ?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $show['username'] ?></div>
                            <div class="designation"></div>
                        </div>
                        <p><i>" <?php echo $show['deskripsi_testimoni']?> "<i></p>
                    </div>
                </div>
            <?php } ?>
            </div>
            <!-- End Testimonials Carousel -->
        </div>
    </div>
