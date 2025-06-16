@extends('layouts.main')

@section('content')

<section class="wrapper bg-gray">
  <div class="container py-12 py-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-8">
      <div class="col-md-10 col-lg-10">
        <div class="d-flex flex-row">
          <div>
              <nav class="d-inline-block" aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 mt-10" style="padding-top: 40px">
                    <li class="breadcrumb-item"><a href="/">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item "><a href="#">{{ __('Our Solutions') }}</a></li>
                    @if (app()->getLocale() == 'en')
                     
                      <li class="breadcrumb-item active" aria-current="page">{{$wimax->libelle_en}}</li>
                    @else
                     
                      <li class="breadcrumb-item active" aria-current="page">{{$wimax->libelle}}</li>
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
<section id="snippet-4" class="wrapper bg-light wrapper-border" style="margin-bottom: 20px">
    <div class="container pt-15 pt-md-17">
      <div class="row" style="padding-bottom: 50px">
        <div class="col-xxl-6 mx-auto">
            @if (app()->getLocale() == 'en')
            <p style="margin-top: -100px">{!! $wimax->description_en !!}</p>
            @else
            <p style="margin-top: -100px">{!! $wimax->description !!}</p>
            @endif
           
            <!--/div -->
          </div>
          <!--/column -->
        <div class="col-xxl-6 mx-auto">
          <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{$wimax->image}}" alt=""></a></figure>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
  
    
  </section>
  <!-- /section -->

@endsection
