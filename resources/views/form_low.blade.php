@include('layout.navbar')
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Form Memasang Lowongan Pekerjaan.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End --><br><Br><br>
    <div class="form">
       <div class="kontainer">
           <div class="title">Form Lowongan Pekerjaan</div>
           <form action="/store" method="POST">
            @csrf
               <div class="user-details">

                <div class="input-box">
                    <span class="details">Jabatan</span>
                        <input type="text" name="jabatan" class="text" placeholder="Pekerjaan yang ditawarkan" >

                </div>
                <div class="input-box">
                    <span class="details">Gaji</span>
                        <input type="text" name="gaji" class="text" placeholder="Gaji" >

                </div>

                <div class="input-box">
                    <span class="details">Deskripsi Pekerjaan</span>
                        <textarea name="desk_pek" rows="4" cols="31" type="text" class="text" placeholder="Deskripsi Pekerjaan" ></textarea>

                </div>
                <div class="input-box">
                    <span class="details">Keahlian yang harus dimiliki</span>
                        <input type="text" name="skill" class="text" placeholder="Keahlian yang harus dimiliki" >

                </div>
                <div class="input-box">
                    <span class="details">Edukasi</span>
                        <input type="text" name="edukasi" class="text" placeholder="Edukasi Minimal" >

                </div>
                <div class="input-box">
                    <span class="details">Pengalaman</span>
                        <input type="text" name="pengalaman" class="text" placeholder="Pengalaman Kerja Minimal" >

                </div>
                <div class="input-box">
                    <span class="details">Lowongan yang Tersedia</span>
                        <input type="text" name="lowtersedia" class="text" placeholder="Jumlah Lowongan" >

                </div>
                <div class="radio">
                    <span class="detil">Sifat Pekerjaan</span>
                    <input type="radio" name="sifat" id="html" name="fav_language" value="Tetap">
                    <label for="html">Tetap</label><br>
                    <input type="radio" name="sifat" id="css" name="fav_language" value="Paruh Waktu">
                    <label for="css">Paruh Waktu</label><br>
                    <input type="radio" name="sifat" id="javascript" name="fav_language" value="Remote">
                    <label for="javascript">Remote</label><br>
                    <input type="radio" name="sifat" id="javascript" name="fav_language" value="Freelance">
                    <label for="javascript">Freelance</label>
                </div>
               </div>
               <input type="submit" value="save">
           </form>
       </div>
    </div>
    <br><br><br><br>

        <p>Please select your favorite Web language:</p>


    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>Tentang Kami</h4>
                                 <div class="footer-pera">
                                     <p>Looker.com adalah website yang menyediakan lowongan pekerjaaan di berbagai daerah dan juga berbagai pekerjaan.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Kontak</h4>
                                <ul>
                                    <li>
                                    <p>Alamat : Jl Pasang Gurun no 38</p>
                                    </li>
                                    <li><a href="#">Phone : +877-2027-2726</a></li>
                                    <li><a href="#">Email : looker@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Link Cepat</h4>
                                <ul>
                                    <li><a href="#">Beranda</a></li>
                                    <li><a href="#">Cari Lowongan</a></li>
                                    <li><a href="#">Cara Memasang Lowongan</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">

                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">

                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->

        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p>
  Copyright 2021 |  Looker.com </a>
  </p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    </body>
</html>
