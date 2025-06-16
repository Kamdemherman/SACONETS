@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')

<section class="wrapper bg-soft-primary" style="background: #08367A">
  <div class="container py-1 py-md-16 text-center">
    <div class="row">
      <div class="col-md-12 col-lg-6 col-xl-5 mx-auto mb-10">
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('We make good experience')}}</h1>
        <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{ __('Fuel by passion')}}</p>
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

  <!-- /section -->
 
  <section class="wrapper bg-light angled upper-end lower-end" style="">
    <div class="container py-14 py-md-1">
      <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
        <div class="col-lg-6 position-relative order-lg-2">
          <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
          <div class="overlap-grid overlap-grid-2">
            <div class="item">
              <figure class="rounded shadow"><img src="{{asset('/storage/imgs/'.$nous->image2)}}" srcset="{{asset('/storage/imgs/'.$nous->image2)}}" alt=""></figure>
            </div>
            <div class="item">
              {{-- <figure class="rounded shadow"><img src="dist/assets/img/photos/about3.jpg" srcset="dist/assets/img/photos/about3@2x.jpg 2x" alt=""></figure> --}}
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          {{-- <img src="dist/assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" /> 
          <h2 class="display-4 mb-3">{{ __('Who Are We?') }}</h2>--}}
          @if (app()->getLocale() == 'en')
          <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">Who</span> Are We</h3>
            <p class="lead fs-lg">{!!$nous->description_en!!}</p>
          @else
            <h3 class="display-3 mb-10 mt-10 px-xl-10" style="color: #F39200"><span style="font-size: 60px; color: #08367A">Qui</span> nous sommes</h3>
            <p class="lead fs-lg">{!!$nous->description!!}</p>

          @endif

          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row mb-5 mt-10">
        <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
          {{-- <img src="dist/assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" /> --}}
          {{-- <h2 class="display-4 mb-4 px-lg-14">Here are 3 working steps to organize our business projects.</h2> --}}
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      @if ($histoire != null)
        
     
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="card me-lg-6">
            <div class="card-body p-6">
              <figure class="rounded shadow"><img src="{{asset('/storage/imgs/'.$histoire->image)}}" srcset="{{asset('/storage/imgs/'.$histoire->image)}}" alt=""></figure>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->

       
        </div>
        <!--/column -->
        <div class="col-lg-6">
          @if (app()->getLocale() == 'en')
            <h2 class="display-6 mb-3">{{$histoire->titre_en}}</h2>
            <p class="lead fs-lg pe-lg-5">{!!$histoire->libelle_en!!}</p>
          @else
            <h2 class="display-6 mb-3">{{$histoire->titre}}</h2>
            <p class="lead fs-lg pe-lg-5">{!!$histoire->libelle!!}</p>
          @endif
         
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      @endif
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light" style="background-color: #f1f5fd!important;">
    <div class="container pb-10 pb-md-1 mb-lg-2 mb-xl-0">
     
      <div class="row gx-lg-1 gx-xl-5 gy-1 ">
        
        <div class="col-lg-5">
          <div class="row">
             <div class="col-lg-12">
              <h3 class="display-4 mb-3 text-center" style="margin-top: 100px">{{ __('Please fill in your information')}}</h3>
             </div>
             <div class="col-lg-12" style="background: #08367A;color: #fff">
              <div class="d-flex flex-row" style="margin-top: 50px">
          
                <div>
                  <div class="row align-items-center">
                    <div class="col-lg-9">
                      <h3 class="display-3 mb-10 mt-30 " style="color: #fff">{{ __('Become a partner and/or investor') }}</h3>
                    </div>
                    <div class="col-lg-3">
                      <hr class="my-8"  style="color: #fff"/>
                    </div>
                  </div>
                  
                </div>
              </div>
    
              <div class="d-flex flex-row" style="margin-top: 0px">
    
                <div>
                  <h5 class="display-6 mb-10 mt-0 " style="color: #fff">{{ __('Why become a partner?') }}</h5>
                </div>
                
              </div>
              <div class="d-flex flex-row mb-10" style="margin-top: 50px">
                
                <div>
                  
                  <p style="text-align: justify">{{ __('Becoming a SACONETS SA partner means choosing a membership offer for services and accessing numerous advantages for your company.')}}</p>
                </div>
              </div>
             </div>
          </div>

          
          
          
        </div>
        <!--/column -->

        <div class="col-lg-7 position-relative mt-10">
          {{-- <h3 class="display-4 mb-3 text-center" style="margin-top: 100px">{{ __('Please fill in your information')}}</h3> --}}

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
          {{-- <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p> --}}
          <form style="margin-top: 0px" method="POST" action="{{route('investisseurs')}}" >
              @csrf

              <div style="background: rgb(226, 224, 224);padding: 15px">

                <div class="form-group row">
                  <label for="raison_sociale" class="control-label col-lg-2 mt-5">{{ __('Enterprise name')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="raison_sociale" type="text" class="form-control" name="raison_sociale" id="raison_sociale" required>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="control-label col-lg-2 mt-5">{{ __('E-mail')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="email" type="email" class="form-control" name="email" id="email" required> 
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="pays" class="control-label col-lg-2 mt-5">{{ __('Country')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="pays" type="text" class="form-control" name="pays" id="pays" required> 
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ville" class="control-label col-lg-2 mt-5">{{ __('City')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="ville" type="text" class="form-control" name="ville" id="ville" required>
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="adresse" class="control-label col-lg-2 mt-5">{{ __('Address')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="adresse" type="text" class="form-control" name="adresse" id="adresse" required>
                    </div>
                  </div>
                </div>
              
                <div class="form-group row">
                  <label for="phone" class="control-label col-lg-2 mt-5">{{ __('Web site')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="phone" type="url" class="form-control" name="phone" id="phone" required>
                    </div>
                  </div>
                </div>
             
                <div class="form-group row">
                  <label for="motivation" class="control-label col-lg-2 mt-5">{{ __('Motivation')}} ({{ __('Optional')}})</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <textarea id="motivation" class="form-control"  style="height: 150px" name="motivation" id="motivation"></textarea>
                    </div>
                  </div>
                </div>
              
                <div class="form-group row">
                  <label for="phone" class="control-label col-lg-2 mt-5">{{ __('ReCaptcha')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                      @if ($errors->has('g-recaptcha-response'))
                          <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>  
                <div class="form-group row">
                  <label for="phone" class="control-label col-lg-2 mt-5"></label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4 mt-5">
                      <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" style="color: #000; text-transform: uppercase;font-size: 20px" value="{{ __('Send request')}}">
                      {{-- <p class="text-muted" style="color: #F39200"><strong>*</strong> {{ __('These fields are required') }}.</p> --}}
                    </div>
                  </div>
                </div>
              
              
              
             
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

  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-4">
          {{-- <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2> --}}
          <h3 class="display-3 mb-5">{{ __('Our team')}}</h3>
          {{-- <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p> --}}
        </div>
        <!--/column -->
        <div class="col-lg-8">
          <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
                @foreach ($equipes as $equipe)
  
                <div class="swiper-slide">
                  <img class="rounded-circle w-20 mx-auto mb-4" src="{{asset('/storage/imgs/'.$equipe->image)}}" srcset="{{asset('/storage/imgs/'.$equipe->image)}}" alt="" />
                  <h4 class="mb-1">{{$equipe->nom}}</h4>
                  
                  @if (app()->getLocale() == 'en')
                    <div class="meta mb-2">{{$equipe->role_en}}</div>
                  @else
                    <div class="meta mb-2">{{$equipe->role}}</div>
                  @endif
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

   <section class="wrapper bg-light" >
    <div class="container pb-10 pb-md-1 mb-lg-2 mb-xl-0">
     
      <div class="row gx-lg-1 gx-xl-5 gy-1">
        
        <div class="col-lg-5"  style="background: #08367A;color: #fff">

          <div class="row">
            <div class="col-lg-12">
              <div class="" style="margin-top: 10px">
          
                <div>
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <h3 class="display-3 mb-10 mt-10 " style="color: #fff">{{ __('Contact Us') }}</h3>
                    </div>
                    <div class="col-lg-6">
                      <hr class="my-8"  style="color: #fff"/>
                    </div>
                  </div>
                  
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
              <div class="d-flex flex-row" style="margin-top: 50px; margin-bottom: 0px">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope" style="color: #fff"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1" style="color: #fff">{{ __('E-mail') }}</h5>
                  <p class="mb-0"><a href="" class="link-body" style="color: #fff">info@saconets.com</a></p>
                  
                </div>
              </div>
            </div>

          </div>
            

          {{-- <div class="d-flex flex-row" style="margin-top: 60px">
            <div>
              <h3 class="display-5 " style="color: #fff">{{ __('Contact Us')}}</h3>
            </div>
            <div>
              
            </div>
          </div> --}}

          
          
        </div>
        <!--/column -->

        <div class="col-lg-7 position-relative">
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

                <div class="form-group row">
                  <label for="name" class="control-label col-lg-2 mt-5">{{ __('Name') }}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="form_name" type="text" name="name" class="form-control"  required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">

                <div class="form-group row">
                  <label for="phone" class="control-label col-lg-2 mt-5">{{ __('Phone') }}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="phone" type="text" name="phone" class="form-control" required>
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="col-md-12">

                <div class="form-group row">
                  <label for="email" class="control-label col-lg-2 mt-5">{{ __('Email') }}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="form_email" type="email" name="email" class="form-control" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /column -->

              <div class="col-md-12">

                <div class="form-group row">
                  <label for="email" class="control-label col-lg-2 mt-5">{{ __('Subject') }}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <input id="form_email" type="text" name="sujet" class="form-control" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /column -->

              <div class="col-md-12">

                <div class="form-group row">
                  <label for="message" class="control-label col-lg-2 mt-5">{{ __('Message') }}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <textarea id="message" name="message" class="form-control"  style="height: 150px" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /column -->

              <div class="col-md-12">

                <div class="form-group row">
                  <label for="phone" class="control-label col-lg-2 mt-5">{{ __('ReCaptcha')}}*</label>
                  <div class="col-lg-10">
                    <div class="form-floating mb-4">
                      <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                      @if ($errors->has('g-recaptcha-response'))
                          <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <!-- /column -->
              </div>

              <div class="form-group row">
                <label for="phone" class="control-label col-lg-2 mt-5"></label>
                <div class="col-lg-10">
                  <div class="form-floating mb-4 mt-5">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" style="color: #000; text-transform: uppercase;font-size: 20px" value="{{ __('Send')}}">
                    {{-- <p class="text-muted" style="color: #F39200"><strong>*</strong> {{ __('These fields are required') }}.</p> --}}
                  </div>
                </div>
              </div>
              
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
    

@endsection
