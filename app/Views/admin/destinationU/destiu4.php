<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset-admin') ?>/css/desti.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- Background Video & Header -->

    <div class="banner">
        <video src="<?php echo base_url('asset-admin') ?>/image/karimun 2.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home"> 
        <nav>
            <img src="<?php echo base_url('asset-admin'); ?>/image/veldays.png" class="logo" alt="Logo" title="FirstFlight Travels">
            <ul class="navbar">
                <li>
                    <a href="<?= base_url('Admin/HomeController/home') ?>">Home</a>
                    <a href="<?= base_url('admin/Location2Controller/locat1') ?>">Locations</a>
                    <a href="<?= base_url('Admin/DestinationUController/destiu') ?>">Destinations</a>
                    <a href="<?= base_url('Admin/PackageController/package') ?>">Packages</a>
                    <a href="<?= base_url('Admin/AboutController/about') ?>">About Us</a>
                </li>
            </ul>
            <a href="<?= base_url('admin/RegisterController/login') ?>"><button class="log">Sign Up</button></a>
        </nav>


            <div class="title">
                <h1>Karimun</h1>
            </div>
            <a href="<?= base_url(relativePath: 'admin/DestinationUController/destiu') ?>">
                <span class="anambas">Anambas</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/DestinationUController/destiu1') ?>">
                <span class="pinang">Tanjung Pinang</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/DestinationUController/destiu2') ?>">
                <span class="batam">Batam</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/DestinationUController/destiu3') ?>">
                <span class="karimun">Karimun</span>
            </a>
            <div class="block_1"></div>
            <hr />
            <a href="<?= base_url('admin/DestinationUController/destiu') ?>">
            <div class="oval1"></div>
            </a>

            <a href="<?= base_url('admin/DestinationUController/destiu1'); ?>">
            <div class="oval2"></div>
            </a>

            <a href="<?= base_url('admin/DestinationUController/destiu2'); ?>">
            <div class="oval3"></div>
            </a>

            <a href="<?= base_url('admin/DestinationUController/destiu3'); ?>">
            <div class="oval4"></div>
            </a>

        </div>
    </div>




    <div class="im">
        <h1 class="ims">Hotels and resorts in Karimun</h1>

        <!-- Gallery Section Starts -->
            <div class="container">
                <div class="row">

                    <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                        <div class="tex">
                                <h1 class="text">Aston Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelKarimun/aston.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex">
                                <h1 class="text">Karimun City</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelKarimun/city.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex">
                                <h1 class="text">21 Karimun Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelKarimun/21.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex1">
                                <h1 class="text1">Maximiliam Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelKarimun/maxim.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex1">
                                <h1 class="text1">Paradise Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelKarimun/paradise.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                        <div class="tex1">
                                <h1 class="text1">H3 Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelKarimun/h3.webp" alt=""
                                class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
    </div>

    
    <div class="im">
        <h1 class="ims">Food n Beverages in Karimun</h1>

        <!-- Gallery Section Starts -->
            <div class="container">
                <div class="row">

                    <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                        <div class="tex2">
                                <h1 class="text2">Lawet Cafe</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/CafeKarimun/lawet.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex2">
                                <h1 class="text2">Mula Cafe</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/CafeKarimun/mula.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex2">
                                <h1 class="text2">Nomina Cafe</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/CafeKarimun/nomina.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex5">
                                <h1 class="text5">Bak Kut Teh Simpang 4</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/CafeKarimun/bkt.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex5">
                                <h1 class="text5">Ayam Geprek Joglo</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/CafeKarimun/jfc.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex5">
                                <h1 class="text5">Momo Cafe</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/CafeKarimun/momo.jpg" alt=""
                                class="img-responsive">
                        </div>
                </div>
            </div>
    </div>

    
    <div class="im">
        <h1 class="ims">Tourist Attraction in Karimun</h1>

        <!-- Gallery Section Starts -->
            <div class="container">
                <div class="row">

                    <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                        <div class="tex4">
                                <h1 class="text4">Jantan Hill Waterfall</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/at.jpeg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex4">
                                <h1 class="text4">Ketam Beach</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/pk.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex4">
                                <h1 class="text4">Pelawan Beach</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/pelawan.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex7">
                                <h1 class="text7">Coastal Area Karimun</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/gl.webp" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex7">
                                <h1 class="text7">Telunas Beach</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/telunas.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                        <div class="tex7">
                                <h1 class="text7">Sanur Bridge</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/sanur.webp" alt=""
                                class="img-responsive">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <footer class="cta" id="contact">
  <div class="contai">
    <div class="cta-con">
      <h2 class="h2 sec-tit">Looking for a classy tour guide ?</h2>
    </div>
    <button class="but but-secon">Booking Now!</button>
  </div>

  <div class="footer1">
    <div> <img src="<?php echo base_url('asset-admin'); ?>/image/footer.png" width="1600" height="250" class="bottom-div"></div> 
    <div> <img src="<?php echo base_url('asset-admin'); ?>/image/veldays.png"class=top-div></div>
    <span class="follow">Follow Us</span>
    <a href="www.instagram.com/weslygui_">
    <i class="fa-brands fa-instagram icons"></i>
    </a>
    <a href="www.facebook.com/weslygui.weslygui?mibextid=ZbWKwL">
    <i class="fa-brands fa-facebook icons1"></i>
    </a>
    <span class="contact">Contact Us</span>
    <a href="wa.me/+6282171402382">
    <i class="fa-brands fa-whatsapp icons2"></i>
    </a>
    <ul class="footer">
                <li>
                <a href="<?= base_url('Admin/HomeController/home') ?>">Home</a>
                    <a href="<?= base_url('admin/Location2Controller/locat1') ?>">Locations</a>
                    <a href="<?= base_url('Admin/DestinationUController/destiu') ?>">Destinations</a>
                    <a href="<?= base_url('Admin/PackageController/package') ?>">Packages</a>
                    <a href="<?= base_url('Admin/AboutController/about') ?>">About Us</a>
                </li>
            </ul>
    <span class="copyright">Copyright © 2024 Veldays. All right reserved. Site credit </span>
    </div>

</footer>

</body>

</html>