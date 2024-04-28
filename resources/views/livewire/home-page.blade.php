<main>
    <!-- Hero area S t a r t-->
    <section class="hero-area-three">
        <div class="single-slider hero-padding-three">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                        <div class="hero-caption mb-20">
                            <p class="key-title font-700 mb-20">TheraCircle Foundation</p>
                            <h1 class="title font-700" data-animation="fadeInUp" data-delay=".0s">Empowering Women, Nurturing Change</h1>
                            <p class="pera mx-width-780" data-animation="fadeInUp" data-delay=".2s">TheraCircle Foundation is a global non-profit organization, led by Black women, dedicated to empowering disadvantaged women and girls while fostering a healthier planet</p>
                            <div class="d-flex gap-20 flex-wrap align-items-center">
                                <a wire:navigate href="{{route("donate")}}" class="btn-primary-fill pill-btn" data-animation="fadeInLeft" data-delay=".4s">Donate Now</a>
                                <!-- <div class="d-flex">
                    <div class="multi-image-one">
                      <img src="/assets/images/gallery/testimonial-4.png" alt="image">
                    </div>
                    <div class="multi-image-two">
                      <img src="/assets/images/gallery/testimonial-5.png" alt="image">
                    </div>
                    <div class="multi-image-three">
                      <img src="/assets/images/gallery/testimonial-6.png" alt="image">
                    </div>
                    <div class="multi-image-four">
                      <div class="rounded-badge">
                        <h4 class="count">1M+</h4>
                      </div>
                    </div>
                  </div> -->
                            </div>
                            <!-- <div class="hero-count-section flex justify-content-between">
                  <div class="hero-count">
                    <h4 class="title">12+</h4>
                    <p class="pera mb-0">
                      Years of <br>
                      Experience
                    </p>

                    <div class="hero-divider"></div>
                  </div>
                  <div class="hero-count">
                    <h4 class="title">140+</h4>
                    <p class="pera mb-0">
                      Thousands <br>
                      volunteers
                    </p>
                  </div>
                  <div class="hero-count">
                    <h4 class="title">500+</h4>
                    <p class="pera mb-0">
                      Worid wide <br>
                      Offices
                    </p>
                  </div>
                </div> -->
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="d-flex gap-44 justify-content-end">
                            <div id="play-video" class="hero-image position-relative d-none d-lg-block">
                                <img src="https://images.unsplash.com/photo-1487546331507-fcf8a5d27ab3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="img" class="w-100 tilt-effect" data-animation="fadeInRight" data-delay="0.2s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Hero-->

    <!-- helpful area S t a r t-->
    <section class="helpful-area-three section-padding">
        <div class="container">
            <p class="key-title font-700 mb-20">OBJECTIVES</p>

            <div class="row g-24">
                @foreach($objectives as $obj)
                <div id="helpful-area-card" class="col-xl-4 col-md-6 col-lg-6">
                    <div class="helpful-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="helpful-card-icon">
                            @if(isset($obj['icon']))
                            <i class="{{$obj['icon']}}"></i>
                            @else
                            <img width="100" height="100" class="rounded-circle" src="https://www.un.org/sustainabledevelopment/wp-content/uploads/2019/08/E-Goal-06-1024x1024.png" />
                            @endif

                        </div>
                        <div class="helpful-card-caption">
                            @if(isset($obj['icon']))
                            <h4 class="caption-title">{{$obj['title']}}</h4>
                            @endif
                            <p class="caption-para">{{$obj['description']}}</p>
                            <!-- <a wire:navigate href="javascript:void(0)" class="btn btn-outline-success">Volunteer Now <i class="ri-arrow-right-up-line"></i></a> -->
                        </div>
                        <div class="number-watermark">
                            <h4 class="number">0{{$loop->index+1}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of helpful-->

    <!-- About us Area S t a r t -->
    <section id="about" class="about-area section-padding2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 my-auto">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <div class="flex">
                            <span role="button" tabindex="0" wire:click="setSection('about')" class="sub-tittle text-capitalize font-600 me-4 {{$section == 'about'? 'active': ''}}">About us</span>
                            <span role="button" tabindex="0" wire:click="setSection('words')" class="sub-tittle text-capitalize font-600 me-4 {{$section != 'about'? 'active': ''}}">Words from our founder</span>
                        </div>
                        @if ($section == "about")
                        <h2 class="title font-700 pb-15">About</h2>
                        <p class="pera-subtitle mb-15">TheraCircle Foundation is a global non-profit organization, led by Black women, dedicated to empowering disadvantaged women and girls while fostering a healthier planet.</p>
                        <p class="pera-subtitle">We understand the unique challenges faced by these communities and strive to create positive change through a holistic approach.</p>
                        @else
                        <h2 class="title font-700 pb-15">Words From The Founder</h2>
                        <figure>
                            <blockquote class="blockquote">
                                <p class="pera-subtitle mb-15">Growing up in a missionary family, the adage "charity begins at home" took on a powerful, global dimension. Surrounded by unwavering faith and a constant awareness of those less fortunate, the seeds of service were sown early in my heart. Witnessing my parents' tireless dedication to forgotten communities instilled in me a profound desire to bridge the gap between privilege and neglect.</p>
                                <p class="pera-subtitle">It wasn't always easy. Sacrifices were made, comforts forsaken, but the unwavering spirit of giving resonated more deeply than any personal loss. My faith fueled my compassion, urging me to see the inherent dignity in every human being, regardless of circumstance. This conviction ignited a passion to not just alleviate suffering, but to empower forgotten communities, to restore their voices and their rightful place in the world.
                                    While empathy is essential, I understood the need for a strategic approach. My background in international law and diplomacy, coupled with my skills in negotiation and market research, provides a vital analytical edge. It's one thing to want to help, but it's crucial to ensure those efforts translate into tangible, sustainable change.
                                    My focus lies on achieving the UN's Sustainable Development Goals (SDGs) and Environmental, Social, and Governance (ESG) principles. These frameworks offer a roadmap to address complex challenges, but real progress hinges on overcoming ingrained behavioral patterns. Engaging these forgotten communities requires a blend of empathy, strategic planning, and a relentless pursuit of solutions. It's a challenge I embrace wholeheartedly, for in the forgotten corners of the world, I see immense potential waiting to be unleashed. </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                <cite title="Tafawa-Balewa Anna">Tafawa-Balewa Anna</cite>
                            </figcaption>
                        </figure>
                        @endif
                    </div>
                    <div class="about-info">
                        <div class="row">
                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-hand-heart-line"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Donation</h4>
                                        <p class="pera">Fund programs that help children escape poverty providing vocational training.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Volunteer</h4>
                                        <p class="pera">Volunteer programs that help children escape poverty providing vocational training.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 mt-10">
                                <a wire:navigate href="{{route("donate")}}" class="btn btn-primary-fill">Donate</a>
                                <a wire:navigate href="{{route("volunteer")}}" class="btn btn-secondary-fill">Volunteer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative h-100">
                        <div class="play-button">
                            <a id="play-video-two" class="video-play-button-two d-none d-lg-block d-none d-lg-block" href="javascript:void(0)">
                                <span></span>
                            </a>

                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">&times;</a>
                            </div>
                        </div>
                        <div>
                            <img class="w-100 d-none d-lg-block" src="https://images.unsplash.com/photo-1594078783905-29239f2b5709?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of About us Area -->

    @if(isset($projects) && count($projects) > 0)
    <!-- Donate S t a r t -->
    <section class="donate-section-two section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">We Love To Help Poor</span>
                        <h2 class="title font-700">PROJECTS</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                    <div class="single-donate h-calc wow fadeInUp" data-wow-delay="0.0s">
                        <div class="donate-img position-relative">
                            <a wire:navigate href="{{route("donate")}}"> <img class="w-100" src="/assets/images/gallery/donate-3.png" alt="img"> </a>
                            <div class="donate-badge">
                                <p class="subtitle">Food</p>
                            </div>
                        </div>
                        <div class="donate-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="donate-info-title">
                                    <h4 class="title text-capitalize"><a wire:navigate href="{{route("donate")}}">To prove kindness of nation charity isthe simple method.</a></h4>
                                    <p class="subtitle">Give back and make a difference in the world Children.</p>
                                    <div class="progress custom-progress-two">
                                        <div class="progress-bar" style="width: 65%">
                                            <div class="percentage">
                                                <h4 class="title">65%</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-content-between mt-14 mb-20">
                                        <div class="flex gap-20">
                                            <div class="charges">
                                                <p class="pera">Goals</p>
                                                <h4 class="title font-500">$15.000</h4>
                                            </div>
                                            <div class="charges">
                                                <p class="pera">Raised</p>
                                                <h4 class="title font-500">$15.000</h4>
                                            </div>
                                        </div>
                                        <div class="forward-btn">
                                            <i class="ri-reply-fill"></i>
                                        </div>
                                    </div>
                                    <a wire:navigate href="{{route("donate")}}" class="btn donate-btn w-100">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                    <div class="single-donate h-calc wow fadeInUp" data-wow-delay="0.1s">
                        <div class="donate-img position-relative">
                            <a wire:navigate href="{{route("donate")}}"> <img class="w-100" src="/assets/images/gallery/donate-4.png" alt="img"> </a>
                            <div class="donate-badge">
                                <p class="subtitle">Education</p>
                            </div>
                        </div>
                        <div class="donate-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="donate-info-title">
                                    <h4 class="title text-capitalize"><a wire:navigate href="{{route("donate")}}">To prove kindness of nation charity isthe simple method.</a></h4>
                                    <p class="subtitle">Give back and make a difference in the world Children.</p>
                                    <div class="progress custom-progress-two">
                                        <div class="progress-bar" style="width: 70%">
                                            <div class="percentage">
                                                <h4 class="title">70%</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-content-between mt-14 mb-20">
                                        <div class="flex gap-20">
                                            <div class="charges">
                                                <p class="pera">Goals</p>
                                                <h4 class="title font-500">$15.000</h4>
                                            </div>
                                            <div class="charges">
                                                <p class="pera">Raised</p>
                                                <h4 class="title font-500">$15.000</h4>
                                            </div>
                                        </div>
                                        <div class="forward-btn">
                                            <i class="ri-reply-fill"></i>
                                        </div>
                                    </div>
                                    <a wire:navigate href="{{route("donate")}}" class="btn donate-btn w-100">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                    <div class="single-donate h-calc wow fadeInUp" data-wow-delay="0.2s">
                        <div class="donate-img position-relative">
                            <a wire:navigate href="{{route("donate")}}"> <img class="w-100" src="/assets/images/gallery/donate-5.png" alt="img"> </a>
                            <div class="donate-badge">
                                <p class="subtitle">medical</p>
                            </div>

                        </div>
                        <div class="donate-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="donate-info-title">
                                    <h4 class="title text-capitalize"><a wire:navigate href="{{route("donate")}}">To prove kindness of nation charity isthe simple method.</a></h4>
                                    <p class="subtitle">Give back and make a difference in the world Children.</p>
                                    <div class="progress custom-progress-two">
                                        <div class="progress-bar" style="width: 90%">
                                            <div class="percentage">
                                                <h4 class="title">90%</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-content-between mt-14 mb-20">
                                        <div class="flex gap-20">
                                            <div class="charges">
                                                <p class="pera">Goals</p>
                                                <h4 class="title font-500">$15.000</h4>
                                            </div>
                                            <div class="charges">
                                                <p class="pera">Raised</p>
                                                <h4 class="title font-500">$15.000</h4>
                                            </div>
                                        </div>
                                        <div class="forward-btn">
                                            <i class="ri-reply-fill"></i>
                                        </div>
                                    </div>
                                    <a wire:navigate href="{{route("donate")}}" class="btn donate-btn w-100">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Donate -->
    @endif
</main>