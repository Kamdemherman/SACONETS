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
                  <ol class="breadcrumb mb-0 mt-5 ">
                    <li class="breadcrumb-item"><a href="/">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item "><a href="#">{{ __('About Us') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Become a partner and/or investor') }}</li>
                    
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
<section id="snippet-4" class="wrapper bg-light wrapper-border" style="margin-bottom: 20px">
  <div class="container pt-15 pt-md-17">
    <div class="row" style="padding-bottom: 50px">
      
      <div class="col-xxl-6 mx-auto">
        <h2 class="post-title display-5 mt-10px mb-10" style="margin-top: -100px"><a href="" class="link-dark">{{ __('Become a partner and/or investor') }}</a></h2>
        
        <form style="margin-top: 0px" method="POST" action="{{route('investisseurs')}}" >
          @csrf
          <div class="form-floating mb-4">
              <input id="raison_sociale" type="text" class="form-control" name="raison_sociale" id="raison_sociale" required>
              <label for="raison_sociale">{{ __('Enterprise name')}}*</label>
          </div>
          <div class="form-floating mb-4">
              <input id="email" type="email" class="form-control" name="email" id="email" required> 
              <label for="email">{{ __('E-mail')}}*</label>
          </div>
          <div class="form-floating mb-4">
              <input id="pays" type="text" class="form-control" name="pays" id="pays" required>
              <label for="pays">{{ __('Country')}}*</label>
          </div>
          <div class="form-floating mb-4">
              <input id="ville" type="text" class="form-control" name="ville" id="ville" required>
              <label for="ville">{{ __('City')}}*</label>
          </div>
          <div class="form-floating mb-4">
              <input id="adresse" type="text" class="form-control" name="adresse" id="adresse" required>
              <label for="adresse">{{ __('Address')}}*</label>
          </div>
          <div class="form-floating mb-4">
              <input id="phone" type="url" class="form-control" name="phone" id="phone" required>
              <label for="phone">{{ __('Web site')}}*</label>
          </div>
          <div class="form-floating mb-4">
              <textarea id="motivation" class="form-control"  style="height: 150px" name="motivation" id="motivation"></textarea>
              <label for="motivation">{{ __('Motivation')}} ({{ __('Optional')}})</label>
          </div>
          <div class="form-floating mb-4">
            <strong>ReCaptcha:</strong>
            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
            @if ($errors->has('g-recaptcha-response'))
                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
            @endif
        </div>
         
          <div class="form-floating mb-4">
              <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('Send request')}}">
              <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
          </div>
      </form>
         
      </div>
        <!--/column -->
        
      <div class="col-xxl-6 mx-auto">
        <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{asset('dist/assets/img/two-person.jpg')}}" alt=""></a></figure>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>

  
</section>
<!-- /section -->

@endsection
