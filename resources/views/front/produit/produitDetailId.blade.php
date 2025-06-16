@extends('layouts.main')

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
      
                    
                      @if (app()->getLocale() == 'en')
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->categorie->libelle_en}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->libelle_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->categorie->libelle}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$produit->libelle}}</li>
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
</section>
  <!-- /section -->
 
<!-- /section -->
<section id="snippet-4" class="wrapper bg-light wrapper-border" style="margin-bottom: 20px">
    <div class="container pt-15 pt-md-17">
      <div class="row" style="padding-bottom: 50px">
   
          
        
        <div class="col-xxl-6 mx-auto">
            @if (app()->getLocale() == 'en')
            <p style="margin-top: -100px">{!! $produit->description_en !!}</p>
            @else
            <p style="margin-top: -100px">{!! $produit->description !!}</p>
            @endif
           
            <!--/div -->
          </div>
          <!--/column -->
        <div class="col-xxl-6 mx-auto">
          {{-- <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{$produit->image}}" alt=""></a></figure> --}}

          <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true" style="margin-top: -100px">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('/storage/imgs/'.$produit->image)}}" srcset="{{asset('/storage/imgs/'.$produit->image)}}" class="rounded" alt="" class="img-fluid" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image2)}}" srcset="{{asset('/storage/imgs/'.$produit->image2)}}" class="rounded" alt="" class="img-fluid" /></div>
                {{-- <div class="swiper-slide"><a href="{{$produit->image}}" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right"></i></a><img src="dist/assets/img/photos/about22.jpg" srcset="./assets/img/photos/about22@2x.jpg 2x" class="rounded" alt="" /></div> --}}
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image3)}}" srcset="{{asset('/storage/imgs/'.$produit->image3)}}" class="rounded" alt="" class="img-fluid" /></div>
              </div>
              <!--/.swiper-wrapper -->
            </div>
            
            <!--/.swiper -->
          </div>
          <div class="d-flex justify-content-center justify-content-lg-start mt-10" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="/shop" class="btn btn-yellow rounded-pill mb-2 me-1">{{ __('Where can I buy this?') }}</a></span>
            
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /column -->
  
      </div>
      <!-- /.row -->
    </div>
  
    
  </section>
  <!-- /section -->
  

@endsection
