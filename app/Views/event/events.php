<?= $this->extend('layouts/layout'); ?>

<?= $this->section('content-wrapper'); ?>
<div class="content-wrapper-scroll">
  <!-- Content wrapper start -->
  <div class="content-wrapper">
    <!-- Row Start -->
    <div class="row">
      <div class="col-sm-12 col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">All Events</div>
          </div>
          <div class="card-body">
            <!-- Row start -->
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="/details">
                  <div class="card position-relative shadow">
                    <span class="badge rounded shade-primary position-absolute top-0 end-0 px-3 py-2 m-2">Concert</span>
                    <img src="assets/images/arise-cloudy.jpg" class="card-img-top" alt="Image event">
                    <div class="card-body">
                      <h6 class="text-primary">25 September 2024</h6>
                      <h5 class="card-title mb-2">Charlie Puth Live in Concert Indonesia</h5>
                      <p class="text-dark"><i class="bi bi-geo-alt-fill me-2"></i> Jakarta, Indonesia</p>
                    </div>
                    <div class="card-footer">
                      <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="text-start">
                          <small class="text-dark fw-medium">Event Goals</small>
                          <h6>1000</h6>
                        </div>
                        <div class="text-end">
                          <small class="text-dark fw-medium">Ticket Sold</small>
                          <h6>400</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="/dashboard">
                  <div class="card position-relative shadow">
                    <span class="badge rounded shade-primary position-absolute top-0 end-0 px-3 py-2 m-2">Workshop</span>
                    <img src="assets/images/arise-rainy.jpg" class="card-img-top" alt="Image event">
                    <div class="card-body">
                      <h6 class="text-primary">25 September 2024</h6>
                      <h5 class="card-title mb-2">Big Data Executive Training</h5>
                      <p class="text-dark"><i class="bi bi-geo-alt-fill me-2"></i> Jakarta, Indonesia</p>
                    </div>
                    <div class="card-footer">
                      <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="text-start">
                          <small class="text-dark fw-medium">Event Goals</small>
                          <h6>100</h6>
                        </div>
                        <div class="text-end">
                          <small class="text-dark fw-medium">Ticket Sold</small>
                          <h6>100</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="/dashboard">
                  <div class="card position-relative shadow">
                    <span class="badge rounded shade-primary position-absolute top-0 end-0 px-3 py-2 m-2">Seminar</span>
                    <img src="assets/images/arise-sunny.jpg" class="card-img-top" alt="Image event">
                    <div class="card-body">
                      <h6 class="text-primary">25 September 2024</h6>
                      <h5 class="card-title mb-2">The Future of AI in Web Development</h5>
                      <p class="text-dark"><i class="bi bi-geo-alt-fill me-2"></i> Jakarta, Indonesia</p>
                    </div>
                    <div class="card-footer">
                      <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%"></div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="text-start">
                          <small class="text-dark fw-medium">Event Goals</small>
                          <h6>300</h6>
                        </div>
                        <div class="text-end">
                          <small class="text-dark fw-medium">Ticket Sold</small>
                          <h6>200</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- Row end -->
          </div>
        </div>
      </div>
    </div>
    <!-- Row End -->
  </div>
</div>
<?= $this->endSection(); ?>