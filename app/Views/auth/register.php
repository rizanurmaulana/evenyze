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
  <link rel="shortcut icon" href="./assets/images/logo/icon.png">

  <!-- Title -->
  <title>Register</title>


  <!-- *************
			************ Common Css Files *************
		************ -->

  <!-- Animated css -->
  <link rel="stylesheet" href="./assets/css/animate.css">

  <!-- Bootstrap font icons css -->
  <link rel="stylesheet" href="./assets/fonts/bootstrap/bootstrap-icons.css">

  <!-- Main css -->
  <link rel="stylesheet" href="./assets/css/main.min.css">


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

  <!-- Header Section -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top border-bottom bg-white py-2">
      <div class="container-fluid px-3 px-lg-5">
        <a class="navbar-brand me-auto text-black" href="#">
          <img src="./assets/images/logo/icon.png" alt="logo evenyze" style="height: 30px;">
          evenyze
        </a>
        <a href="/" class="btn btn-outline-light"><i class="bi bi-arrow-left"></i> Back</a>
      </div>
    </nav>
  </header>

  <!-- Login box start -->
  <form action="/register/save" method="post">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
      <!----------------------- Login Container -------------------------->
      <div class="d-flex gap-1 border rounded p-3 bg-white col-12 col-sm-9 col-lg-9">
        <!--------------------------- Left Box ----------------------------->
        <div class="col-lg-6 rounded d-lg-flex justify-content-center align-items-center flex-column p-3 bg-primary d-none">
          <div class="featured-image mb-3">
            <img src="./assets/images/register-page.svg" class="img-fluid" style="min-width: 300px;">
          </div>
          <h5 class="text-white fs-2 text-center">Join our vibrant event community!</h5>
          <small class="text-white text-wrap text-center mb-3">Sign up now to unlock a world of possibilities in event planning. Create stunning occasions, connect with top vendors, and access exclusive features to elevate your events to the next level.</small>
        </div>
        <!-------------------- ------ Right Box ---------------------------->
        <div class="col-lg-6 p-3">
          <div class="row align-items-center">
            <div class="header-text mb-4 login-welcome">
              <h2>Register Account</h2>
              <p>Please Register your <span class="text-primary fw-bold">Evenyze</span> account.
              </p>
            </div>
            <?php if (session()->getFlashdata('msg')) : ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <div class="d-flex gap-3">
              <div class="col-6">
                <div class="mb-3">
                  <label for="inputName" class="form-label text-black">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control" id="inputName">
                </div>
                <div class="mb-3">
                  <label for="inputEmail" class="form-label text-black">Email</label>
                  <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
                <div class="mb-3">
                  <label for="inputPhone" class="form-label text-black">Phone</label>
                  <input type="tel" name="phone" class="form-control" id="inputPhone">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label for="inputRole" class="form-label text-black">What's your role</label>
                  <select class="form-select" name="role" aria-label="selectRole" id="inputRole">
                    <option selected disabled value="">Select type</option>
                    <option value="user">User</option>
                    <option value="organizer">Organizer</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="inputPassword" class="form-label text-black">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-3">
                  <label for="confirmPassword" class="form-label text-black">Confirm Password</label>
                  <input type="password" name="confirmPassword" class="form-control" id="confirmPassword">
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 fw-medium">Register</button>
            </div>
            <div class="row">
              <small>Already have an account? <a href="/login" class="text-primary fw-bold">Login</a></small>
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
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/modernizr.js"></script>
  <script src="./assets/js/moment.js"></script>

  <!-- *************
			************ Vendor Js Files *************
		************* -->

  <!-- Main Js Required -->
  <script src="./assets/js/main.js"></script>

</body>

</html>