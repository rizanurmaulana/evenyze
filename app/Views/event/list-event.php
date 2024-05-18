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
            <div class="card-title">List Event</div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php if (empty($events)) : ?>
                <p>Tidak ada data event yang tersedia.</p>
              <?php else : ?>
                <table class="table v-middle m-0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Event</th>
                      <th>Kategori</th>
                      <th>Tanggal</th>
                      <th>Tempat</th>
                      <th>Harga</th>
                      <th>Kuota</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($events as $index => $event) : ?>
                      <tr>
                        <td><?= $index + 1 ?>.</td>
                        <td>
                          <div class="text-truncate"><?= $event['nama_event'] ?></div>
                        </td>
                        <td><?= $event['kategori'] ?></td>
                        <td><?= date('d F Y', strtotime($event['tanggal'])) ?></td>
                        <td><?= $event['location_id'] ?></td>
                        <td>
                          <?php if ($event['harga_tiket'] == 0) : ?>
                            Gratis
                          <?php else : ?>
                            Rp. <?= number_format($event['harga_tiket'], 0, ',', '.') ?>
                          <?php endif; ?>
                        </td>
                        <td><?= $event['kuota'] ?></td>
                        <td>
                          <div class="actions">
                            <a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
                              <i class="bi bi-pencil text-green"></i>
                            </a>
                            <a href="<?= 'event/delete/' . $event['id'] ?>" class="deleteRow">
                              <i class="bi bi-trash text-red"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->
  </div>
</div>
<?= $this->endSection(); ?>