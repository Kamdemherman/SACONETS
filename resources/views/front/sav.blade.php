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
        
        @if (app()->getLocale() == 'en')
          <h1 class="display-1 mb-3" style="color: #fff">{{$sav->titre_en}}</h1>
          
        @else
          <h1 class="display-1 mb-3" style="color: #fff">{{$sav->titre}}</h1>
          
        @endif
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->   
    

  <section id="snippet-4" class="wrapper bg-light" style="margin-bottom: 20px">
    <div class="container pt-10 pt-md-12">
      <div class="row" style="padding-bottom: 50px">
        <div class="col-xxl-8 mx-auto">
          @if (app()->getLocale() == 'en')
          
            <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{$sav->titre_en}}</a></h2>
          @else

            <h2 class="post-title display-5 " style="margin-top: 0px"><a href="" class="link-dark">{{$sav->titre}}</a></h2>
          @endif
            @if (app()->getLocale() == 'en')
            <p style="margin-top: 0px">{!! $sav->libelle_en!!}</p>
            @else
            <p style="margin-top: 0px">{!! $sav->libelle !!}</p>
            @endif
            
            <!--/div -->
          </div>
          <!--/column -->
        <div class="col-xxl-4 mx-auto sav" style="background: #08367A;color: #fff">
          <div class="d-flex flex-row "style="margin-top: 60px">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume" style="color: #fff"></i> </div>
            </div>
            <div>
              <h5 class="mb-1" style="color: #fff">{{ __('Phone') }}</h5>
              <p>(+237) 242 778 196, 696 658 378 <br />(+237) 242 069 978</p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope" style="color: #fff"></i> </div>
            </div>
            <div>
              <h5 class="mb-1" style="color: #fff">{{ __('E-mail') }}</h5>
              <p class="mb-0"><a href="" class="link-body" style="color: #fff">supportplus@saconets.com</a></p>
              
            </div>
          </div>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
  
    
  </section>  
 
<!-- /section -->
<section id="snippet-4" class="wrapper bg-light" style="margin-bottom: 20px">
  <div class="container pt-1 pt-md-1">
    <div class="row" style="padding-bottom: 50px">
      <div class="col-xxl-5 mx-auto">
        <div class="row align-items-center">
          <div class="col-xxl-6 mx-auto">
            <div class="d-flex flex-row" style="border-right: 3px solid #08367A;padding: 15px 20px 15px 0px;">
              <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="{{asset('dist/assets/img/sav1.jpg')}}" srcset="{{asset('dist/assets/img/sav1.jpg')}}" alt="" /></figure>
                  
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
            </div>
          </div>
          <div class="col-xxl-6 mx-auto ">
              <p class="display-6">{{ __('Preventive maintenance')}}</p>
          </div>
        </div>
        
        <div class="row align-items-center mt-3">
          <div class="col-xxl-6 mx-auto">
            <div class="d-flex flex-row" style="border-right: 3px solid #08367A;padding: 15px 20px 15px 0px;">
              <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="{{asset('dist/assets/img/sav2.jpg')}}" srcset="{{asset('dist/assets/img/sav2.jpg')}}" alt="" /></figure>
                  
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
            </div>
          </div>
          <div class="col-xxl-6 mx-auto ">
              <p class="display-6">{{ __('Curative maintenance')}}</p>
          </div>
        </div>
        <div class="row align-items-center mt-3">
          <div class="col-xxl-6 mx-auto">
            <div class="d-flex flex-row" style="border-right: 3px solid #08367A;padding: 15px 20px 15px 0px;">
              <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="{{asset('dist/assets/img/sav3.jpg')}}" srcset="{{asset('dist/assets/img/sav3.jpg')}}" alt="" /></figure>
                  
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
            </div>
          </div>
          <div class="col-xxl-6 mx-auto ">
              <p class="display-6">{{ __('24/7 Technical Support')}}</p>
          </div>
        </div>  
          <!--/div -->
      </div>
        <!--/column -->
      <div class="col-xxl-7 mx-auto sav" style="">
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
              <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" style="float: right" value="{{ __('Send message')}}">
              <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </form>
        <!-- /form -->
        
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>

  
</section>  
    {{-- <h2 style="text-align: center">Page en construction</h2> --}}
    <section class="wrapper bg-light">
      <div class="container py-1 py-md-1">
        <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{ __('Our technicians') }}</a></h2>
        
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
          @foreach ($equipes as $equipe)

          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="{{asset('/storage/imgs/'.$equipe->image)}}" srcset="{{asset('/storage/imgs/'.$equipe->image)}}" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">{{$sav->nom}}</h4>
                  
                  @if (app()->getLocale() == 'en')
                  <p class="mb-0">{{$sav->role_en}}</p>
                  @else
                  <p class="mb-0">{{$sav->role}}</p>
                  @endif
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          @endforeach

        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    <section id="snippet-4" class="wrapper bg-light " style="margin-bottom: 0px">
      <div class="container pt-0 pt-md-10">
        <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{ __('Frequently Asked Questions') }}</a></h2>
        
          <div class="accordion accordion-wrapper" id="accordionExample">
              @foreach ($faqs as $faq)
              <div class="card accordion-item">
                  <div class="card-header" id="headingTwo">
                    @if (app()->getLocale() == 'en')
                      <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$faq->id}}" aria-expanded="false" aria-controls="collapseTwo{{$faq->id}}"> {{$faq->question_en}} </button>
                    @else
                      <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$faq->id}}" aria-expanded="false" aria-controls="collapseTwo{{$faq->id}}"> {{$faq->question}} </button>
                    @endif
                    
                  </div>
                  <!--/.card-header -->
                  <div id="collapseTwo{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      @if (app()->getLocale() == 'en')
                        <p>{{$faq->reponse_en}}</p>
                      @else
                        <p>{{$faq->reponse}}</p>
                      @endif
                      
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
              <!--/.accordion-item -->
              @endforeach
          
          </div>
            <!--/.accordion -->
      </div>
    
      
    </section>
    <!-- /section -->

    {{-- <p style="text-align:justify"><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif">Thanks to a team of engineers qualified in various fields, SACONETS SA ensures a quality after-sales service on all its products and services.&nbsp;<br />
      We provide : </span></span></span></p>
      
      <table align="center" border="0" cellpadding="1" cellspacing="1" style="width:100%">
        <tbody>
          <tr>
            <td><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif">Preventive maintenance</span></span></span></td>
            <td><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif">Curative maintenance</span></span></span></td>
            <td><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif">24/7 Technical Support</span></span></span></td>
          </tr>
          <tr>
            <td><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="" src="http://localhost:8000/storage/imgs/1663922558_sav1.jpg" style="height:120px; width:202px" /></span></span></span></td>
            <td><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="" src="http://localhost:8000/storage/imgs/1663922595_sav2.jpg" style="height:120px; width:195px" /></span></span></span></td>
            <td><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif"><img alt="" src="http://localhost:8000/storage/imgs/1663922628_sav3.jpg" style="height:120px; width:117px" /></span></span></span></td>
          </tr>
        </tbody>
      </table>
      
      <p style="text-align:justify">&nbsp;</p>
      
      <p style="text-align:justify"><span style="color:#000000"><span style="font-size:18px"><span style="font-family:Arial,Helvetica,sans-serif">Contact our technical support on one of the numbers below or write to us.</span></span></span></p> --}}
      
    

@endsection