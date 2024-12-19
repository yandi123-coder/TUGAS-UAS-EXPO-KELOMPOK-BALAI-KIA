<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css Stylesheet -->
     <link rel="stylesheet" href="<?= base_url('asset-admin') ?>/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- favicon -->

    <!-- script tag -->

    <!-- ScrollReveal -->

    <!-- swiper js -->


    <!-- Title -->
    <title>2rism</title>
  </head>
  <body>

    <nav>
        <img src="<?php echo base_url('asset-admin'); ?>/image/veldays.png" class="logo" alt="Logo" title="FirstFlight Travels">
        <ul class="navbar">
            <li>
                <a href="">Home</a>
                <a href="<?= base_url('Admin/Location2Controller/locat1') ?>">Locations</a>
                <a href="<?= base_url('Admin/DestinationUController/destiu') ?>">Destinations</a>
                <a href="<?= base_url('Admin/PackageController/package') ?>">Packages</a>
                <a href="">About Us</a>
            </li>
        </ul>
        <a href="<?= base_url('admin/RegisterController/login') ?>"><button class="log">Sign Up</button></a>
    </nav>

    <!-- about -->
    <section id="About">
      <div class="about-content">
        <h2>About US</h2>
        <p>
        We are students who live in the Riau Islands and we want to introduce our environment to people out there who don't know about our area and that's why we created the Veldays website, At Veldays, we are a passionate team of travel enthusiasts dedicated to making your journey easier and more enjoyable. We believe that travel is one of the most enriching experiences in life, and our goal is to provide you with the best tools and resources to make your trips memorable. Whether you are a seasoned explorer or a first-time traveler, Veldays is here to guide you every step of the way, offering personalized recommendations, seamless booking options, and a platform that connects you to the heart of each destination
        </p>

         <div><img src="" alt=""></div>
      </div>

      <div class="about-img">
        <img class="test-img" src="<?= base_url('asset-admin') ?>/WisataBatam/gb.jpg" alt="" width="556" height="488">
      </div>
    </section>

    <footer class="cta" id="contact">
        <div class="contai">
          <div class="cta-con">
            <h2 class="h2 sec-tit">Looking for a classy tour guide ?</h2>
          </div>
          <button class="but but-secon">Booking Now!</button>
        </div>
      
        <div class="footer1">
          <div class="test-footer"> <img src="<?= base_url('asset-admin') ?>/image/footer.png" width="1600" height="250" class="bottom-div"></div> 
          <div> <img src="<?= base_url('asset-admin') ?>/image/veldays.png"class=top-div></div>
          <span class="follow">Follow Us</span>
          <a href="www.instagram.com/weslygui_">
          <i class="fa-brands fa-instagram icons"></i>
          </a>
          <a href="www.facebook.com/weslygui.weslygui?mibextid=ZbWKwL">
          <i class="fa-brands fa-facebook icons1"></i>
          </a>
          <span class="contact">Contact Us</span>
          <a href="wa.me/+6282171402382" target="_blank">
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

     
    <div class="toggleOn"><i class="uil uil-align-center-alt"></i></div>
    <div class="toggleClose"><i class="uil uil-multiply"></i></div>
  </body>
</html>