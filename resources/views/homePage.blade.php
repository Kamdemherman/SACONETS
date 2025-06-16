@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')
<section class="wrapper bg-dark">
  <div class="swiper-container swiper-hero dots-over" style="height:550px !important;" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
    <div class="swiper">
      <div class="swiper-wrapper">
        {{-- <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="dist/assets/img/banner-slide.png">
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
          
        
        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" style="height:550px !important;" data-image-src="{{asset('/storage/imgs/'.$slider->image)}}">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                @if (app()->getLocale() == 'en')
                  <h1 class="display-1 mb-3" id="titreslider" style="color: #fff">{{$slider->titre_en}}</h1>
                  <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{$slider->paragraphe_en}}</p>
                  <a href="#" class="btn btn-primary" style="width: 70%; font-size: 20px; text-transform: uppercase; margin: 10px">Conatact us</a>
                  <p class="lead px-lg-5 px-xxl-8 mb-1"><strong style="color: #fff">Or call at (+237) 242 06 99 78 / 242 77 81 96</strong> </p>
                @else
                  <h1 class="display-1 mb-3" id="titreslider" style="color: #fff">{{$slider->titre}}</h1>
                  <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{$slider->paragraphe}}</p>
                  <a href="#" class="btn btn-primary" style="width: 70%; font-size: 20px; text-transform: uppercase; margin: 10px">Contactez-nous</a>
                  <p class="lead px-lg-5 px-xxl-8 mb-1"><strong style="color: #fff">OU appellez aux (+237) 242 06 99 78 / 242 77 81 96</strong> </p>
                @endif
                {{-- @if ($slider->video != null)
                  <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="{{asset('/storage/media/'.$slider->video)}}" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                @endif --}}
                
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
  <!-- /section -->
  
  <section class="wrapper bg-light">
    <div class="container pb-1 pb-md-1 mb-lg-2 mb-xl-15">
     
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        
        <div class="col-lg-6">
          @if (app()->getLocale() == 'en')
          <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">A</span>bout<span style="font-size: 60px; color: #08367A">S</span>aconets</h3>
          @else
          {{-- <span class="dropcap" style="margin-left: 100px; color: #F39200">A</span> --}}
          <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">A</span> propos de <span style="font-size: 60px; color: #08367A">S</span>aconets</h3>
          {{-- <span class="dropcap text-primary">D</span> --}}
          {{-- <h3 class="display-3 mb-10 mt-3 px-xl-10">{{ __('e Saconets') }}</h3> --}}
          @endif
          
          @if (app()->getLocale() == 'en')
            <p class="mb-5" style="font-size: 20px; text-align: justify">{{$about->short_en}}</p>
          @else
            <p class="mb-5" style="font-size: 20px; text-align: justify">{{$about->short}}</p>
          @endif
          <div class="row gy-3">
            <div class="col-xl-6">
                <a href="#" class="btn btn-primary" style="width: 70%; ">{{ __('Read More') }}</a>
            </div>
            <!--/column -->
            <div class="col-xl-6">
              
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->

        <div class="col-lg-6 position-relative">
            <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
            <div class="row gx-md-5 gy-5 position-relative align-items-center">
              <div class="col-6">
                <img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300" src="{{asset('/storage/imgs/'.$about->image2)}}" srcset="{{asset('/storage/imgs/'.$about->image2)}}" alt="" />
              </div>
              <!-- /column -->
              <div class="col-6">
                
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-soft-primary" style="background-color: #f1f5fd!important;">
    <div class="container pb-1 pb-md-10 mb-lg-5 mb-xl-15">
     
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        
        

        <div class="col-lg-4">
            @if (app()->getLocale() == 'en')
            <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">O</span>ur <span style="font-size: 60px; color: #08367A">S</span>ervices</h3>
            @else
            <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">N</span>os <span style="font-size: 60px; color: #08367A">S</span>ervices</h3>
            @endif 
        </div>
          <!--/column -->
        <div class="col-lg-8">
            <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper ">
                  <div class="swiper-wrapper ">
                    @foreach ( $services as $service )
                    <div class="swiper-slide lift rounded">
                        <div class="card-group service">
                            <div class="card ">
                                <img src="{{asset('/storage/imgs/'.$service->image)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                @if (app()->getLocale() == 'en')
                                <p class="card-title display-5 titre-service">{{$service->libelle_en}}</p>
                                <p class="card-text mb-2">{{$service->short_en}}</p>
                                @else
                                <p class="card-title display-5 titre-service">{{$service->libelle}}</p>
                                <p class="card-text mb-2">{{$service->short}}</p>
                                @endif
                                
                                </div>
                                <div class="card-footer">
                                <a href="{{$service->lien}}" class="btn btn-primary btn-sm rounded-pill" style="width: 100%; ">{{ __('Read More') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                  </div>
                  <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
              </div>
              <!-- /.swiper-container -->
          
        </div>
        <!--/column -->
        
        
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@if (count($soldes) > 0)
    

  <section class="wrapper bg-light">
    <div class="container pb-1 pb-md-1 mb-lg-2 mb-xl-15">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7 position-relative mt-7" style="background: #F39200">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6">
                <div class="rounded mt-md-10 position-relative">
                    @if (app()->getLocale() == 'en')
                    <h2 class="display-4 mb-3" style="color: #fff">{{$soldes[0]->produit->titre_en}}</h2>
                    <p style="color: #fff">{{$soldes[0]->produit->categorie->libelle_en}}</p>
                    @else
                    <h2 class="display-4 mb-3" style="color: #fff">{{$soldes[0]->produit->titre}}</h2>
                    <p style="color: #fff">{{$soldes[0]->produit->categorie->libelle}}</p>
                    @endif
                    
                    
                    <div class="card bg-pale-primary text-center mb-20 mt-10" data-cue="fadeIn" data-delay="600">
                        <div class="card-body py-11 counter-wrapper" style="padding-top: 1.1rem!important; padding-bottom: 1rem!important;padding-left: 0rem!important;">
                            <h4 class="counter text-nowrap">{{getPrix($soldes[0]->produit->prix)}}</h4>
                           
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                
              </div>
              <!--/column -->
              <div class="col-md-6">
                <div class="row gx-md-5 gy-1">
                  <div class="col-md-12 order-md-2">
                    <figure class="rounded mt-md-10 position-relative mb-5"  data-cue="fadeIn" data-delay="300"><img src="{{asset('/storage/imgs/'.$soldes[0]->produit->image)}}" srcset="{{asset('/storage/imgs/'.$soldes[0]->produit->image)}}" alt="" style="margin-top: 100px;margin-left: 30px"></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-10">
                    
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
        </div>
      
        <!--/column -->
        <div class="col-lg-5">
            <div class="row">
                @foreach ($soldes as $solde)
                    
                
                <div class="col-md-12 mb-2">
                  <a href="{{route('shop.detail',$solde->produit->id)}}">
                    <div class="card " style="background: rgb(226, 224, 224)">
                        <div class="row  align-items-center">
                            <div class="col-md-5">
                                <img src="{{asset('/storage/imgs/'.$solde->produit->image)}}" class="img-fluid" alt=""  />
                            </div>
                            <div class="col-md-7">
                                <div class="card-body"  style="background: rgb(226, 224, 224)">
                                    @if (app()->getLocale() == 'en')
                                    <h5 class="card-title text-uppercase fw-bold" style="color: #08367A">{{$solde->produit->titre_en}}</h5>
                                    <h6 class="">{{$solde->produit->categorie->libelle_en}}</h6>
                                    <p class="card-text text-uppercase"><strong style="color: #000">SOLDE</strong> <span style="background: #F39200; color: #FFF;padding: 5px">{{getPrix($solde->produit->prix)}}</span></p>
                                    @else
                                    <h5 class="card-title text-uppercase fw-bold" style="color: #08367A">{{$solde->produit->titre}}</h5>
                                    <h6 class="">{{$solde->produit->categorie->libelle}}</h6>
                                    <p class="card-text text-uppercase"><strong style="color: #000">SOLDE</strong> <span style="background: #F39200; color: #FFF;padding: 5px">{{getPrix($solde->produit->prix)}}</span></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                  </a>
                </div>
                @endforeach
                
                
            </div>
        </div>
        
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  @endif
  <section class="wrapper bg-light" style="background-color: #f1f5fd!important;">
    <div class="container pb-10 pb-md-12 mb-lg-12 mb-xl-1">
      {{-- @if (app()->getLocale() == 'en')
      <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">S</span>hop</h3>
      @else
        <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">B</span>outique</h3>
      @endif --}}
      
        <h3 class="display-2 mb-5 mt-10" style="text-align: center;">{{ __('Shop') }}</h3>
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true" data-items-xl="5" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
                @foreach ($shops as $shop)
                <div class="swiper-slide">
                    
                    <div class="project item ">
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
                      <div class="post-header align-items-center">
                        <center>
                          @if (app()->getLocale() == 'en')
                            <h2 class="post-title h3 fs-22"><a href="{{route('shop.detail',$shop->id)}}" class="link-dark">{{$shop->titre_en}}</a></h2>
                          @else
                              <h2 class="post-title h3 fs-22"><a href="{{route('shop.detail',$shop->id)}}" class="link-dark">{{$shop->titre}}</a></h2>
                          @endif
                          
                        </center>

                        <center>
                          <div class="align-items-center">
                            @if (app()->getLocale() == 'en')
                                <div class="post-category text-ash mb-0">{{$shop->categorie->libelle_en}}</div>
                            @else
                                <div class="post-category text-ash mb-0">{{$shop->categorie->libelle}}</div>
                            @endif
                            <p class="price mt-5"> <ins><span class="amount" style="background: #F39200; color: #FFF; padding: 8px;font-weight: bold">{{getPrix($shop->prix)}}</span></ins> </p>
                          </div>
                        </center>
                          
                      </div>
                      <!-- /.post-header -->
                    </div>
                    
                </div>
                <!--/.swiper-slide -->
                @endforeach
                
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

 

  <section class="wrapper bg-light" >
    <div class="container pb-1 pb-md-1 mb-lg-2 mb-xl-5">
        <div class="row align-items-center counter-wrapper gy-6 text-center">
            <div class="col-md-3">
              <h3 class="counter counter-lg" style="visibility: visible;">1550+</h3>
              <p style=" color: #F39200; font-size: 26px">{{ __('Pojects')}}</p>
            </div>
            <!--/column -->
            <div class="col-md-3">
              <h3 class="counter counter-lg" style="visibility: visible;">1580+</h3>
              <p style=" color: #F39200; font-size: 26px">{{ __('Realizations')}}</p>
            </div>
            <!--/column -->
            <div class="col-md-3">
              <h3 class="counter counter-lg" style="visibility: visible;">350+</h3>
              <p style=" color: #F39200; font-size: 26px">{{ __('Partners')}}</p>
            </div>
            <!--/column -->
            <div class="col-md-3">
                <h3 class="counter counter-lg" style="visibility: visible;">350+</h3>
                <p style=" color: #F39200; font-size: 26px">{{ __('Employees')}}</p>
              </div>
              <!--/column -->
          </div>
      
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light" style="background-color: #f1f5fd!important;">
    <div class="container pb-10 pb-md-12 mb-lg-2 mb-xl-5">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
             
              <h2 class="display-4 mb-3 mt-10">{{ __('Join Our Community') }}</h2>
              <p class="lead fs-lg mb-6  px-xl-10 px-xxl-15">{{ __('We are trusted by over 5000+ clients. Join them by using our services and grow your business') }}.</p>
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
                        <input type="submit" value="{{ __('Join') }}" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary" style="color: #000; text-transform: uppercase;font-size: 20px">
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

  <section class="wrapper bg-light" >
    <div class="container pb-1 pb-md-1 mb-lg-0 mb-xl-10">
     
      <div class="row gx-lg-2 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-5 position-relative">
          <div class="row">
            <div class="col-md-7" style="float: left">
              <img class="" data-cue="fadeIn" data-delay="300" src="{{asset('dist/assets/img/cantact.jpg')}}" srcset="{{asset('dist/assets/img/cantact.jpg')}}" alt="" style="width: 300px; height:auto ;" />
            </div>
            <div class="col-md-5 align-items-left" >
              @if (app()->getLocale() == 'en')
              <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">N</span>ews</h3>
                {{-- <span class="dropcap text-primary" >N </span>
                <h3 class="display-3 mb-10 mt-10 ">ews</h3> --}}
              @else
              <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200;margin-right: 10px"><span style="font-size: 60px; color: #08367A">A</span>ctualités</h3>
                {{-- <span class="dropcap text-primary" >A </span>
                <h3 class="display-3 mb-10 mt-10 ">ctualités</h3> --}}
              @endif
            </div>
          </div>
          
        </div>
        <!--/column -->
        
        <div class="col-lg-7">
            <div class="swiper-container mb-1" data-margin="0" data-nav="true" data-dots="true" data-items-xl="2" data-items-md="2" data-items-xs="1">
                <div class="swiper ">
                  <div class="swiper-wrapper ">
                    @foreach ($news as $new)
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card news">
                      <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{route('news.detail',$new->slug)}}"> <img src="{{asset('/storage/imgs/'.$new->image)}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">{{ __('Read More') }}</h5>
                        </figcaption>
                      </figure>
                      <div class="card-body">
                        <div class="post-header">
                            @if (app()->getLocale() == 'en')
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('news.detail',$new->slug)}}">{{$new->libelle_en}}</a></h2>
                            @else
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('news.detail',$new->slug)}}">{{$new->libelle}}</a></h2>
                            @endif
                          
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                          @if (app()->getLocale() == 'en')
                          <p>{!!$new->short_en!!}</p>
                        @else
                          <p>{!!$new->short!!}</p>
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
                <!-- /.swiper -->
              </div>
              <!-- /.swiper-container -->
          
        </div>
        <!--/column -->
 
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  
</div>
@endsection
