 <!-- Work Starts -->
 <section id="work" class="pb-0">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="main-title wow fadeIn" data-wow-delay="300ms">
                     <h2 class="mb-0">Creative<span class="color-pink">
                             Portfolio</span> </h2>
                 </div>
             </div>
         </div>
        <div class="row d-block">
        <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat no-transition">
        @foreach ($products as $key => $product)
            @php
            switch ($key){
                case 0:
                    echo '<div class="cbp-item web-designs marketing">
                        <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work1.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="Bolt UI<br>by Tiberiu Neamu">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work1.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">We
                                         are digital agency</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                    </div>';
                    break;
                case 1:
                    echo '<div class="cbp-item graphic-designs seo">
                     <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work2.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="World Clock<br>by Paul Flavius Nechita">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work2.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">Creative
                                         art work</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>';
                 break;
                case 2:
                    echo ' <div class="cbp-item graphic-designs web-designs">
                     <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) :  asset('../bootstrapv1/img/work3.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="WhereTO App<br>by Tiberiu Neamu">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) :  asset('../bootstrapv1/img/work3.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">Modern
                                         portfolio</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>';
                 break;
                case 3:
                    echo '<div class="cbp-item seo marketing">
                     <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work6.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work6.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">Digital
                                         art works</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                    </div>';
                    break;
                case 4:
                    echo '<div class="cbp-item web-designs seo">
                     <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work4.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="Seemple* Music<br>by Tiberiu Neamu">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work4.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">Photography</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>';
                 break;
                case 5:
                    echo ' <div class="cbp-item web-designs seo">
                     <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work4.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="Seemple* Music<br>by Tiberiu Neamu">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work4.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">Photography</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>';
                 break;
                case 6:
                    echo '  <div class="cbp-item web-designs marketing">
                     <a href="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work5.jpg')) .'" class="cbp-caption cbp-lightbox"
                         data-title="iDevices<br>by Tiberiu Neamu">
                         <div class="cbp-caption-defaultWrap">
                             <img src="'. (($product->image?->url) ? asset('../..' . Storage::url($product->image->url)) : asset('../bootstrapv1/img/work5.jpg')) .'" alt="work">
                         </div>
                         <div class="cbp-caption-activeWrap">
                             <div class="cbp-l-caption-alignCenter">
                                 <div class="cbp-l-caption-body">
                                     <p>Elegant | Images</p>
                                     <div class="cbp-l-caption-title">Modern
                                         workspace</div>
                                     <span class="work-icon">
                                         <i class="fa fa-arrow-right"></i>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                    </div>';
                    break;
                default:
                    break;
                }
                @endphp
        @endforeach
        </div>
        </div>
     </div>
 </section>
 <!-- Work ends -->
