<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset-admin') ?>/css/home2.css">

     
</head>
<body>

<!-- Background Video & Header -->
<div class="banner">
        <video src="<?php echo base_url('asset-admin'); ?>/image/video.mp4" type="video/mp4" autoplay muted loop></video>
    
    <!-- Header -->

    <div class="content" id="home"> 
        <nav>
            <img src="<?php echo base_url('asset-admin'); ?>/image/veldays.png" class="logo" alt="Logo" title="FirstFlight Travels">
            <ul class="navbar">
                <li>
                    <a href="<?= base_url('Admin/Home2Controller/home2') ?>">Home</a>
                    <a href="<?= base_url('Admin/LocationController/index') ?>">Locations </a>
                    <a href="<?= base_url('Admin/DestinationController/desti') ?>">Destinations</a>
                    <a href="<?= base_url('Admin/PackageController/package2') ?>">Packages</a>
                    <a href="<?= base_url('Admin/AboutController/about1') ?>">About Us</a>
                </li>
            </ul>
            <a href="<?= base_url('Admin/DashboardController/index') ?>">
            <div class="log">
                    <img src="<?= base_url('asset-admin') ?>/image/gambar.png"  width="38px">
                  </div>
                </a> 
        </nav>
 
        <div class="title">
            <h1>WELCOME TO VELDAYS</h1>
            <p>Plan your trip with us and travel around the world with the most affordable packages!</p>
        </div>
        </div>
    </div>

    <section id="activities">
        <div class="container">
          <div class="title-container">
            <h2 class="section-title"></h2>
            <div class="section-button"> <img src="/Imgs/icons/bleft.png" alt=""></div>
          </div>
  
          <!-- Activities Cards -->
          <div class="activities-cards">
            <a href="<?= base_url(relativePath: 'admin/Location2Controller/locat1') ?>">
            <div class="photocard">
              <img src="<?php echo base_url('asset-admin'); ?>/image/anambas.jpg" alt="" width="315" height="452">
              <h4>Anambas</h4>
            </div>
            </a>
            <a href="<?= base_url(relativePath: 'admin/Location2Controller/locat2') ?>">
            <div class="photocard">
              <img src="<?php echo base_url('asset-admin'); ?>/image/pinang.jpeg" alt="" width="315" height="452">
              <h4>Tanjung Pinang</h4>
            </div>
            </a>
            <a href="<?= base_url(relativePath: 'admin/Location2Controller/locat3') ?>">
            <div class="photocard">
              <img src="<?php echo base_url('asset-admin'); ?>/image/batam.jpg" alt="" width="315" height="452">
              <h4>Batam</h4>
            </div>
            </a>
            <a href="<?= base_url(relativePath: 'admin/Location2Controller/locat4') ?>">
            <div class="photocard">
              <img src="<?php echo base_url('asset-admin'); ?>/image/karimun.jpg" alt="" width="315" height="452">
              <h4>Karimun</h4>
            </div>
            </a>
            
          </div>
        </div>
      </section>

      <div class="offer">
        <h1 class="off">Spesial Discount For You</h1>
      </div>


      <div class="flip-card1">
  <div class="flip-card-inner1">
    <div class="flip-card-front1">
      <img src="<?php echo base_url('asset-admin'); ?>/image/15.png" alt="" width="388" height="185">
    </div>
    <div class="flip-card-back1">
      <img src="<?php echo base_url('asset-admin'); ?>/image/2.png" alt="" width="388" height="185">
    </div>
  </div>
</div>
        <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="<?php echo base_url('asset-admin'); ?>/image/3.png" alt="" width="388" height="185">
    </div>
    <div class="flip-card-back">
      <img src="<?php echo base_url('asset-admin'); ?>/image/88.png" alt="" width="388" height="185">
    </div>
  </div>
</div>

<section class="experience" id="experience">

<div class="quote">
    <span>Why VELDAYS</span>
</div>

<div class="timeline">

    <div class="container left">
        <div class="content1">
            <div class="tag">
                <h2>Your Trusted Travel Partner</h2>
            </div>
            <div class="desc">
                <h3>We are committed to making every trip you take full of unforgettable memories. With careful attention to detail and a passion for creating meaningful experiences, we ensure that every step of your journey is smooth, fulfilling,and
                    filled with joy.</h3>
            </div>
        </div>
    </div>

    <div class="container right">
        <div class="content1">
            <div class="tag">
                <h2>Experienced Travel Experts</h2>
            </div>
            <div class="desc">
                <h3>With years of expertise, our team is dedicated to providing the best solutions for all your travel needs. Your satisfaction is our top priority, proven by the many travelers who return to us for their next adventure. Each challenge
                    we encounter strengthens our commitment to offering outstanding service.</h3>
            </div>
        </div>
    </div>

    <div class="container left">
        <div class="content1">
            <div class="tag">
                <h2>Personalized Premium Service</h2>
            </div>
            <div class="desc">
                <h3>Experience the difference with our premium, personalized service! We prioritize the unique needs of each traveler, ensuring that every moment of your trip feels special and tailored just for you.</h3>
            </div>
        </div>
    </div>

    <div class="container right">
        <div class="content1">
            <div class="tag">
                <h2>Enjoy a Worry-Free Vacation</h2>
            </div>
            <div class="desc">
                <h3>Embrace true freedom on your travels! With our comprehensive service taking care of every detail, you can relax and focus on enjoying every precious moment without the stress of planning. Let us handle everything while you
                    immerse yourself in the journey.</h3>
            </div>
        </div>
    </div>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/scrollreveal"></script>
<script>const srtop = ScrollReveal({
                origin: 'top',
                distance: '80px',
                duration: 800,
                reset: true
            });

            srtop.reveal('.experience .timeline', {
                delay: 300
            });
            srtop.reveal('.experience .timeline .container', {
                interval: 400
            });</script>
</body>
</html>

