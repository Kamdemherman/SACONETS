@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')


<section class="wrapper bg-soft-primary" style="background: #08367A">
  <div class="container py-1 py-md-16 text-center">
    <div class="row">
      <div class="col-md-12 col-lg-6 col-xl-5 mx-auto mb-10">
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Our Pertners')}}</h1>
        {{-- <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{ __('Fuel by passion')}}</p> --}}
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-1 py-md-10">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($videos as $video)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$video->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <h3 class="display-4 mb-3">{{ __('Videosurveillance')}}</h3>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
 
  <section class="wrapper bg-light">
    <div class="container py-10 py-md-12">
        <p class="lead fs-lg mb-10"></p>
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">  
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($telephones as $telephone)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$telephone->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
        
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
        
          <h3 class="display-4 mb-3">{{ __('Mobile satellite telephony')}}</h3>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-12">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($securites as $securite)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$securite->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <h3 class="display-4 mb-3">{{ __('Security solutions')}}</h3>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-10 py-md-12">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($reseaus as $reseau)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$reseau->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <h3 class="display-4 mb-3">{{ __('Computer network equipment')}}</h3>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-12">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($interconnections as $interconnection)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$interconnection->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <h3 class="display-4 mb-3">{{ __('Point to point interconnection solution')}}</h3>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-12">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($monetiques as $monetique)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$monetique->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <h3 class="display-4 mb-3">{{ __('Monetic Solution')}}</h3>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-10 py-md-12">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-7 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($supervisions as $supervision)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center partenaire">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$supervision->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <h3 class="display-4 mb-3">{{ __('Monitoring solution')}}</h3>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
