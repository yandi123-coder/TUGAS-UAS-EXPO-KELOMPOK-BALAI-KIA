
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="<?php echo base_url('asset-admin'); ?>/css/register.css">
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

        <?php $errors=session()->getFlashdata('erros') ?>
        <?php if (! empty($errors)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php 
if (session()->getFlashdata('pesan')) {
  echo '<div class="alert alert-success" role="alert">';
  echo session()->getFlashdata('pesan');
  echo '</div>';
}
?>


          <div class="title">Register</div>
 
          <?php  
          echo form_open('Admin/RegisterController/save_register')
          ?>
          <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input name="nama_user" placeholder="Nama User" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="no_hp" placeholder="No Handphone" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="repassword" placeholder="Retype password" required>
              </div>

              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account?
                <a href="<?= base_url('Admin/RegisterController/login') ?>" for="flip">Login now</a>
              </div>
            </div>
            <?php echo form_close() ?>


    </div>
    </div>
    </div>
  </div>
</body>
</html>
