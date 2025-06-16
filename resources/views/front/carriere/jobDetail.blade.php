@extends('layouts.main')

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
          <h1 class="display-1 mb-3" style="color: #fff">{{$job->titre_en}}</h1>
          
        @else
          <h1 class="display-1 mb-3" style="color: #fff">{{$job->titre}}</h1>
          
        @endif
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->  

<section id="snippet-4" class="wrapper bg-light wrapper-border" style="margin-bottom: 20px">
    <div class="container pt-15 pt-md-17">
        
      
      <div class="row" style="padding-bottom: 50px">
        <div class="col-xxl-6 mx-auto">
          @if (app()->getLocale() == 'en')
            <h2 class="post-title display-5 mt-10px mb-10" style="margin-top: -100px"><a href="" class="link-dark">{{$job->titre_en}}</a></h2>
          @else
          <h2 class="post-title display-5 mt-10px mb-10" style="margin-top: -100px"><a href="" class="link-dark">{{$job->titre}}</a></h2>
          @endif
            @if (app()->getLocale() == 'en')
            <p style="margin-top: 0px">{!! $job->description_en !!}</p>
            @else
            <p style="margin-top: 0px">{!! $job->description !!}</p>
            @endif
           
            <!--/div -->
            <a href="{{route('job.application.form',$job->slug)}}" class="btn btn-primary rounded-pill">{{ __('Apply Now')}}</a>
        </div>
          <!--/column -->
          
        <div class="col-xxl-6 mx-auto">
          <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{$job->image}}" alt=""></a></figure>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

    </div>
  
    
  </section>
  <!-- /section -->

@endsection
