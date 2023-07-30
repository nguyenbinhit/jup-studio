 <!-- Team start -->
 <section id="team" class="bg-light-gray" style="padding: 5.5rem 0">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="main-title wow fadeIn" data-wow-delay="300ms">
                     {{-- <h5> Lorem ipsum dolor sit amet </h5> --}}
                     <h2 class="mb-0">Đội Ngũ <span class="color-pink">Sáng Tạo</span></h2>
                 </div>
             </div>
         </div>
         <div class="row wow fadeInUp team" data-wow-delay="300">
             @foreach ($employees as $key => $item)
                 @if ($key % 2 == 0)
                     <div class="col-lg-6 col-xl-3 p-0  ml-md-auto mr-md-0 mx-auto">
                         <div class="team-image">
                             <img src="{{ $item->image?->url ? asset('../..' . Storage::url($item->image->url)) : asset('../bootstrapv1/img/team1.jpg') }}"
                                 alt="team1" class="m-image{{ $key + 1 }}">
                         </div>
                         <div class="team-classic-content  pink">
                             <h3 class="mb-3 text-capitalize color-black">{{ $item->name }}</h3>
                             <h5 class="mb-3 text-capitalize color-pink">{{ $item->position }}</h5>
                             <p class="mt-3 mb-3 color-black">{{ $item->description }}</p>
                             <ul class="team-social">
                                 @foreach ($item->socials as $key => $value)
                                     @if ($key === 'facebook' && $item->socials['facebook'])
                                         <li class="d-inline-block"><a href="javascript:void(0)"
                                                 class="facebook-bg-hvr"><i class="fab fa-facebook-f"
                                                     aria-hidden="true"></i></a></li>
                                     @endif
                                     @if ($key === 'twitter' && $item->socials['twitter'])
                                         <li class="d-inline-block"><a href="javascript:void(0)"
                                                 class="twitter-bg-hvr"><i class="fab fa-twitter"
                                                     aria-hidden="true"></i></a></li>
                                     @endif
                                     @if ($key === 'google' && $item->socials['google'])
                                         <li class="d-inline-block"><a href="javascript:void(0)"
                                                 class="google-bg-hvr"><i class="fab fa-google"
                                                     aria-hidden="true"></i></a></li>
                                     @endif
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 @else
                     <div class="col-lg-6 col-xl-3 p-0  mr-md-auto ml-md-0 mx-auto">
                         <div class="row">
                             <div class="col-md-12 order-md-1">
                                 <div class="team-image">
                                     <img src="{{ $item->image?->url ? asset('../..' . Storage::url($item->image->url)) : asset('../bootstrapv1/img/team1.jpg') }}"
                                         alt="team1" class="m-image{{ $key + 1 }}">
                                 </div>
                             </div>
                             <div class="col-md-12 order-md-0">
                                 <div class="team-classic-content  blue">
                                     <h3 class="mb-3 text-capitalize color-black">{{ $item->name }}</h3>
                                     <h5 class="mb-3 text-capitalize color-blue">{{ $item->position }}</h5>
                                     <p class="mt-3 mb-3 color-black">{{ $item->description }}</p>
                                     <ul class="team-social">
                                         @foreach ($item->socials as $key => $value)
                                             @if ($key === 'facebook' && $item->socials['facebook'])
                                                 <li class="d-inline-block"><a href="javascript:void(0)"
                                                         class="facebook-bg-hvr"><i class="fab fa-facebook-f"
                                                             aria-hidden="true"></i></a></li>
                                             @endif
                                             @if ($key === 'twitter' && $item->socials['twitter'])
                                                 <li class="d-inline-block"><a href="javascript:void(0)"
                                                         class="twitter-bg-hvr"><i class="fab fa-twitter"
                                                             aria-hidden="true"></i></a></li>
                                             @endif
                                             @if ($key === 'google' && $item->socials['google'])
                                                 <li class="d-inline-block"><a href="javascript:void(0)"
                                                         class="google-bg-hvr"><i class="fab fa-google"
                                                             aria-hidden="true"></i></a></li>
                                             @endif
                                         @endforeach
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endif
             @endforeach
         </div>
     </div>
 </section>
 <!-- Team ends -->
