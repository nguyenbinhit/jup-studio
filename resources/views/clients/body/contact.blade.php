<!-- Contact & Map starts -->
<section id="contact" class="bg-light-gray" style="padding: 5.5rem 0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 p-0">
                <div class="contact-box" style="padding: 20px 50px">
                    <div class="main-title text-center text-md-left mb-4">
                        <h2 class="font-weight-normal">Liên hệ với chúng
                            tôi
                        </h2>
                    </div>
                    <div class="text-center text-md-left">
                        <!--Address-->
                        <p class="mb-1">Địa chỉ : Vinhomes Smart City Tây Mỗ. </p>

                        <!--Phone-->
                        <p class="mb-1">Mobile : +84989989309 </p>

                        <!--Email-->
                        <p class="mb-1"> Email: <a href="mailto:email@website.com"
                                class="color-black">admin@website.com</a>
                            <br>
                        </p>
                    </div>
                    <div class="mt-3">
                        <form class="form-contact" id="fromContact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="nameprice">Tên</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required="">

                                        <div class="invalid-feedback">
                                            Vui lòng nhập tên !
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            required="">

                                        <div class="invalid-feedback">
                                            Vui lòng nhập email!
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="string" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="phone">Ghi chú</label>
                                        <textarea class="form-control" id="summernote-editor" name="note" rows="4" placeholder="Viết ghi chú..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-left">
                                <button id="btnSubmit" type="submit"
                                    class="btn btn-success waves-effect waves-light mt-2"><i
                                        class="mdi mdi-content-save"></i>Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 p-0 col-map box-shadow-map">
                <div class="bg-light-gray map" style="width: 100%; height: 100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.48015309319!2d105.73630426801837!3d21.00305377483419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453d4ead47a63%3A0x9af352cfc1f411a1!2sVinhomes%20Smart%20City%20T%C3%A2y%20M%E1%BB%97!5e0!3m2!1svi!2s!4v1689522834113!5m2!1svi!2s"
                        width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            function post_form_contact() {
                var submit = $("#btnSubmit");
                submit.click(function() {
                    var data = $('form#fromContact').serialize();
                    $.ajax({
                        url: "{{ route('client-contact') }}",
                        method: 'POST',
                        data: data,
                        success: function(data) {
                            console.log(data)
                        }
                    });
                    return false;
                });
            }
            post_form_contact();
        });
    </script>
@endpush
<!-- Contact & Map ends -->
