<!-- About Boxes start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h2>Dựng Lên <span class="color-pink">Dịch Vụ</span>
                        <br>Bạn Yêu Thích Và <span class="color-blue">Độc Nhất </span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $key => $value)
                @if ($key === 'design')
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="about-box mb-5 mb-lg-0 mx-auto bg-blue">
                            <span class="pro-step d-inline-block color-white"><i class="fa fa-pencil-alt"></i></span>
                            <h5 class="font-weight-500 color-white mt-25px mb-15px text-capitalize">
                                {{ $value['title'] }}
                            </h5>
                            <p class="font-weight-light color-white">{{ $value['content'] }} </p>
                        </div>
                    </div>
                @endif
                @if ($key === 'facebook')
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="about-box mb-5 mb-lg-0 mx-auto bg-yellow">
                            <span class="pro-step d-inline-block color-white"><i class="fa fa-cog"></i></span>
                            <h5 class="font-weight-500 color-white mt-25px mb-15px">{{ $value['title'] }}</h5>
                            <p class="font-weight-light color-white">{{ $value['content'] }}</p>
                        </div>
                    </div>
                @endif
                @if ($key === 'coder')
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-box mb-0 mx-auto bg-pink">
                            <span class="pro-step d-inline-block color-white"><i class="fa fa-code"></i></span>
                            <h5 class="font-weight-500 color-white mt-25px mb-15px text-capitalize">
                                {{ $value['title'] }}
                            </h5>
                            <p class="font-weight-light color-white">{{ $value['content'] }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<!-- About Boxes ends -->
