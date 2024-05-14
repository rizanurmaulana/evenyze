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
            <div class="card-title">My Profile</div>
          </div>
          <div class="card-body">
            <!-- Row start -->
            <div class="row">
              <div class="col-12">
                <div class="card-border">
                  <div class="card-border-body d-flex align-items-center gap-3">
                    <img src="<?= base_url(); ?>/assets/images/user-default.jpg" class="rounded-circle" alt="Image profile" height="100">
                    <div class="row">
                      <h4 class="fw-medium text-primary">Riza Nur Maulana</h4>
                      <h6 class="fw-medium text-dark">Organizer</h6>
                      <p class="text-dark"><i class="bi bi-geo-alt-fill me-2"></i> Jakarta Selatan, DKI Jakarta, Indonesia</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="card-border">
                  <div class="card-header p-0 mb-3">
                    <div class="card-title">Personal Informasi</div>
                    <div class="ml-auto">
                      <a href="/edit" class="btn btn-outline-primary rounded-pill"><i class="bi bi-pencil me-2"></i>Edit</a>
                    </div>
                  </div>
                  <div class="card-border-body">
                    <div class="row">
                      <div class="col-sm-6 col-12">
                        <div class="mb-3">
                          <small class="text-dark">Nama Lengkap</small>
                          <h5 class="fw-medium">Riza Nur Maulana</h5>
                        </div>
                        <div class="mb-3">
                          <small class="text-dark">Role</small>
                          <h5 class="fw-medium">Organizer</h5>
                        </div>
                      </div>
                      <div class="col-sm-6 col-12">
                        <div class="mb-3">
                          <small class="text-dark">Alamat Email</small>
                          <h5 class="fw-medium">riza@gmail.com</h5>
                        </div>
                        <div class="mb-3">
                          <small class="text-dark">No. Handphone</small>
                          <h5 class="fw-medium">089123456789</h5>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="card-border">
                  <div class="card-header p-0 mb-3">
                    <div class="card-title">Alamat</div>
                    <div class="ml-auto">
                      <a href="/edit" class="btn btn-outline-primary rounded-pill"><i class="bi bi-pencil me-2"></i>Edit</a>
                    </div>
                  </div>
                  <div class="card-border-body">
                    <div class="row">
                      <div class="col-sm-6 col-12">
                        <div class="mb-3">
                          <small class="text-dark">Kota</small>
                          <h5 class="fw-medium">Jakarta Selatan</h5>
                        </div>
                        <div class="mb-3">
                          <small class="text-dark">Provinsi</small>
                          <h5 class="fw-medium">DKI Jakarta</h5>
                        </div>
                      </div>
                      <div class="col-sm-6 col-12">
                        <div class="mb-3">
                          <small class="text-dark">Negara</small>
                          <h5 class="fw-medium">Indonesia</h5>
                        </div>
                        <div class="mb-3">
                          <small class="text-dark">Kode Pos</small>
                          <h5 class="fw-medium">12345</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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