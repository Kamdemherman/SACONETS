<section class="wrapper bg-light" >
    <div class="container pb-1 pb-md-1 mb-lg-2 mb-xl-0">
     
      <div class="row gx-lg-1 gx-xl-5 gy-1 align-items-center">
        
        <div class="col-lg-4"  style="background: #08367A;color: #fff">

          {{-- <div class="d-flex flex-row" style="margin-top: 60px">
            <div>
              <h3 class="display-5 " style="color: #fff">{{ __('Contact Us')}}</h3>
            </div>
            <div>
              
            </div>
          </div> --}}
          <div class="d-flex flex-row" style="margin-top: 10px">
          
            <div>
              <h3 class="display-3 mb-10 mt-10 " style="color: #fff">{{ __('Contact Us') }}</h3>
            </div>
          </div>

          <div class="d-flex flex-row" style="margin-top: 30px">

            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt" style="color: #fff"></i> </div>
            </div>
            <div>
              <h5 class="mb-1" style="color: #fff">{{ __('Address') }}</h5>
              <address>Yaoundé, Hippodrome rue Frédéric FOE</address>
              <address>Douala, Derrière ancien Cinema le Wouri </address>
            </div>
          </div>
          <div class="d-flex flex-row " style="margin-top: 50px">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume" style="color: #fff"></i> </div>
            </div>
            <div>
              <h5 class="mb-1" style="color: #fff">{{ __('Phone') }}</h5>
              <p>(+237) 242 778 196, 696 658 378 <br />(+237) 242 069 978</p>
            </div>
          </div>
          <div class="d-flex flex-row" style="margin-top: 50px; margin-bottom: 60px">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope" style="color: #fff"></i> </div>
            </div>
            <div>
              <h5 class="mb-1" style="color: #fff">{{ __('E-mail') }}</h5>
              <p class="mb-0"><a href="" class="link-body" style="color: #fff">info@saconets.com</a></p>
              
            </div>
          </div>
          
        </div>
        <!--/column -->

        <div class="col-lg-8 position-relative">
          <h3 class="display-4 mb-3 text-center" style="margin-top: 100px">{{ __('Please fill in your information')}}</h3>
        
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
          {{-- <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p> --}}
          <form class="" method="post" action="{{route('contacts')}}">
            @csrf
            
            <div class="row gx-4">
              <div style="background: rgb(226, 224, 224);padding: 15px">
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="{{ __('Your name') }}" required>
                  <label for="form_name"> {{ __('Name') }}*</label>
                  <div class="valid-feedback"> Looks good! </div>
                  <div class="invalid-feedback"> Please enter your first name. </div>
                </div>
              </div>
              <!-- /column -->
              {{-- <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="phone" type="text" name="phone" class="form-control" placeholder="{{ __('Your phone') }}" required>
                  <label for="phone"> {{ __('Phone') }}*</label>
                  <div class="valid-feedback"> Looks good! </div>
                  <div class="invalid-feedback"> Please enter your last name. </div>
                </div>
              </div> --}}
              <!-- /column -->
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="{{ __('Your Address') }}" required>
                  <label for="form_email"> {{ __('Email') }}*</label>
                  <div class="valid-feedback"> Looks good! </div>
                  <div class="invalid-feedback"> Please provide a valid email address. </div>
                </div>
              </div>
              <!-- /column -->
              {{-- <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_email" type="text" name="sujet" class="form-control" placeholder="{{ __('Your subject') }}" required>
                  <label for="form_email"> {{ __('Subject') }}*</label>
                  <div class="valid-feedback"> Looks good! </div>
                  <div class="invalid-feedback"> Please provide a valid email address. </div>
                </div>
              </div> --}}
              <!-- /column -->
              <div class="col-12">
                <div class="form-floating mb-4">
                  <textarea id="form_message" name="message" class="form-control" placeholder="{{ __('Your message') }}" style="height: 150px" required></textarea>
                  <label for="form_message"> {{ __('Message') }}*</label>
                  <div class="valid-feedback"> Looks good! </div>
                  <div class="invalid-feedback"> Please enter your messsage. </div>
                </div>
              </div>
              {{-- <div class="form-floating mb-4">
                <strong>ReCaptcha:</strong>
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
              </div> --}}
              <!-- /column -->
              </div>
              <div class="col-12 text-left mt-10">
                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" style="color: #000; text-transform: uppercase;font-size: 20px" value="{{ __('Send')}}">
                {{-- <p class="text-muted"><strong style="color: #000; float: left; margin-bottom: 10px">* {{ __('These fields are required') }}.</strong> </p> --}}
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </form>
          <!-- /form -->
            
        </div>
          <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-soft-primary" style="background: #08367A">
    <div class="container py-8 py-md-12 text-center">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-5 mx-auto mb-10">
          <h1 class="display-1 mb-3" style="color: #fff">Just sit and relax.</h1>
          <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">profitez de notre service aprs vente</p>
          <a href="#" class="btn btn-primary" style="width: 70%; font-size: 20px; text-transform: uppercase; margin: 10px">Request a quote</a>

        </div>
        
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  
  <section class="wrapper bg-light">
    <div class="container py-14 pt-md-16 pb-md-9">
      <figure class="rounded"><img src="{{asset('/storage/imgs/'.$nous->image)}}" srcset="{{asset('/storage/imgs/'.$nous->image)}}" alt="" /></figure>
      <div class="row">
        <div class="col-xl-10 mx-auto">
          
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->