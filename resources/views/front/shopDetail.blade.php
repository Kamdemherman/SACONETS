@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')


  {{-- <section class="wrapper bg-gray">
    <div class="container py-12 py-md-14">
      <div class="row gx-lg-8 gx-xl-12 gy-8">
        <div class="col-md-10 col-lg-10">
          <div class="d-flex flex-row">
            <div>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 mt-5" style="padding-top: 0px">
                      <li class="breadcrumb-item"><a href="/">{{ __('Home')}}</a></li>
                      <li class="breadcrumb-item "><a href="/shop">{{ __('Shop')}}</a></li>
                      @if (app()->getLocale() == 'en')
                        <li class="breadcrumb-item active" aria-current="page">{{$shop->categorie->libelle_en}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$shop->titre_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$shop->categorie->libelle}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$shop->titre}}</li>
                      @endif
                      
                    </ol>
                </nav>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
</section> --}}
  <!-- /section -->
  <section class="wrapper bg-soft-primary" style="background: #08367A">
    <div class="container py-12 py-md-5 text-center">
      
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  
  <section class="wrapper bg-soft-primary" style="background: #08367A">
    <div class="container py-12 py-md-16 text-center">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-5 mx-auto mb-10">
          
          @if (app()->getLocale() == 'en')
            <h1 class="display-1 mb-3" style="color: #fff">{{$shop->titre_en}}</h1>
            
          @else
            <h1 class="display-1 mb-3" style="color: #fff">{{$shop->titre}}</h1>
           
          @endif
        </div>
        
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section --> 

<!-- /section -->
<section class="wrapper wrapper-border">
  <div class="container py-11" style="padding-top: 2rem!important; padding-bottom: 0rem!important">
    @if (app()->getLocale() == 'en')
      <h2 class="h5 autre">{{ __('See other products:')}} {{$shop->categorie->libelle_en}}</h2>
    @else
      <h2 class="h5 autre">{{ __('See other products:')}} {{$shop->categorie->libelle}}</h2>
    @endif
    
    <ul class="list-inline mb-0">
      @php
        $autres=App\Models\Shop::with('categorie')->where('cat_id',$shop->categorie->id)->take(10)->get();
      @endphp
      @foreach ($autres as $autre)
        @if (app()->getLocale() == 'en')
          <li class="list-inline-item me-1 mb-2"><a href="{{route('shop.details',$autre->slug)}}" class="btn btn-soft-ash btn-sm rounded ">{{$autre->titre_en}}</a></li>
        @else
          <li class="list-inline-item me-1 mb-2"><a href="{{route('shop.details',$autre->slug)}}" class="btn btn-soft-ash btn-sm rounded ">{{$autre->titre}}</a></li>
        @endif
      @endforeach
      
      
    </ul>
  </div>
  <!-- /.container -->
</section>

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-1">
      <div class="row gx-md-8 gx-xl-12 gy-8 mt-5">
        <div class="col-lg-6">
          <div class="swiper-container swiper-thumbs-container dots-over" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure class="rounded"><img src="{{asset('/storage/imgs/'.$shop->image)}}" srcset="{{asset('/storage/imgs/'.$shop->image)}}" alt="" /><a class="item-link swiper-no-swiping" href="{{asset('/storage/imgs/'.$shop->image)}}" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <figure class="rounded"><img src="{{asset('/storage/imgs/'.$shop->image2)}}" srcset="{{asset('/storage/imgs/'.$shop->image2)}}" alt="" /><a class="item-link swiper-no-swiping" href="{{asset('/storage/imgs/'.$shop->image2)}}" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <figure class="rounded"><img src="{{asset('/storage/imgs/'.$shop->image3)}}" srcset="{{asset('/storage/imgs/'.$shop->image3)}}" alt="" /><a class="item-link swiper-no-swiping" href="{{asset('/storage/imgs/'.$shop->image3)}}" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
            <div class="swiper swiper-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$shop->image)}}" srcset="{{asset('/storage/imgs/'.$shop->image)}}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$shop->image2)}}" srcset="{{asset('/storage/imgs/'.$shop->image2)}}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$shop->image3)}}" srcset="{{asset('/storage/imgs/'.$shop->image3)}}" class="rounded" alt="" /></div>
                
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /column -->
        <div class="col-lg-6">
          <div class="post-header mb-5">
              @if (app()->getLocale() == 'en')
                <span class="badge bg-blue rounded-pill mt-10" style="font-size: 15px; background: #08367A;margin-bottom: 10px">{{$shop->categorie->libelle_en}}</span>
                <h2 class="post-title display-5"><a href="" class="link-dark">{{$shop->titre_en}}</a></h2>
              @else
                <span class="badge bg-blue rounded-pill mt-10" style="font-size: 15px; background: #08367A;margin-bottom: 10px">{{$shop->categorie->libelle}}</span>
                <h2 class="post-title display-5"><a href="" class="link-dark">{{$shop->titre}}</a></h2>
              @endif
            
            <p class="price fs-20 mb-2"><span class="amount">{{getPrix($shop->prix)}}</span></p>
            <p class="price fs-20 mb-2"><span class="amount">Stock ({{$shop->stock}})</span></p>
            <a href="#" class="link-body ratings-wrapper"><span class="ratings four"></span><span>({{$shop->nb_like}} Reviews)</span></a>
          </div>
          <!-- /.post-header -->
          <p class="mb-6"></p>
          
            
            <div class="row" style="margin-top: 40px">
              <div class="col-lg-9 d-flex flex-row pt-2">
                <div>
                  <div class="form-select-wrapper">
                    
                  </div>
                  <!--/.form-select-wrapper -->
                </div>
                <div class="flex-grow-1 mx-2" >
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
                    <button type="submit" class="btn btn-primary btn-icon btn-icon-start rounded w-100 flex-grow-1"><i class="uil uil-shopping-bag"></i> Add to Cart</button>
                  </form>
                  @endif
                </div>
                <div>
                  <a class="btn btn-block btn-red btn-icon rounded px-3 w-100 h-100" href="/like/{{$shop->id}}"><i class="uil uil-heart"></i> </a>
                </div>
                
              </div>
              <div class="col-lg-6 d-flex flex-row pt-2 mt-10">
                <span><a href="#demande" class="btn btn-blue rounded-pill mb-2 me-1">{{ __('Request a Quote') }}</a></span>
              </div>
              <div class="col-lg-6 d-flex flex-row pt-2">
                
              </div>
              
              <!-- /column -->
            </div>
            <!-- /.row -->
         
          <!-- /form -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <ul class="nav nav-tabs nav-tabs-basic mt-12">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">{{ __('Product Details')}}</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">Additional Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">Delivery</a>
        </li> --}}
      </ul>
      <!-- /.nav-tabs -->
      <div class="tab-content mt-0 mt-md-5">
        <div class="tab-pane fade show active" id="tab1-1">
            @if (app()->getLocale() == 'en')
                {!! $shop->description_en !!}
            @else
                {!! $shop->description !!}
            @endif
        </div>  
        <!--/.tab-pane -->
        <div class="tab-pane fade" id="tab1-2">
          
        </div>
        <!--/.tab-pane -->
        <div class="tab-pane fade" id="tab1-3">

        </div>
        <!--/.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  
  <section class="wrapper bg-gradient-primary">
    <div class="container pt-0 pt-md-4 pb-8 text-center">
      
      <!-- /.row -->

      <div class="row mt-10" id="demande">
        <div class="col-xxl-6 mx-auto">
          
        </div>
        <h1 class="post-title display-5" style="text-align: left">{{ __('Request a Quote') }}</h1>
        <div class="col-xxl-6 mx-auto">
          <div>
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
        </div>
        </div>
      </div>
      <div class="row">
      <form style="margin-top: 0px; " method="POST" action="{{route('devis.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-xxl-4 mx-auto">
            <div class="form-floating mb-4">
                <input id="name" type="text" class="form-control" name="name" id="name" required>
                <label for="name">{{ __('Full name')}}*</label>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
          </div>
          <div class="col-xxl-4 mx-auto">
            <div class="form-floating mb-4">
                <input id="email" type="email" class="form-control" name="email" id="email" required> 
                <label for="email">{{ __('E-mail')}}*</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
          </div>
          <div class="col-xxl-4 mx-auto">
            <div class="form-floating mb-4">
                <input id="company" type="text" class="form-control" name="company" id="company" required> 
                <label for="email">{{ __('Company')}}*</label>
                @if ($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xxl-4 mx-auto">
            <div class="form-floating mb-4">
                <input id="ville" type="text" class="form-control" name="ville" id="ville" required>
                <label for="ville">{{ __('City')}}*</label>
                @if ($errors->has('ville'))
                    <span class="text-danger">{{ $errors->first('ville') }}</span>
                @endif
            </div>
          </div>
          <div class="col-xxl-4 mx-auto">
            <div class="form-floating mb-4">
                <input id="phone" type="text" class="form-control" name="phone" id="phone" required> 
                <label for="phone">{{ __('Phone')}}*</label>
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
          </div>
          <div class="col-xxl-4 mx-auto">
            
          </div>
          
        </div>


        <div class="row">
          <div class="col-xxl-8 mx-auto">
            <div class="form-floating mb-4">
                <textarea id="object" class="form-control"  style="height: 150px" name="object" id="object" required></textarea>
                @foreach ( $shops as $shop )
                  <label for="object">{{ __('Requesting information for:')}} {{$shop->libelle}}*</label>
                @endforeach
                
                @if ($errors->has('object'))
                    <span class="text-danger">{{ $errors->first('object') }}</span>
                @endif
            </div>
          </div>
          <div class="col-xxl-4 mx-auto">
            <div class="form-floating mb-4">
                <strong style="float: left">ReCaptcha:</strong>
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
            </div>
          </div>
          <div class="form-floating mb-4">
              <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('Send your request')}}">
              <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
          </div>
        </div>
      </form>  
      </div>  
      
      
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
