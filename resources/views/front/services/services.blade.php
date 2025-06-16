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
                     
                      <li class="breadcrumb-item active" aria-current="page">{{$telecom->libelle_en}}</li>
                    @else
                     
                      <li class="breadcrumb-item active" aria-current="page">{{$telecom->libelle}}</li>
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
      <div class="row" style="padding-bottom: 0px">
        <div class="col-xxl-6 mx-auto mb-5">
          @if (app()->getLocale() == 'en')
          
            <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{$telecom->libelle_en}}</a></h2>
          @else

            <h2 class="post-title display-5 " style="margin-top: 0px"><a href="" class="link-dark">{{$telecom->libelle}}</a></h2>
          @endif
            @if (app()->getLocale() == 'en')
            <p style="margin-top: 0px">{!! $telecom->description_en !!}</p>
            @else
            <p style="margin-top: 0px">{!! $telecom->description !!}</p>
            @endif
           
            <!--/div -->
          </div>
          <!--/column -->
        <div class="col-xxl-6 mx-auto">
          <figure style="margin-top: 0px"><a href="" target="_blank"><img class="img-fluid" src="{{asset('/storage/imgs/'.$telecom->image)}}" alt=""></a></figure>
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


  <!-- /section -->
<section id="snippet-4" class="wrapper bg-light " style="margin-bottom: 0px">
  <div class="container pt-10 pt-md-12">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center" >
      <div class="col-xxl-6 mx-auto ">
        <p style="text-align: justify;color:#000; font-family: Arial, Helvetica, sans-serif; font-size: 18px;">{{ __('service_des')}}</p>
      </div>
      <!--/column -->
      <div class="col-xxl-6 mx-auto text-center justify-content-center align-self-center">
        <h1 class="display-3 mb-3" id="titreslider" style="color: #08367A">{{ __('TAKE ADVANTAGE OF OUR SERVICE')}}</h1>
        <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #000">{{ __('ONLINE AFTER SALES SERVICE')}}</p>
        <a href="#demande" class="btn btn-primary" style="width: 70%; font-size: 20px; text-transform: uppercase; margin: 10px">{{('Request a Quote')}}</a>
        
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
   
  </div>

  
</section>
<!-- /section -->

<section class="wrapper bg-light wrapper-border">
  <div class="container py-11">
    <ul class="list-inline mb-0">
      <li class="list-inline-item me-1 mb-2"><a href="{{route('interconnexion-et-internet-VSAT')}}" class="btn btn-primary rounded-0">{{ __('VSAT') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('internet-et-interconnexion-fibre-optique')}}" class="btn btn-soft-ash btn-sm rounded-0 " style="border-right:5px solid #08367A">{{ __('Fiber Optic') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('video-surveillance')}}" class="btn btn-soft-ash btn-sm rounded-0 text-primary pe-none" style="border-right:5px solid #08367A">{{ __('Videosurveillance') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('visioconference')}}" class="btn btn-soft-ash btn-sm rounded-0 " style="border-right:5px solid #08367A">{{ __('Videoconferencing') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('controle-acces')}}" class="btn btn-soft-ash btn-sm rounded-0 " style="border-right:5px solid #08367A">{{ __('Access control') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('alarme-anti-intrusion')}}" class="btn btn-soft-ash btn-sm rounded-0 " style="border-right:5px solid #08367A">{{ __('Anti intrusion alarm') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('systeme-de-securite-ncendie')}}" class="btn btn-soft-ash btn-sm rounded-0" style="border-right:5px solid #08367A">{{ __('Fire Safety System') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('telephonie-mobile-par-satellite')}}" class="btn btn-soft-ash btn-sm rounded-0" style="border-right:5px solid #08367A">{{ __('Mobile satellite telephony') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('tracking')}}" class="btn btn-soft-ash btn-sm rounded-0" style="border-right:5px solid #08367A">{{ __('Tracking') }}</a></li>
      <li class="list-inline-item me-1 mb-2"><a href="{{route('cablage-reseau-structure')}}" class="btn btn-soft-ash btn-sm rounded-0" style="border-right:5px solid #08367A">{{ __('Computer Networks and Consulting') }}</a></li>

    </ul>
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

@endsection
