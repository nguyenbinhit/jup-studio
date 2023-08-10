<!-- Footer starts -->
<footer class="p-half bg-white" style="padding: 1rem 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="footer-icons">
                    @foreach ($pages as $page)
                        @if ($page->slug === 'social')
                            @foreach ($page['metadata'] as $key => $value)
                                @if ($key === 'facebook')
                                    <li>
                                        <a href="{{ $value }}" target="_blank" class="wow fadeInUp facebook"><i
                                                class="fab fa-facebook-f"></i> </a>
                                    </li>
                                @endif

                                @if ($key === 'twitter')
                                    <li><a href="{{ $value }}" target="_blank" class="wow fadeInDown twitter"><i
                                                class="fab fa-twitter"></i> </a>
                                    </li>
                                @endif

                                @if ($key === 'google')
                                    <li><a href="{{ $value }}" target="_blank" class="wow fadeInUp google"><i
                                                class="fab fa-google"></i> </a>
                                    </li>
                                @endif

                                @if ($key === 'instagram')
                                    <li><a href="{{ $value }}" target="_blank" class="wow fadeInUp instagram"><i
                                                class="fab fa-instagram"></i>
                                        </a> </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    <li><a href="javascript:void(0)" class="wow fadeInDown linkedin"><i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <p class="copyrights mt-2">© 2023 {{ env('WEBSITE_NAME') }}</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer ends -->
