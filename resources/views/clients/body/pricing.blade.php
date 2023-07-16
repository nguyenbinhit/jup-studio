<!-- Pricing start -->
<section id="pricing" class="bg-light-gray pricing-padding" style="padding: 5.5rem 0 4rem">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms" style="margin-bottom: 2.5rem">
                    <h2 class="mb-0">Linh Hoạt<span class="color-pink">
                            Gói Giá</span> Cho Bạn </h2>
                </div>
            </div>
        </div>
        <div class="row mt-xs-4rem">
            @foreach ($plans as $key => $item)
                <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-xs-5 pb-sm-5 wow fadeInUp">
                    <div class="pricing-item hvr-bg-blue">
                        <div class="price-box clearfix">
                            <div class="price_title">
                                <h4 class="text-capitalize">{{ $item->name }}</h4>
                            </div>
                        </div>
                        <div class="price">
                            <h2 class="position-relative"><span class="dollar">$</span>{{ $item->price }}<span
                                    class="month">/
                                    month</span></h2>
                        </div>
                        <div class="price-description">
                            @foreach ($item-> benefits as $key => $value)
                                <p>{{ $value }}</p>
                            @endforeach

                        </div>
                        <div class="text-center">
                            <a href="javascript:void(0)"
                                class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white">learn
                                more</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-xs-5 pb-sm-5 wow fadeInUp">
                <div class="pricing-item hvr-bg-blue">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">Basic</h4>
                        </div>
                    </div>
                    <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>19<span class="month">/
                                month</span></h2>
                    </div>
                    <div class="price-description">
                        <p>Full Access</p>
                        <p>Unlimited Bandwidth</p>
                        <p>Email Accounts</p>
                        <p>8 Free Forks Every Months</p>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0)"
                            class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-xs-5 pb-sm-5 wow fadeInUp">
                <div class="pricing-item hvr-bg-blue">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">Basic</h4>
                        </div>
                    </div>
                    <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>19<span class="month">/
                                month</span></h2>
                    </div>
                    <div class="price-description">
                        <p>Full Access</p>
                        <p>Unlimited Bandwidth</p>
                        <p>Email Accounts</p>
                        <p>8 Free Forks Every Months</p>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0)"
                            class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-xs-5 wow fadeInUp">
                <div class="pricing-item hvr-bg-blue">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">Basic</h4>
                        </div>
                    </div>
                    <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>19<span class="month">/
                                month</span></h2>
                    </div>
                    <div class="price-description">
                        <p>Full Access</p>
                        <p>Unlimited Bandwidth</p>
                        <p>Email Accounts</p>
                        <p>8 Free Forks Every Months</p>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0)"
                            class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white">learn
                            more</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-xs-5 wow fadeInUp">
                <div class="pricing-item price-transform hvr-bg-yellow">
                    <div class="quarter-triangle"></div>

                    <div class="triangle-inner-content">
                        <i class="fa fa-star"></i>
                        <span> SPECIAL </span>
                    </div>

                    <div class="price-box2 clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize m-0">Standard</h4>
                            <p class="price-sub-heading text-capitalize">the
                                most popular</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>29<span class="month">/
                                month</span></h2>
                    </div>
                    <div class="price-description">
                        <p> Full Access</p>
                        <p>Unlimited Bandwidth</p>
                        <p>Email Accounts</p>
                        <p>8 Free Forks Every Months</p>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0)"
                            class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-white">learn
                            more</a>
                    </div>

                </div>
            </div> --}}

            {{-- <div class="col-lg-3 col-md-6 col-sm-12 text-center wow fadeInUp">
                <div class="pricing-item hvr-bg-pink">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">Advance</h4>
                        </div>
                    </div>
                    <div class="price">
                        <h2 class="position-relative"><span class="dollar">$</span>49<span class="month">/
                                month</span></h2>
                    </div>
                    <div class="price-description">
                        <p> Full Access</p>
                        <p>Unlimited Bandwidth</p>
                        <p>Email Accounts</p>
                        <p>8 Free Forks Every Months</p>
                    </div>
                    <div class="text-center">
                        <a href="javascript:void(0)"
                            class="btn-setting color-black btn-hvr-up btn-pink btn-hvr-white">learn
                            more</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Pricing ends -->
