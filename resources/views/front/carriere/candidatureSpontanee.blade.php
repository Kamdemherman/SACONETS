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
      <div class="col-md-12 col-lg-8 col-xl-7 mx-auto mb-10">
        
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Spontaneous application') }}</h1>
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
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
        <h2 class="post-title display-5 mt-10px mb-10" style="margin-top: -100px"><a href="" class="link-dark">{{ __('Spontaneous application') }}</a></h2>
        
        <form style="margin-top: 0px" method="POST" action="{{route('candidature-spontanee.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-4">
                <input id="name" type="text" class="form-control" name="name" id="name" required>
                <label for="name">{{ __('Full name')}}*</label>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-floating mb-4">
                <input id="email" type="email" class="form-control" name="email" id="email" required> 
                <label for="email">{{ __('E-mail')}}*</label>
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
                <textarea id="objet" class="form-control"  style="height: 150px" name="objet" id="objet" required></textarea>
                <label for="objet">{{ __('Purpose')}}*</label>
            </div>
            <div class="form-floating mb-4">
                <input id="cv" type="file" class="form-control" name="cv" id="cv" required>
                <label for="cv">{{ __('CV')}}*</label>
            </div>
            <div class="form-floating mb-4">
                <input id="lettre" type="file" class="form-control" name="lettre" id="lettre" required>
                <label for="lettre">{{ __('Motivation letter')}}*</label>
            </div>

            <div class="form-floating mb-4">
                <strong>ReCaptcha:</strong>
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
            </div>

            <div class="form-floating mb-4">
                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('Apply Now')}}">
                <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
            </div>
        </form>
         
      </div>
        <!--/column -->
        
      <div class="col-xxl-6 mx-auto">
        <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{asset('dist/assets/img/IMG_0942.jpg')}}" alt=""></a></figure>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>

  
</section>
<!-- /section -->

@endsection
