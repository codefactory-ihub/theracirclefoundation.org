<main>
  <!-- Breadcrumb Area S t a r t -->
  <section class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="breadcrumb-text">
        <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
          <ul class="breadcrumb listing">
            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a></li>
            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">Request Report</a></li>
          </ul>
        </nav>
      <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Request Report</h1>
        <h6 class="para text-white mt-2 wow fadeInUp" data-wow-delay="0.3s">Get a tailored report by sharing your details and needs. Our team will provide valuable insights to support your goals.</h6>
      </div>
    </div>
  </section>
  <!-- End-of Breadcrumb Area -->

  <!-- Contact area S t a r t-->
  <div class="volunteer-details top-bottom-padding2">
    <div class="container">
      <div class="top-padding4">
        <div class="row gy-24">
          <div class="col-xl-6">
            <div class="send-box">
              <form wire:submit="submit" class="custom-form">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group">
                      <label class="custom-label required" for="full_name">Full Name</label>
                      <input type="text" class="form-control custom-input" wire:model.blur="full_name" id="full_name" placeholder="Alex Jordan">
                      @error('full_name')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-xl-12">
                    <div class="form-group">
                      <label class="custom-label required" for="email">Email address</label>
                      <input type="email" class="form-control custom-input" wire:model.blur="email" id="email" placeholder="name@example.com">
                      @error('email')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="form-group">
                      <label class="custom-label required" for="intention">Intention with report?</label>
                      <textarea class="form-control custom-textarea" wire:model.blur="intention" id="intention"></textarea>
                      @error('intention')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                <button type="submit" class="submit-btn">Volunteer</button>
              </form>
            </div>
          </div>
          <div class="col-xl-6">
            <img class="map-frame" src="https://images.pexels.com/photos/8297031/pexels-photo-8297031.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="600" height="450" style="border: 15px;object-fit:cover;" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End-of contact-->
</main>