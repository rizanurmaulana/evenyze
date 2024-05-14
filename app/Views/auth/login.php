<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Best Bootstrap Admin Dashboards">
  <meta name="author" content="Bootstrap Gallery" />
  <link rel="canonical" href="https://www.bootstrap.gallery/">
  <meta property="og:url" content="https://www.bootstrap.gallery">
  <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
  <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
  <meta property="og:type" content="Website">
  <meta property="og:site_name" content="Bootstrap Gallery">
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/icon.png">

  <!-- Title -->
  <title>Login</title>


  <!-- *************
			************ Common Css Files *************
		************ -->

  <!-- Animated css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css">

  <!-- Bootstrap font icons css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/bootstrap/bootstrap-icons.css">

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">


</head>

<body class="login-container">

  <!-- Loading wrapper start -->
  <!-- <div id="loading-wrapper">
    <div class="spinner">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
      <div class="line4"></div>
      <div class="line5"></div>
      <div class="line6"></div>
    </div>
  </div> -->
  <!-- Loading wrapper end -->

  <!-- CTA Back -->
  <!-- <div class="position-absolute top-0 start-0 p-5 ps-3">
    <a href="/" class="btn btn-outline-light"><i class="bi bi-arrow-left"></i> Back</a>
  </div> -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top border-bottom bg-white py-2">
      <div class="container-fluid px-3 px-lg-5">
        <a class="navbar-brand me-auto text-black" href="#">
          <img src="<?= base_url(); ?>/assets/images/logo/icon.png" alt="logo evenyze" style="height: 30px;">
          evenyze
        </a>
        <a href="/" class="btn"><i class="bi bi-box-arrow-in-left"></i> Back</a>
      </div>
    </nav>
  </header>

  <!-- Login box start -->
  <form action="login/auth" method="post">
    <!----------------------- Main Container -------------------------->
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
      <!----------------------- Login Container -------------------------->
      <div class="d-flex gap-1 border rounded p-3 bg-white col-12 col-sm-8 col-lg-7">
        <!--------------------------- Left Box ----------------------------->
        <div class="col-lg-6 rounded d-lg-flex justify-content-center align-items-center flex-column p-3 bg-primary d-none">
          <div class="featured-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/login-page.svg" class="img-fluid" style="min-width: 300px;">
          </div>
          <h5 class="text-white fs-2 text-center">Welcome Back!</h5>
          <small class="text-white text-wrap text-center mb-3">Log in to your account to access your event dashboard, manage your upcoming occasions, and streamline your event planning process.</small>
        </div>
        <!-------------------- ------ Right Box ---------------------------->
        <div class="col-lg-6 p-3">
          <div class="row align-items-center">
            <div class="header-text mb-4 login-welcome">
              <h2>Login Account</h2>
              <p>Please login to your <span class="text-primary fw-bold">Evenyze</span> account.
              </p>
            </div>
            <?php if (session()->getFlashdata('msg')) : ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <div class="mb-3">
              <label for="inputEmail" class="form-label text-black">Email</label>
              <input type="text" name="email" class="form-control" id="inputEmail">
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label text-black">Password</label>
              <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
            <!-- <div class="input-group mb-5 d-flex justify-content-between">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck">
                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
              </div>
              <div class="forgot">
                <small><a href="#">Forgot Password?</a></small>
              </div>
            </div> -->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 fw-medium">Login</button>
            </div>
            <!-- <div class="input-group mb-3">
              <button class="btn btn-lg btn-light w-100 fs-6"><i class="bi bi-google me-2"></i><small>Sign In with Google</small></button>
            </div> -->
            <div class="row">
              <small>Don't have account? <a href="/register" class="text-primary fw-bold">Register</a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- Login box end -->

  <!-- *************
			************ Required JavaScript Files *************
		************* -->
  <!-- Required jQuery first, then Bootstrap Bundle JS -->
  <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/modernizr.js"></script>
  <script src="<?= base_url(); ?>/assets/js/moment.js"></script>

  <!-- *************
			************ Vendor Js Files *************
		************* -->

  <!-- Main Js Required -->
  <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>