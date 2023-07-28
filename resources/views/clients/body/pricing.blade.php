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
                            @foreach ($item->benefits as $key => $value)
                                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis">
                                    {{ $value }}</p>
                            @endforeach

                        </div>
                        <div class="text-center">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalScrollable"
                                class="btn-setting color-black btn-hvr-up btn-blue btn-hvr-white"
                                data-name="{{ $item->name }}" data-price="{{ $item->price }}"
                                data-benefits='@json($item->benefits)'
                                data-description="{{ $item->description }}">
                                learn
                                more
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Long Content Scroll Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="color:white;display: unset;background: linear-gradient(to bottom right, #004E9A, #4A707A);">
                    <h4 class="modal-title" id="exampleModalScrollableTitle"></h4>
                    <button type="button" style="position: relative; bottom: 8rem;
                    color: white"
                        class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    
                </div>
                <div class=" modal-body-benefits m-auto pb-4">

                </div>
                <div class=" modal-footer" style="display: unset;">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing ends -->
@push('script')
    <script type="text/javascript">
        $('#exampleModalScrollable').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);

            var name = button.data('name');
            var price = button.data('price');
            $('.modal-title').empty();

            $('.modal-title').append('<h2 style="text-align: center; margin-top: 1rem">' + name + '</h2>');
            $('.modal-title').append('<h2  style="text-align: center; margin-top: 1rem">' + '$' + '<span>' +
                price +
                '</span>' + '/month</h2>');

            var description = button.data('description');

            $('.modal-body').empty();
            $('.modal-body-benefits').empty();

            $('.modal-body').append('<p style="text-decoration:underline;font-size:1rem; font-weight: 600;">Nổi bật:</p>');
            $.each(button.data('benefits'), function(index, value) {
                $('.modal-body-benefits').append(
                    '<li  style="list-style-type: none;margin-top: 1rem; font-size:1.1rem"><span class="mr-2" style="color: rgb(102,255,204)"> <i class="fas fa-check"></i></span>' +
                    value + '</li>');
            });
            $('.modal-footer').empty();

            $('.modal-footer').append('<p class="mb-3" style="text-decoration:underline;font-size:1rem; font-weight: 600;">Chi tiết gói giá:</p>')
            $('.modal-footer').append('<p style="font-size:1.1rem;">'+ description +'</p>');


        })
    </script>
@endpush
