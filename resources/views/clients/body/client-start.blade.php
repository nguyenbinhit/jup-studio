<!-- Clients start -->
<section id="clients" class="bg-white p-0 cursor-light no-transition">
    <h2 class="d-none"></h2>
    <div class="section-padding parallax-setting parallaxie parallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h2 class="mb-0">Reviews<span class="color-pink"> Khách Hàng</span></h2>
                    </div>
                </div>
            </div>

            <div class="testimonial-images">
                <div class="owl-thumbs owl-dots d-lg-block d-none">
                    @foreach ($reviews as $key => $review)
                        @if ($key === 0)
                            <div class="owl-dot animated-wrap active"><img
                                    src="{{ asset('../..' . Storage::url($review->image->url)) }}" alt
                                    class="animated-element">
                            </div>
                        @else
                            <div class="owl-dot animated-wrap"><img
                                    src="{{ asset('../..' . Storage::url($review->image->url)) }}" alt
                                    class="animated-element"></div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="row align-items-center position-relative">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme testimonial-two hide-cursor mx-auto wow zoomIn"
                        data-wow-delay="400ms">
                        @foreach ($reviews as $key => $review)
                            @if ($key === 1)
                                <div class="testimonial-item hide-cursor">
                                    <p class="color-black testimonial-para mb-15px">
                                        {{ $review->comment }}</p>
                                    <div class="testimonial-post">
                                        <a href="javascript:void(0)" class="post"><img
                                                src="{{ asset('../..' . Storage::url($review->image->url)) }}"
                                                alt="image"></a>
                                        <div class="text-content">
                                            <h5 class="color-black text-capitalize">{{ $review->customer_name }}</h5>
                                            <p class="color-grey"> {{ $review->customer_email }}</p>

                                            <div class="rating">
                                                @switch($review->stars)
                                                    @case(1)
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(2)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(3)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(4)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(5)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @default
                                                        <i class="fa fa-star"></i>
                                                @endswitch
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="testimonial-item">
                                    <p class="color-black testimonial-para mb-15px">
                                        {{ $review->comment }}</p>
                                    <div class="testimonial-post">
                                        <a href="javascript:void(0)" class="post"><img
                                                src="{{ asset('../..' . Storage::url($review->image->url)) }}"
                                                alt="image"></a>
                                        <div class="text-content">
                                            <h5 class="color-black text-capitalize">{{ $review->customer_name }}</h5>
                                            <p class="color-grey"> {{ $review->customer_email }}</p>

                                            <div class="rating">
                                                @switch($review->stars)
                                                    @case(1)
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(2)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(3)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(4)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @case(5)
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    @break

                                                    @default
                                                        <i class="fa fa-star"></i>
                                                @endswitch
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients ends -->
