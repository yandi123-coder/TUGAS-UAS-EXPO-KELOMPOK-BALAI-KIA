<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset-admin') ?>/css/location.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- Background Video & Header -->

    <div class="banner">
        <video src="<?php echo base_url('asset-admin') ?>/image/karimun 2.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home"> 
        <nav>
            <img class="img-coba" src="<?php echo base_url('asset-admin'); ?>/image/veldays.png" class="logo" alt="Logo" title="FirstFlight Travels">
            <ul class="navbar">
                <li>
                    <a href="<?= base_url('Admin/Home2Controller/home2') ?>">Home</a>
                    <a href="<?= base_url('admin/LocationController/index') ?>">Locations</a>
                    <a href="<?= base_url('Admin/DestinationController/desti') ?>">Destinations</a>
                    <a href="<?= base_url('Admin/PackageController/package2') ?>">Packages</a>
                    <a href="<?= base_url('Admin/AboutController/about1') ?>">About Us</a>
                </li>
            </ul>
            <a href="<?= base_url('Admin/DashboardController/index') ?>" class="log">
                <img class="test=img" src="<?= base_url('asset-admin') ?>/image/gambar.png" alt="">
            </a>
        </nav>


        <div class="title">
                <h1>KARIMUN</h1>
            </div>
            <a href="<?= base_url(relativePath: 'admin/LocationController/index') ?>">
                <span class="anambas">Anambas</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/LocationController/index2') ?>">
                <span class="pinang">Tanjung Pinang</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/LocationController/index3') ?>">
                <span class="batam">Batam</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/LocationController/index4') ?>">
                <span class="karimun">Karimun</span>
            </a>
            <div class="block_1"></div>
            <hr />
            <a href="<?= base_url('admin/LocationController/index') ?>">
                <div class="oval1"></div>
            </a>

            <a href="<?= base_url('admin/LocationController/index2'); ?>">
            <div class="oval2"></div>
            </a>

            <a href="<?= base_url('admin/LocationController/index3'); ?>">
            <div class="oval3"></div>
            </a>

            <a href="<?= base_url('admin/Location2Controller/index4'); ?>">
            <div class="oval4"></div>
            </a>

        </div>
    </div>


    <div class="divi">
        <h1 class="take">Take of Tour of Karimun With Us</h1>
        <p class="para">Karimun is a charming tourist destination known for its beautiful beaches, 
            rich cultural heritage, and delicious local cuisine, offering visitors a 
            perfect blend of relaxation and exploration.
        </p>
    </div>
        <hr class="hr1">
        <hr class="hr2">

    <div class="im">
        <h1 class="ims">Gallery Of Karimun best trip</h1>

        <!-- Gallery Section Starts -->
        <section id="gallery">
            <div class="container">
                <div class="row">

                <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/at.jpeg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/gl.webp" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/pelawan.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/pk.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/sanur.webp" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataKarimun/telunas.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/asset-admin/Cafekarimun/bkt.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/asset-admin/Cafekarimun/nomina.jpg" alt=""
                                class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section Ends -->
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
                    <a href="">Home</a>
                    <a href="<?= base_url('admin/Location2Controller/locat1') ?>">Locations</a>
                    <a href="<?= base_url('Admin/DestinationUController/destiu') ?>">Destinations</a>
                    <a href="booking">Packages</a>
                    <a href="">About Us</a>
                </li>
            </ul>
    <span class="copyright">Copyright © 2024 Veldays. All right reserved. Site credit </span>
    </div>

</footer>

</body>

</html>