@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')
<section class="wrapper bg-dark">
  <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
    <div class="swiper">
      <div class="swiper-wrapper">
        {{-- <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="dist/assets/img/photos/bg7.jpg">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">{{ __('Welcome') }}</h2>
                <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.container -->
        </div> --}}
        <!--/.swiper-slide -->
        @foreach ($sliders as $slider)
          
        
        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{asset('/storage/imgs/'.$slider->image)}}">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                @if (app()->getLocale() == 'en')
                  <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">{{$slider->titre_en}}</h2>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">{{$slider->paragraphe_en}}</p>
                @else
                  <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">{{$slider->titre}}</h2>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">{{$slider->paragraphe}}</p>
                @endif
                @if ($slider->video != null)
                  <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="{{asset('/storage/media/'.$slider->video)}}" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                @endif
                
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.container -->
        </div>
        <!--/.swiper-slide -->
        @endforeach
        {{-- <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="dist/assets/img/photos/bg9.jpg">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
                <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.container -->
        </div> --}}
        <!--/.swiper-slide -->
      </div>
      <!--/.swiper-wrapper -->
    </div>
    <!-- /.swiper -->
  </div>
  <!-- /.swiper-container -->
</section>
<section class="wrapper bg-light angled lower-end">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
      <div class="col-lg-6 position-relative order-lg-2">
        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
        <div class="overlap-grid overlap-grid-2">
          <div class="item">
            <figure class="rounded shadow"><img src="{{asset('/storage/imgs/'.$about->image)}}" srcset="{{asset('/storage/imgs/'.$about->image)}}" alt=""></figure>
          </div>
          <div class="item">
            <figure class="rounded shadow"><img src="{{asset('/storage/imgs/'.$about->image2)}}" srcset="{{asset('/storage/imgs/'.$about->image2)}}" alt=""></figure>
          </div>
        </div>
      </div>
      <!--/column 
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
                line-clamp: 2; 
        -webkit-box-orient: vertical;
      -->
      <div class="col-lg-6">
        <img src="dist/assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" style="height: 100px;width: 100px;" />
        <h2 class="display-4 mb-3" style="color: #08367A">{{ __('About Saconets') }}</h2>
        <p class="lead fs-lg"></p>
        @if (app()->getLocale() == 'en')
          <p class="mb-6" style="arial">{!!$about->libelle_en!!}</p>
        @else
          <p class="mb-6" style="font-family: Myriad Pro Regular;margin-bottom:-100px">{!!$about->libelle!!}</p>
        @endif
        
        <!--/.row -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    


      
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
  <section class="wrapper bg-light" style="background-color: #f1f5fd!important;">
    <div class="container pt-0 pt-md-0">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h3 class="display-4 mb-10 mt-10 px-xl-10">{{ __('Our services') }}</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
          <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center mb-10">
            @foreach ($services as $service)
            <div class="col-md-6 col-xl-4">
              <div class="card shadow-lg service">
                <div class="card-body">
                  <a href="{{$service->lien}}">
                  <img src="{{asset('/storage/imgs/'.$service->image)}} " class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                  </a>
                  @if (app()->getLocale() == 'en')
                    <p  class="display-5 titre">{{$service->libelle_en}}</p>
                    <p class="mb-2">{!!$service->short_en!!}</p>
                  @else
                  <strong><p  class="display-5 titre">{{$service->libelle}}</p></strong>
                    
                    <p class="mb-2">{!!$service->short!!}</p></p>
                  @endif
                
                  <a href="{{$service->lien}}" class="">{{ __('Read More') }}</a>
                  
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            @endforeach
           
          </div>
          
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
  </section>
  <!-- end section service -->
  <section class="wrapper bg-light" style="background: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important">
    <div class="container py-14 py-md-16">
      <div class="row align-items-center mb-10 position-relative zindex-1">
        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
          <h1 class="display-6">{{ __('Shop') }}</h1>
         {{--  <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
          </nav> --}}
          <!-- /nav -->
        </div>
        <!--/column -->
        {{-- <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
          <div class="form-select-wrapper">
            <select class="form-select">
              <option value="popularity">Sort by popularity</option>
              <option value="rating">Sort by average rating</option>
              <option value="newness">Sort by newness</option>
              <option value="price: low to high">Sort by price: low to high</option>
              <option value="price: high to low">Sort by price: high to low</option>
            </select>
          </div>
          <!--/.form-select-wrapper -->
        </div> --}}
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="grid grid-view projects-masonry shop mb-13">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          @foreach ($shops as $shop)
          <div class="project item col-md-6 col-xl-4">
            <figure class="rounded mb-6">
              <img src="{{$shop->image}}" srcset="{{asset('/storage/imgs/'.$shop->image)}}" alt="" />
              <a class="item-like" href="/like/{{$shop->id}}" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
              <a class="item-view" href="{{route('shop.detail',$shop->id)}}" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
              @if ($shop->stock > 0)
                  <form action="{{route('add.cart')}}" method="POST">
                    @csrf
                    <input type="hidden" id="produit_id" name="produit_id" value="{{$shop->id}}" />
                    {{-- @if (app()->getLocale() == 'en')
                      <input type="hidden" id="titre" name="titre" value="{{$shop->titre_en}}" />
                    @else
                      <input type="hidden" id="titre" name="titre" value="{{$shop->titre}}" />
                    @endif
                    <input type="hidden" id="prix" name="prix" value="{{$shop->prix}}" /> --}}
                    <button class="item-cart" type="submit"><i class="uil uil-shopping-bag"></i> Add to Cart</button>
                  </form>
                  
                  <span class="badge bg-purple rounded-pill">Disponible</span>
                    
                  @else
                    <span class="badge bg-red  rounded-pill">Indisponible</span>
                    {{-- <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Indisponible</span></span> --}}
                  @endif
            </figure>
            <div class="post-header">
              <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                @if (app()->getLocale() == 'en')
                    <div class="post-category text-ash mb-0">{{$shop->categorie->libelle_en}}</div>
                @else
                    <div class="post-category text-ash mb-0">{{$shop->categorie->libelle}}</div>
                @endif
                
              </div>
                @if (app()->getLocale() == 'en')
                    <h2 class="post-title h3 fs-22"><a href="{{route('shop.detail',$shop->id)}}" class="link-dark">{{$shop->titre_en}}</a></h2>
                @else
                    <h2 class="post-title h3 fs-22"><a href="{{route('shop.detail',$shop->id)}}" class="link-dark">{{$shop->titre}}</a></h2>
                @endif
              <p class="price"><del><span class="amount">{{getPrix($shop->ancien_prix)}} </span></del> <ins><span class="amount">{{getPrix($shop->prix)}}</span></ins> <span class="ratings five" style="margin-left: 20px"></span></p>
            </div>
            <!-- /.post-header -->
          </div>
          @endforeach
          <!-- /.item -->
    
         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.grid -->
      <nav class="d-flex justify-content-center" aria-label="pagination">
        <a href="/shop" class="btn btn-yellow rounded-pill mb-2 me-1">{{ __('See More') }}</a>
        <!-- /.pagination -->
      </nav>
      <!-- /nav -->
    </div>
    <!-- /.container -->
  </section>
  <!-- end section product -->
</section>
<!-- /section -->

<section class="wrapper bg-light" style="background-color: #f1f5fd!important;">
  <div class="container pt-0 pt-md-0">
      <div class="row text-center">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <h3 class="display-4 mb-10 mt-10 px-xl-10">{{ __('News') }}</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
        <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              @foreach ($news as $new)
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="/news/{{$new->libelle}}"> <img src="{{asset('/storage/imgs/'.$new->image)}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">{{ __('Read More') }}</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                            @if (app()->getLocale() == 'en')
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/news/{{$new->libelle_en}}">{{$new->libelle_en}}</a></h2>
                            @else
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/news/{{$new->libelle}}">{{$new->libelle}}</a></h2>
                            @endif
                          
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          @if (app()->getLocale() == 'en')
                          <p>{!!$new->short_en!!}</p>
                        @else
                          <p>{!!$new->short!!}</p></p>
                        @endif
                    
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$new->dates}}</span></li>
                          <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>{{$new->auteur}}</a></li>
                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              @endforeach
              <!--/.swiper-slide -->
            
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->
        
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
</section>
<!-- contact section -->

<!-- /section -->


<!-- /section -->
<section class="wrapper bg-light angled upper-end"  style="background: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important">
  <div class="container pb-11">
    
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
        <h3 class="display-4 mb-3 text-center" style="margin-top: 100px">{{ __('Get in Touch')}}</h3>
        
        @if (session('success'))
          <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('success')}}</a>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session('error'))
          <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-times-circle"></i>  <a href="#" class="alert-link hover">{{session('error')}}</a>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        {{-- <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p> --}}
        <form class="" method="post" action="{{route('contacts')}}">
          @csrf
          <div class="messages"></div>
          <div class="row gx-4">
            <div class="col-md-6">
              <div class="form-floating mb-4">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="{{ __('Your name') }}" required>
                <label for="form_name"> {{ __('Name') }}*</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please enter your first name. </div>
              </div>
            </div>
            <!-- /column -->
            <div class="col-md-6">
              <div class="form-floating mb-4">
                <input id="phone" type="text" name="phone" class="form-control" placeholder="{{ __('Your phone') }}" required>
                <label for="phone"> {{ __('Phone') }}*</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please enter your last name. </div>
              </div>
            </div>
            <!-- /column -->
            <div class="col-md-6">
              <div class="form-floating mb-4">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="{{ __('Your Address') }}" required>
                <label for="form_email"> {{ __('Email') }}*</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please provide a valid email address. </div>
              </div>
            </div>
            <!-- /column -->
            <div class="col-md-6">
              <div class="form-floating mb-4">
                <input id="form_email" type="text" name="sujet" class="form-control" placeholder="{{ __('Your subject') }}" required>
                <label for="form_email"> {{ __('Subject') }}*</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please provide a valid email address. </div>
              </div>
            </div>
            <!-- /column -->
            <div class="col-12">
              <div class="form-floating mb-4">
                <textarea id="form_message" name="message" class="form-control" placeholder="{{ __('Your message') }}" style="height: 150px" required></textarea>
                <label for="form_message"> {{ __('Message') }}*</label>
                <div class="valid-feedback"> Looks good! </div>
                <div class="invalid-feedback"> Please enter your messsage. </div>
              </div>
            </div>
            <div class="form-floating mb-4">
              <strong>ReCaptcha:</strong>
              <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
              @if ($errors->has('g-recaptcha-response'))
                  <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
              @endif
            </div>
            <!-- /column -->
            <div class="col-12 text-center">
              <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
              <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </form>
        <!-- /form -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<!-- /section -->
<section class="wrapper bg-soft-primary" style="background-color: #f1f5fd!important;">
  <div class="container py-14 py-md-16 text-center">
    <div class="row">
      <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
        <img src="dist/assets/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3">{{ __('Join Our Community') }}</h2>
        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">{{ __('We are trusted by over 5000+ clients. Join them by using our services and grow your business') }}.</p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    @if (session('successs'))
    <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
      <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('successs')}}</a>.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (session('errors'))
    <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
      <i class="uil uil-times-circle"></i>  <a href="#" class="alert-link hover">{{session('errors')}}</a>.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <div class="row">
      <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
        <div class="newsletter-wrapper">
          <!-- Begin Mailchimp Signup Form -->
          <div id="mc_embed_signup2">
            <form action="{{route('subscrire')}}" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              @csrf
              <div id="mc_embed_signup_scroll2">
                <div class="mc-field-group input-group form-floating">
                  <input type="email"  name="email" class="required email form-control" placeholder="{{ __('Your Address') }}" id="mce-EMAIL2">
                  <label for="mce-EMAIL2">{{ __('Your Address') }}</label>
                  <input type="submit" value="{{ __('Join') }}" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                </div>
                <div id="mce-responses2" class="clear">
                  <div class="response" id="mce-error-response2" style="display:none"></div>
                  <div class="response" id="mce-success-response2" style="display:none"></div>
                </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                <div class="clear"></div>
              </div>
            </form>
          </div>
          <!--End mc_embed_signup-->
        </div>
        <!-- /.newsletter-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
</div>
@endsection
