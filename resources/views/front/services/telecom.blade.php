@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')

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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Services')}}: {{ __('VSAT') }}</h1>
        {{-- <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{ __('Fuel by passion')}}</p> --}}
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
<section id="snippet-4" class="wrapper bg-light ">
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

  {{-- <section class="wrapper bg-light mb-10">
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
  <!-- /section --> --}}

  <section class="wrapper bg-light">
    <div class="container py-8 py-md-10">
      <div class="row gx-lg-8 gx-xl-1 gy-10 align-items-center">
        <div class="col-lg-4">
          {{-- <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2> --}}
          <h3 class="display-3 mb-5">{{ __('They already trust us')}}</h3>
          {{-- <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p> --}}
        </div>
        <!--/column -->
        <div class="col-lg-8">
          <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
                @foreach ($marques as $marque)
  
                <div class="swiper-slide">
            
                  <div class="swiper-slide px-5 pmg" style="width: auto !important;"><img src="{{asset('/storage/avatars/'.$marque->logo)}}" alt="" /></div>
         
                  <!-- /.social -->
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
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light"  style="background-color: #f1f5fd!important;">
    <div class="container pt-0 pt-md-4 pb-8 text-center">
      <div class="row" style="padding-bottom: 50px; margin-top: 0px">
        
        
        <!--/column -->
      </div>
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
                
                  <label for="object">{{ __('Requesting information for:')}} {{$telecom->libelle}}*</label>
                
                
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
