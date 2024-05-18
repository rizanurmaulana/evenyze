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
            <div class="card-title">Detail Event</div>
            <div class="ml-auto">
              <a href="/events" class="btn"><i class="bi bi-box-arrow-in-left me-2"></i>Back</a>
            </div>
          </div>
          <div class="card-body">
            <!-- Row start -->
            <div class="row">
              <div class="card shadow-none position-relative">
                <span class="badge rounded shade-primary position-absolute top-0 end-0 px-3 py-2 mt-3 me-4">Concert</span>
                <img src="<?= base_url(); ?>/assets/images/arise-cloudy.jpg" alt="">
                <div class="card-body row">
                  <div class="mb-5">
                    <div class="card shadow-none">
                      <div class="card-body p-0">
                        <h5 class="text-primary">25 September 2024</h5>
                        <h2 class="mb-2">Charlie Puth Live in Concert Indonesia</h2>
                        <p class="fw-medium"><i class="bi bi-geo-alt-fill me-2"></i> Jakarta, Indonesia</p>
                      </div>
                      <div class="py-3">
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
                  </div>
                  <div class="col-md-8 col-12">
                    <div class="mb-3 col-10">
                      <h4 class="fw-medium mb-3">About This Event</h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nobis quae totam, quidem incidunt tempora odio dicta doloribus cum autem. Laborum, officiis. Velit tenetur reiciendis quibusdam quas voluptas nemo ratione saepe inventore, est porro numquam, sequi et modi perferendis pariatur iusto expedita? Enim vel nam hic odio a. Officia eius commodi unde molestiae totam doloribus consequatur quod ullam, iusto architecto sit. Ipsum, perferendis. Iure omnis repudiandae rerum eligendi, corrupti esse quidem officiis ut, odit animi voluptates! Labore, iure inventore sed sunt saepe libero possimus quia velit delectus aliquid. Maxime soluta, ipsam officiis blanditiis voluptatum accusantium illum provident nobis id ad?
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolorum ipsum aut eos? Odit neque distinctio enim inventore quos, ab exercitationem molestias ad, similique, quibusdam corporis cumque quasi. Ad labore neque cupiditate rem aperiam a voluptatum, at, ipsum obcaecati perferendis delectus eum odio ducimus debitis, nam amet architecto ipsa accusantium. Voluptatibus tempore, neque accusamus numquam sequi blanditiis, exercitationem dicta maiores dolores inventore itaque at tenetur similique iusto molestias nobis cumque?
                      </p>
                    </div>
                    <div class="mb-3">
                      <h4 class="fw-medium mb-3">Date & Time</h4>
                      <p class="mb-3"><i class="bi bi-calendar-event bg-primary rounded p-2 text-white me-2"></i> 25 September 2024</p>
                      <p class="mb-3"><i class="bi bi-alarm bg-primary rounded p-2 text-white me-2"></i> 8.00 PM - 11.00 PM</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="mb-3">
                      <h4 class="fw-medium mb-3">Event Location</h4>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.282771530078!2d108.47486007483607!3d-6.975926093024809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f16802ef8da05%3A0xd752d8670e780968!2sKampus%202%20UNIKU%20Fakultas%20Ilmu%20Komputer!5e0!3m2!1sid!2sid!4v1715742102368!5m2!1sid!2sid" width="100%" height="200" style="border:0; border-radius: 10px;" class="mb-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <h4 class="mb-2 fw-medium">Dream World Wide in Jakarta</h4>
                      <p>
                        Balai Kartini, Nusa Indah Teather, Jl. Gatot Subroto No. 37, Kuningan, Jakarta Selatam, Jakarta, Indonesia
                      </p>
                    </div>
                    <div class="mb-3">
                      <h4 class="fw-medium mb-3">Tags</h4>
                      <div class="custom-badge-group">
                        <span class="badge shade-light px-3 py-2 text-black">#IndonesiaEvents</span>
                        <span class="badge shade-light px-3 py-2 text-black">#JakartaEvents</span>
                        <span class="badge shade-light px-3 py-2 text-black">#Jakarta</span>
                        <span class="badge shade-light px-3 py-2 text-black">#Music</span>
                      </div>
                    </div>
                  </div>
                  <form action="/beli-tiket" class="my-3">
                    <button type="submit" class="btn btn-primary">Beli Tiket</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- Row End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Content Wrapper End -->
</div>
<?= $this->endSection(); ?>