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
                    <li class="breadcrumb-item "><a href="#">{{ __('Our services') }}</a></li>
                    @if (app()->getLocale() == 'en')
                     
                      <li class="breadcrumb-item active" aria-current="page">{{$tracke->libelle_en}}</li>
                    @else
                     
                      <li class="breadcrumb-item active" aria-current="page">{{$tracke->libelle}}</li>
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
<section id="snippet-4" class="wrapper bg-light " style="margin-bottom: 0px">
    <div class="container pt-10 pt-md-12">
      <div class="row" style="padding-bottom: 50px">
        <div class="col-xxl-7 mx-auto">
          @if (app()->getLocale() == 'en')
          
            <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{$tracke->libelle_en}}</a></h2>
          @else

            <h2 class="post-title display-5 " style="margin-top: 0px"><a href="" class="link-dark">{{$tracke->libelle}}</a></h2>
          @endif
            @if (app()->getLocale() == 'en')
            <p style="margin-top: 0px">{!! $tracke->description_en !!}</p>
            @else
            <p style="margin-top: 0px">{!! $tracke->description !!}</p>
            @endif
           
            <!--/div -->
          </div>
          <!--/column -->
        <div class="col-xxl-5 mx-auto">
          <figure style="margin-top: 0px"><a href="" target="_blank"><img class="img-fluid" src="{{asset('/storage/imgs/'.$tracke->image)}}" alt=""></a></figure>
          <figure style="margin-top: 10px"><a href="" target="_blank"><img class="img-fluid" src="{{asset('dist/assets/img/partenaire/tracking1.jpg')}}" alt="" height="299px"></a></figure>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
  
    
  </section>
  <!-- /section -->
  <section class="wrapper bg-light mb-10">
    <div class="container py-1 py-md-1">
      <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach ($marques as $marque)
            <div class="swiper-slide px-5 pmg" style="width: auto !important;"><img src="{{asset('/storage/avatars/'.$marque->logo)}}" alt="" /></div>
            @endforeach
     
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
