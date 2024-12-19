
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="<?php echo base_url('asset-admin'); ?>/css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="<?= base_url('asset-admin') ?>/image/bg.jpg" alt="">
        <div class="text">
          <span class="text-1">Welcome back </span>
        </div>
      </div>

    </div>
    <div class="forms">
        <div class="form-content login-form">
          <div class="login-form">
      </div>
        <div class="signup-form">
          <div class="title">Login</div>
          <?php  
          echo form_open('Admin/RegisterController/cek_login')
          ?>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Belum Punya akun?
                <a href="<?= base_url('Admin/RegisterController/register') ?>" for="flip">Register</a>
              </div>
            </div>
            <?php echo form_close() ?>

      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>