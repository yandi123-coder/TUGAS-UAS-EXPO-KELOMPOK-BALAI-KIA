<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset-admin') ?>/css/desti.css">


</head>

<body>

    <!-- Background Video & Header -->

    <div class="banner">
        <video src="<?php echo base_url('asset-admin') ?>/image/video.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home">
        <nav>
            <img class="img-coba" src="<?php echo base_url('asset-admin'); ?>/image/veldays.png" class="logo" alt="Logo" title="FirstFlight Travels">
            <ul class="navbar">
                <li>
                    <a href="<?= base_url('Admin/HomeController/home') ?>">Home</a>
                    <a href="<?= base_url('admin/LocationController/index') ?>">Locations</a>
                    <a href="<?= base_url('Admin/DestinationController/desti') ?>">Destinations</a>
                    <a href="<?= base_url('Admin/PackageController/package2') ?>">Packages</a>
                    <a href="<?= base_url('Admin/AboutController/about1') ?>">About Us</a>
                </li>
            </ul>
            <a href="<?= base_url('Admin/DashboardController/index') ?>">
                <img class="test-img" src="<?= base_url('asset-admin') ?>/image/gambar.png" alt="">
            </a>
        </nav>

            <div class="title">
                <h1>Tanjung Pinang</h1>
            </div>
            <a href="<?= base_url(relativePath: 'admin/DestinationController/desti') ?>">
                <span class="anambas">Anambas</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/DestinationController/desti1') ?>">
                <span class="pinang">Tanjung Pinang</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/DestinationController/desti2') ?>">
                <span class="batam">Batam</span>
            </a>
            <a href="<?= base_url(relativePath: 'admin/DestinationController/desti3') ?>">
                <span class="karimun">Karimun</span>
            </a>
            <div class="block_1"></div>
            <hr />
            <a href="<?= base_url('admin/DestinationController/desti') ?>">
            <div class="oval1"></div>
            </a>

            <a href="<?= base_url('admin/DestinationController/desti1'); ?>">
            <div class="oval2"></div>
            </a>

            <a href="<?= base_url('admin/DestinationController/desti2'); ?>">
            <div class="oval3"></div>
            </a>

            <a href="<?= base_url('admin/DestinationController/desti3'); ?>">
            <div class="oval4"></div>
            </a>

        </div>
    </div>




    <div class="im">
        <h1 class="ims">Hotels and resorts in Tanjung Pinang</h1>

        <!-- Gallery Section Starts -->
            <div class="container">
                <div class="row">

                    <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                        <div class="tex">
                                <h1 class="text">Aston</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelPinang/hoteltj1.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex">
                                <h1 class="text">Bintan Nirwana Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelPinang/hoteltj2.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex">
                                <h1 class="text">Panorama Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelPinang/hoteltj3.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex1">
                                <h1 class="text1">Pelangi Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelPinang/hoteltj4.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex1">
                                <h1 class="text1">Hotel 01</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelPinang/hoteltj5.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                        <div class="tex1">
                                <h1 class="text1">Angsana Hotel</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/HotelPinang/hoteltj6.jpg" alt=""
                                class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
    </div>

    
    <div class="im">
        <h1 class="ims">Food n Beverages in Tanjung Pinang</h1>

        <!-- Gallery Section Starts -->
            <div class="container">
                <div class="row">

                    <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                        <div class="tex2">
                                <h1 class="text2">Manabu</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/RestoPinang/manabu.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                                                    <div class="tex2">
                                <h1 class="text2">Nelayan Seafood</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/RestoPinang/nelayan seafood.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                                                    <div class="tex2">
                                <h1 class="text2">Sederhana</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/RestoPinang/resto sederhana.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                                                    <div class="tex5">
                                <h1 class="text5">Sams Anna</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/RestoPinang/sams anna seafood.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                                                    <div class="tex5">
                                <h1 class="text5">Sei Enam Seafood</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/RestoPinang/sei enam seafood.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                                                    <div class="tex5">
                                <h1 class="text5">Tomo Japanese</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/RestoPinang/tomo japanese.webp" alt=""
                                class="img-responsive">
                        </div>
                </div>
            </div>
    </div>

    
    <div class="im">
        <h1 class="ims">Tourist Attraction in Tanjung Pinang</h1>

        <!-- Gallery Section Starts -->
            <div class="container">
                <div class="row">

                    <div class="filter-gal-par">
                        <div class="gallery-item filter diving">
                        <div class="tex4">
                                <h1 class="text4">Laman Boenda Park</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataPinang/bukit panglong.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex4">
                                <h1 class="text4">Panglo Hill</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataPinang/gedung gong gong.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter diving">
                        <div class="tex4">
                                <h1 class="text4">Penyengat Island</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataPinang/pulau penyengat111.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex7">
                                <h1 class="text7">Treasure Bay</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataPinang/treasure bay..jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter health">
                        <div class="tex7">
                                <h1 class="text7">Trikora Beach</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataPinang/trikora.jpg" alt=""
                                class="img-responsive">
                        </div>
                        <div class="gallery-item filter nature">
                        <div class="tex7">
                                <h1 class="text7">Ksitigarbha Bodhisattva Temple</h1>
                                </div>
                            <img src="<?php echo base_url(relativePath: 'asset-admin') ?>/WisataPinang/vihara.jpg" alt=""
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
                <a href="<?= base_url('Admin/Home2Controller/home2') ?>">Home</a>
                          <a href="<?= base_url('admin/Location2Controller/locat1') ?>">Locations</a>
                          <a href="<?= base_url('Admin/DestinationUController/destiu') ?>">Destinations</a>
                          <a href="<?= base_url('Admin/PackageController/package2') ?>">Packages</a>
                          <a href="<?= base_url('Admin/AboutController/about1') ?>">About Us</a>
                </li>
            </ul>
    <span class="copyright">Copyright © 2024 Veldays. All right reserved. Site credit </span>
    </div>
    </footer>

</body>

</html>