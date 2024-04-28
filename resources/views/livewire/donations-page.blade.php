<main>
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">Donation</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">case studies</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Donation Payment S t a r t -->
    <div class="donation-payment section-padding">
        <div class="container">
            <div class="row g-24 justify-content-between">
                <div class="col-lg-7">
                    <!-- Payment -->
                    <div class="card-style box-shadow border-0">
                        <div class="small-tittle mb-50">
                            <h2 class="title text-capitalize font-600 position-relative">Select your donation</h2>
                        </div>
                        <ul class="selectPricing mb-20">
                            <li class="listItem" data-amount="2000">₦ 2,000</li>
                            <li class="listItem " data-amount="5000">₦ 5,000</li>
                            <li class="listItem" data-amount="10000">₦ 10,000</li>
                            <li class="listItem" data-amount="20000">₦ 20,000</li>
                            <li class="listItem" data-amount="50000">₦ 50,000</li>
                            <li class="listItem" data-amount="100000">₦ 100,000</li>
                        </ul>
                        <form method="post" wire:submit="donate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label required">Amount</label>
                                        <input class="form-control contact-input left_default_amount" wire:model.blur="amount" type="number" min="100" value="2000" placeholder="₦ 2,000">
                                        @error('amount')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @if(!$anonymous)
                                <div class="col-lg-4">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Name</label>
                                        <input class="form-control contact-input" wire:model.blur="name" type="text" placeholder="e.g Alex">
                                        @error('name')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Email</label>
                                        <input class="form-control contact-input" type="email" wire:model.blur="email" placeholder="e.g example@gmail.com">
                                        @error('email')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Phone Number</label>
                                        <input class="form-control contact-input" type="email" wire:model.blur="phone_number" placeholder="e.g +2347********">
                                        @error('phone_number')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Message</label>
                                        <textarea class="form-control custom-textarea" wire:model.blur="notes" rows="10" placeholder="Say something to us"></textarea>
                                        @error('notes')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Select category</label>
                                        <select class="select2">
                                            <option value="0">Select category</option>
                                            <option value="1">Charity for Election Campaign</option>
                                            <option value="2">Charity for Education</option>
                                            <option value="3">Charity for Medical</option>
                                            <option value="4">Charity for Water</option>
                                            <option value="4">Charity for Natural Disaster</option>
                                            <option value="4">others</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>

                            <div class="form-group col-12 payment-gateway-wrapper mt-10">
                                <ul class="payment-gateway-list mb-10">
                                    <li class="single-gateway-item selected"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flutterwave_Logo.png/1200px-Flutterwave_Logo.png" alt="img"></li>
                                </ul>
                                <div class="remember-me terms-condition">
                                    <label>
                                        <input class="checkbox-style" wire:model.live="anonymous" type="checkbox" checked="{{$anonymous}}" name="anonymous">
                                        <small>Stay Anonymous</small>
                                        <span class="checkmark-style"></span>
                                    </label>
                                    @error('anonymous')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="remember-me terms-condition">
                                    <label>
                                        <input class="checkbox-style" wire:model.blur="terms" type="checkbox" value="remember" name="remember">
                                        <small>I agree to all the
                                            <a href="#">
                                                <span>Terms</span></a> and <a href="#"><span>Privacy policy</span>
                                            </a>
                                        </small>
                                        <span class="checkmark-style"></span>
                                    </label>
                                    @error('terms')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn-primary-submit">
                                    Donate
                                    <div wire:loading>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                            <circle fill="#0e5b3c" stroke="#0e5b3c" stroke-width="2" r="15" cx="40" cy="100">
                                                <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
                                            </circle>
                                            <circle fill="#0e5b3c" stroke="#0e5b3c" stroke-width="2" r="15" cx="100" cy="100">
                                                <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
                                            </circle>
                                            <circle fill="#0e5b3c" stroke="#0e5b3c" stroke-width="2" r="15" cx="160" cy="100">
                                                <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
                                            </circle>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="blog-section-two">
                        <div class="single-blog h-calc">
                            <div class="blog-img position-relative">
                                <a href="blog-details.html"> <img src="https://images.unsplash.com/photo-1630510590435-8c0dc8d7c7ee?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100" alt="img"> </a>
                                <div class="blog-img-overlay-text"></div>
                            </div>
                            <!-- Payment Details -->
                            <div class="paymentDetails card-style box-shadow border-0 mb-24">
                                <div class="blog-info">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="blog-info-title">
                                            <h4 class="title text-capitalize">Thank You</h4>
                                            <p class="subtitle">We understand that there are many individuals and organizations seeking support. Your generous donation means the world to us and enables our continued efforts to make a meaningful difference. Thank you for your kindness and support in helping us achieve our mission. Together, we can create positive change and impact lives for the better.</p>
                                            <div class="priceListing">
                                                <ul class="listing">
                                                    <li class="listItem">
                                                        <p class="leftCap font-600">Your Donation</p>
                                                        <p class="rightCap total_donation_amount font-600">₦ 2,000</p>
                                                    </li>
                                                    <li class="listItem">
                                                        <p class="leftCap rightCap font-600">Total</p>
                                                        <p class="rightCap total_donation_amount font-600">₦ 2,000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-of Donation Payment -->
</main>