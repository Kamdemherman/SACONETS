@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')

<section class="wrapper bg-gray">
  <div class="container py-12 py-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-8">
      <div class="col-md-10 col-lg-10">
        <div class="d-flex flex-row">
          <div>
              <nav class="d-inline-block" aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 mt-5" style="padding-top: 0px">
                    <li class="breadcrumb-item"><a href="/">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item "><a href="#">{{ __('Our products') }}</a></li>
                    @foreach ($produits as $produit)
                      
                    
                      @if (app()->getLocale() == 'en')
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->categorie->libelle_en}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->libelle_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->categorie->libelle}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->libelle}}</li>
                      @endif
                    @endforeach
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
</section>
  <!-- /section -->
 
<!-- /section -->
<section id="snippet-4" class="wrapper bg-gradient-primary" style="margin-bottom: 20px">
    <div class="container pt-15 pt-md-17">
      <div class="row" style="padding-bottom: 50px">
        @foreach ( $produits as $produit )
          
        <div class="col-xxl-6 mx-auto">
          <div class="swiper-container swiper-thumbs-container dots-over" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure class="rounded"><img class="img" src="{{asset('/storage/imgs/'.$produit->image)}}" srcset="dist/assets/img/photos/shs1@2x.jpg 2x" alt="" /><a class="item-link swiper-no-swiping" href="./assets/img/photos/shs1@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <figure class="rounded"><img class="img" src="{{asset('/storage/imgs/'.$produit->image2)}}" srcset="dist/assets/img/photos/shs2@2x.jpg 2x" alt="" /><a class="item-link swiper-no-swiping" href="./assets/img/photos/shs2@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <figure class="rounded"><img class="img" src="{{asset('/storage/imgs/'.$produit->image3)}}" srcset="dist/assets/img/photos/shs3@2x.jpg 2x" alt="" /><a class="item-link swiper-no-swiping" href="./assets/img/photos/shs3@2x.jpg" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
            <div class="swiper swiper-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image)}}" srcset="{{asset('/storage/imgs/'.$produit->image)}}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image2)}}" srcset="{{asset('/storage/imgs/'.$produit->image2)}}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image3)}}" srcset="{{asset('/storage/imgs/'.$produit->image3)}}" class="rounded" alt="" /></div>
                
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
          <!--/column -->
        <div class="col-xxl-4 mx-auto">
          <div>
            @if (session('retour'))
                <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('retour')}}</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
          </div>
          {{-- <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{$produit->image}}" alt=""></a></figure> --}}

          @if (app()->getLocale() == 'en')
                <span class="badge bg-blue rounded-pill mt-10" style="font-size: 15px; background: #08367A;margin-bottom: 10px">{{$produit->categorie->libelle_en}}</span>
                <h2 class="post-title display-5"><a href="" class="link-dark">{{$produit->libelle_en}}</a></h2>
              @else
                <span class="badge bg-blue rounded-pill mt-10" style="font-size: 15px; background: #08367A;margin-bottom: 10px">{{$produit->categorie->libelle}}</span>
                <h2 class="post-title display-5 "><a href="" class="link-dark">{{$produit->libelle}}</a></h2>
              @endif
          <div class="d-flex justify-content-center justify-content-lg-start mt-10" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="{{route('search.shop',$produit->libelle)}}" class="btn btn-yellow rounded-pill mb-2 me-1">{{ __('Where can I buy this?') }}</a></span>
            <span><a href="#demande" class="btn btn-blue rounded-pill mb-2 me-1">{{ __('Request a Quote') }}</a></span>
          </div>
          <!-- /.swiper-container -->
        </div>
          <!-- /column -->
        @endforeach
        
        <!--/column -->
      </div>
      <!-- /.row -->
      
    </div>
  
    
  </section>
  
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container">
      <div class="row" style="padding-bottom: 50px; margin-top: 0px">
        @foreach ( $produits as $produit )
          
        @if (app()->getLocale() == 'en')
            <p style="margin-top: 0px">{!! $produit->description_en !!}</p>
            @else
            <p style="margin-top: 0px">{!! $produit->description !!}</p>
            @endif
        
        @endforeach
        
        <!--/column -->
      </div>
      
      <div class="row">
        <div class="col-xxl-6 mx-auto">
          <div class="ratio ratio-16x9">
            @foreach ( $produits as $produit  )
              
            
            <iframe class="rounded" src="https://www.youtube.com/embed/{{$produit->video}}?rel=0" title="YouTube video" allowfullscreen></iframe>
            @endforeach
          </div>
        </div>
        <div class="col-xxl-6 mx-auto">
          
          
        </div>
      </div>
      <!-- /.row -->
      
      
      
      <div class="row mt-10"  id="demande">
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
                @foreach ( $produits as $produit )
                  <label for="object">{{ __('Requesting information for:')}} {{$produit->libelle}}*</label>
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
