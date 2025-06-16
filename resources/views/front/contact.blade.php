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
        
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Contact')}}</h1>
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section --> 

<section class="wrapper bg-light" style="margin-top: 100px">
  <div class="container pb-14 pb-md-16">
    
    <div class="row">
      <div class="col-xl-10 mx-auto">
        <div class="row gy-10 gx-lg-8 gx-xl-12">
          <div class="col-lg-6">
            <figure class="card-img-top"><img src="{{asset('dist/assets/img/IMG_0987.jpg')}}" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <figure class="card-img-top"><img src="{{asset('dist/assets/img/IMG_0960.jpg')}}" alt="" /></figure>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light" >
  <div class="container pb-14 pb-md-16">
    
    <div class="row">
      <div class="col-xl-10 mx-auto">
        <div class="row gy-10 gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
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
          <!--/column -->
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">{{ __('Address') }}</h5>
                <address>Yaoundé, Hippodrome rue Frédéric FOE</address>
                <address>Douala, Derrière ancien Cinema le Wouri </address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">{{ __('Phone') }}</h5>
                <p>(+237) 242 06 99 78 - 696 65 83 78 <br />(+237) 242 77 81 96</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">{{ __('E-mail') }}</h5>
                <p class="mb-0"><a href="" class="link-body">info@saconets.com</a></p>
               
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


 

@endsection
