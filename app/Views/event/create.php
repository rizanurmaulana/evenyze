<?= $this->extend('layouts/layout'); ?>

<?= $this->section('content-wrapper'); ?>
<div class="content-wrapper-scroll">
  <!-- Content wrapper start -->
  <div class="content-wrapper">
    <!-- Row start -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Buat Event</div>
          </div>
          <div class="card-body">
            <form action="/event/create" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-12 col-12">
                  <div class="card-border">
                    <div class="card-border-title">Gambar Event</div>
                    <div class="card-border-body">
                      <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-12">
                  <div class="card-border">
                    <div class="card-border-title">Informasi Acara</div>
                    <div class="card-border-body">

                      <div class="row">
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="nama_event">Nama Acara <span class="text-red">*</span></label>
                            <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="kategori">Kategori <span class="text-red">*</span></label>
                            <select class="form-control" name="kategori" required>
                              <option value="Select Product Category">Pilih Kategori</option>
                              <option value="workshop">Workshop</option>
                              <option value="seminar">Seminar</option>
                              <option value="konferensi">Konferensi</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="tanggal">Tanggal <span class="text-red">*</span></label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class=" mb-3">
                            <label class="form-label" for="waktu">Waktu <span class="text-red">*</span></label>
                            <input type="time" class="form-control" id="waktu" name="waktu" required>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="nama_event">Harga Tiket <span class="text-red">*</span></label>
                            <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="nama_event">Kuota <span class="text-red">*</span></label>
                            <input type="number" class="form-control" id="nama_event" name="nama_event" required>
                          </div>
                        </div>
                        <div class="col-sm-12 col-12">
                          <div class="mb-0">
                            <label class="form-label">Deskripsi Event <span class="text-red">*</span></label>
                            <textarea rows="4" class="form-control" placeholder="Masukkan deskripsi event"></textarea>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-12">
                  <div class="card-border">
                    <div class="card-border-title">Detail Lokasi</div>
                    <div class="card-border-body">

                      <div class="row">
                        <div class="col-sm-12 col-12">
                          <div class="mb-3">
                            <label class="form-label">Nama Tempat <span class="text-red">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-12 col-12">
                          <div class="mb-3">
                            <label class="form-label">Alamat Lengkap <span class="text-red">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label">Kota <span class="text-red">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="mb-3">
                            <label class="form-label">Provinsi <span class="text-red">*</span></label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-12">
                  <div class="custom-btn-group">
                    <button type="submit" class="btn btn-primary">Buat Event</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->
  </div>
</div>
<?= $this->endSection(); ?>