<section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Tentang Kami</h3>
                        </div>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach ($data as $show) {
                    ?>
                <div class="col-md-12">
                    <div class="welcome-section text-center">
                        <div class="border"></div>
                        <p><?php echo $show['deskripsi'] ?></p>
                        <br>
                        <h5>Layanan Antar Jemput</h5>
                        
                        <p>Layanan antar jemput ini hanya dapat digunakan bagi pengguna yang berdomisili di daerah <b>Bekasi</b> . Tim kami akan menjemput sepatu kotor anda dari pukul <b>16.00 sampai 20.00</b> di setiap harinya . Pembayaran dilakukan secara <i>cash on delivery</i> pada saat penjemputan sepatu kotor .Pengguna dapat melihat status order layanan di website kami . Tim kami akan memberikan konfirmasi pada form cek status apabila sepatu sudah selesai di <i>treatment</i> . Biaya antar jemput disesuaikan berdasarkan jarak dari toko kami ke tempat anda dan bagi pengguna wilayah disekitar toko kami tidak dikenakan biaya antar jemput .</p>
                        <br>
                        <h5>Layanan Konsultasi</h5>
                        
                        <p>Layanan ini dapat digunakan oleh pengguna yang telah login kedalam website ini. Layanan ini bertujuan supaya pengguna yang kebingungan untuk memilih treatment apa yang cocok untuk sepatunya, terutama untuk treatment repaint dan recolour. Sebaiknya pengguna melakukan konsultasi kepada admin .</p>
                    </div>
                </div>
                <?php } ?>  
            </div><!-- /.row -->            
        </div><!-- /.container -->
    </section>