<main>
  <!-- Breadcrumb Area S t a r t -->
  <section class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="breadcrumb-text">
        <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
          <ul class="breadcrumb listing">
            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a></li>
            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">volunteer</a></li>
          </ul>
        </nav>
        <h1 class="title wow fadeInUp" data-wow-delay="0.1s">volunteer</h1>
        <h6 class="para text-white mt-1 wow fadeInUp" data-wow-delay="0.3s">Become a volunteer by filling the form below</h6>
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
              <form wire:submit="createVolunteer" class="custom-form">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="form-group">
                      <label class="custom-label required" for="fullName">Full Name</label>
                      <input type="text" class="form-control custom-input" wire:model.blur="fullName" id="fullName" placeholder="Alex Jordan">
                      @error('fullName')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-group">
                      <label class="custom-label required" for="phoneNumber">Phone Number</label>
                      <input type="tel" class="form-control custom-input" wire:model.blur="phoneNumber" id="phoneNumber" placeholder="070********">
                      @error('phoneNumber')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label class="custom-label required" for="age">Age</label>
                      <input type="number" min="16" max="75" class="form-control custom-input" wire:model.blur="age" id="age" placeholder="21">
                      @error('age')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="form-group">
                      <label class="custom-label required" for="emailAddress">Email address</label>
                      <input type="email" class="form-control custom-input" wire:model.blur="emailAddress" id="emailAddress" placeholder="name@example.com">
                      @error('emailAddress')
                      <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="form-group">
                      <label class="custom-label required" for="reason">Reason for volunteering?</label>
                      <textarea class="form-control custom-textarea" wire:model.blur="reason" id="reason"></textarea>
                      @error('reason')
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
            <img class="map-frame" src="https://images.pexels.com/photos/6646918/pexels-photo-6646918.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="600" height="450" style="border: 15px;object-fit:cover;" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End-of contact-->
</main>