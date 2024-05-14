<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title tab -->
  <title>Evenyze</title>

  <!-- Icon tab -->
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/icon.png">

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.min.css">

  <!-- Bootstrap font icons css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/bootstrap/bootstrap-icons.css">

  <!-- Style css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/my_style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top border-bottom bg-white py-2">
      <div class="container-fluid px-3 px-lg-5">
        <a class="navbar-brand me-auto text-black" href="#">
          <img src="<?= base_url(); ?>/assets/images/logo/icon.png" alt="logo evenyze" style="height: 30px;">
          evenyze
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <div class="d-flex align-items-center">
              <img src="<?= base_url(); ?>/assets/images/logo/icon.png" alt="logo evenyze" style="height: 30px;">
              <h4 class="offcanvas-title ms-2 fw-medium" id="offcanvasNavbarLabel">evenyze</h4>
            </div>
            <button type="button" class="btn-close pe-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#articles">Articles</a>
              </li>
            </ul>
          </div>
        </div>
        <a href="login" class="btn btn-primary">Login</a>
        <button class="navbar-toggler p-0 ps-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>

  <section id="home">
    <div class="container-fluid bg-white">
      <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-sm-10 col-lg-7 d-flex flex-column gap-2 justify-content-center align-items-center text-center">
          <h4 class="text-primary fw-medium fs-4">Seamless Event Solutions</h4>
          <h1 class="fw-semibold fs-1">Elevate Your Occasions with Our Event Management Platform!</h1>
          <p class="col-sm-8 mb-3 fs-6">Organizing events just got easier with our comprehensive suite of tools designed to streamline every aspect of event planning.</p>
          <div class="d-flex gap-3">
            <a href="register" class="btn btn-primary">Register</a>
            <a href="https://www.youtube.com/@rizanurmaulana" class="btn btn-light"><i class="bi bi-play-circle-fill"></i> Watch Demo</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section Start -->
  <section id="about">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      <h1>About</h1>
    </div>
  </section>

  <section id="services">
    <div class="container-fluid px-3 px-lg-5 row justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center row justify-content-center align-items-center">
          <h6 class="text-primary">Services</h6>
          <h2 class="fw-bold fs-1">What Our Customer Say</h2>
          <p class="mb-4 pb-2 mb-md-5 pb-md-0 col col-md-6 fs-6">
            Discover the Stories and Experiences of Our Delighted Customers
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials">
    <div class="container-fluid px-3 px-lg-5 row justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center row justify-content-center align-items-center">
          <h6 class="text-primary">Testimonials</h6>
          <h2 class="fw-bold fs-1">What Our Customer Say</h2>
          <p class="mb-4 pb-2 mb-md-5 pb-md-0 col col-md-6 fs-6">
            Discover the Stories and Experiences of Our Delighted Customers
          </p>
        </div>

        <div class="row text-center gap-3 justify-content-center">
          <div class="col-sm-8 col-lg-3 mb-md-0">
            <div class="card">
              <div class="card-body py-4 mt-2">
                <div class="d-flex justify-content-center mb-4">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" class="rounded-circle shadow-1-strong" width="100" height="100" />
                </div>
                <h5 class="fw-bold text-primary fs-4">Teresa May</h5>
                <h6 class="fw-bold my-3">Founder at ET Company</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-half text-warning"></i>
                  </li>
                </ul>
                <p class="mb-2">
                  <i class="bi bi-quote pe-2"></i>Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                  ad velit ab hic tenetur.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-lg-3 mb-md-0">
            <div class="card">
              <div class="card-body py-4 mt-2">
                <div class="d-flex justify-content-center mb-4">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp" class="rounded-circle shadow-1-strong" width="100" height="100" />
                </div>
                <h5 class="fw-bold text-primary fs-4">Maggie McLoan</h5>
                <h6 class="fw-bold my-3">Photographer at Studio LA</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                </ul>
                <p class="mb-2">
                  <i class="bi bi-quote pe-2"></i>Autem, totam debitis suscipit saepe
                  sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                  labore laboriosam.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-lg-3 mb-0">
            <div class="card">
              <div class="card-body py-4 mt-2">
                <div class="d-flex justify-content-center mb-4">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp" class="rounded-circle shadow-1-strong" width="100" height="100" />
                </div>
                <h5 class="fw-bold text-primary fs-4">Alexa Horwitz</h5>
                <h6 class="fw-bold my-3">Front-end Developer in NY</h6>
                <ul class="list-unstyled d-flex justify-content-center">
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-fill text-warning"></i>
                  </li>
                  <li>
                    <i class="bi bi-star-half text-warning"></i>
                  </li>
                </ul>
                <p class="mb-2">
                  <i class="bi bi-quote pe-2"></i>Cras sit amet nibh libero, in gravida
                  nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                  vestibulum in tempus viverra turpis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section id="articles">
    <div class="container-fluid px-3 px-lg-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center row justify-content-center align-items-center">
          <h6 class="text-primary">Articles</h6>
          <h2 class="fw-bold fs-1">What Our News Today</h2>
          <p class="mb-4 pb-2 mb-md-5 pb-md-0 col col-md-6 fs-6">
            Discover the Stories and Experiences of Our Delighted Customers
          </p>
        </div>

        <div class="col-lg-6">
          <div class="card mb-3 p-0">
            <div class="row g-0">
              <div class="col-md-4 p-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="img-fluid rounded-start" alt="..." style="height: 100%;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                  <h4 class="card-title mb-3">Card title</h4>
                  <p class="card-text text-muted mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                    eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                    sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                  </p>
                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Read more</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3 p-0">
            <div class="row g-0">
              <div class="col-md-4 p-3">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="img-fluid rounded-start" alt="..." style="height: 100%;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                  <h4 class="card-title mb-3">Card title</h4>
                  <p class="card-text text-muted mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                    eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                    sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                  </p>
                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Read more</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container-fluid bg-dark py-5 px-3 px-lg-5">
      <div class="row gap-3 justify-content-between">
        <div class="col-sm-8 col-lg-7 row gap-3">
          <a class="navbar-brand me-auto text-light" href="#">
            <img src="<?= base_url(); ?>/assets/images/logo/icon.png" alt="logo evenyze" style="height: 30px;">
            evenyze
          </a>
          <p class="text-light col-lg-8">Organizing events just got easier with our comprehensive suite of tools designed to streamline every aspect of event planning.</p>
          <div class="d-flex gap-2 text-center">
            <a class="btn btn-primary p-2 d-inline-flex rounded-circle" href="#"><i class="bi bi-facebook"></i></a>
            <a class="btn btn-primary p-2 d-inline-flex rounded-circle" href="#"><i class="bi bi-instagram"></i></a>
            <a class="btn btn-primary p-2 d-inline-flex rounded-circle" href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-2">
          <h5 class="text-uppercase text-light">Menu</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#home" class="text-light text-decoration-none">Home</a>
            </li>
            <li>
              <a href="#about" class="text-light text-decoration-none">About</a>
            </li>
            <li>
              <a href="#services" class="text-light text-decoration-none">Services</a>
            </li>
            <li>
              <a href="#testimonials" class="text-light text-decoration-none">Testimonials</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4 col-lg-2">
          <h5 class="text-uppercase text-light">About Us</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-light text-decoration-none">Contact Us</a>
            </li>
            <li>
              <a href="#!" class="text-light text-decoration-none">FAQ</a>
            </li>
            <li>
              <a href="#!" class="text-light text-decoration-none">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- *************
			************ Required JavaScript Files *************
		************* -->
  <!-- Required jQuery first, then Bootstrap Bundle JS -->
  <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/modernizr.js"></script>
  <script src="<?= base_url(); ?>/assets/js/moment.js"></script>

  <!-- Main Js Required -->
  <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>