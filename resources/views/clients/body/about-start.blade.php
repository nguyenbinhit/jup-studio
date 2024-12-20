<!--About start-->
@php
    $pageImageAbout = App\Models\Page::where('slug', 'gioi-thieu')->first();
@endphp
<section class="about pb-0 overflow-visible" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 pr-5 mb-5 mb-lg-0 wow fadeInLeft">
                <div class="rare-box"></div>
                <img src="{{ asset('../..' . Storage::url($pageImageAbout->image->url)) }}" class="about-img-small position-relative w-100"
                    alt>
            </div>
            <div class="col-lg-6 pl-6">
                <div class="main-title text-lg-left offset-md-1 mb-0 wow fadeInUp" data-wow-delay="300ms">
                    <h2 class="wow fadeInUp font-weight-light" data-wow-delay="400ms"> {{ $pageImageAbout->title }}</h2>

                    @php
                        echo $pageImageAbout->description;
                    @endphp

                    {{-- TODO: disabled Learn More --}}
                    {{-- <a href="javascript:void(0)"
                                class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-pink text-white link wow fadeInUp"
                                data-wow-delay="700ms">learn more</a> --}}
                </div>
            </div>

        </div>
    </div>
</section>
<!--About end-->
