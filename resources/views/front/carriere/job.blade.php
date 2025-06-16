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
        
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Job applications') }}</h1>
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->  

<section id="snippet-4" class="wrapper bg-light" style="margin-bottom: 0px">
  <div class="container pt-10 pt-md-12">
    <div class="row" style="padding-bottom: 0px">
      <div class="col-xxl-8 mx-auto">
        <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{ __('Job applications') }}</a></h2>

        </div>
        <!--/column -->
      <div class="col-xxl-4 mx-auto " style="">
        
        
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>

  
</section>  
 
<!-- /section -->
<section class="wrapper bg-light mb-10">
    <div class="container py-1 py-md-1">
      <div class="row align-items-center mb-6">
        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
          <h2 class="display-6 mb-0"></h2>
        </div>
        <!--/column -->
        <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
          {{-- <a href="#" class="btn btn-primary rounded-pill mb-0">Explore Positions</a> --}}
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row gy-6">
        @foreach ( $jobs as $job)
        <div class="col-md-6 col-lg-4">
          <a href="{{route('job.detail',$job->slug)}}" class="card shadow-lg lift h-100">
            <div class="card-body p-5 d-flex flex-row">
              <div>
                @if (app()->getLocale() == 'en')
                  @if ($job->id % 2 !== 0)
                    @php
                          
                      echo ' <span class="avatar bg-blue text-white w-11 h-11 fs-20 me-4">'. substr($job->titre_en, 0, 2) .'</span>';
                    @endphp
                  @else
                    @php
                          
                      echo ' <span class="avatar bg-yellow text-white w-11 h-11 fs-20 me-4">'. substr($job->titre_en, 0, 2) .'</span>';
                    @endphp
                  @endif
                @else
                  @if ($job->id % 2 !== 0)
                    @php
                          
                      echo ' <span class="avatar bg-blue text-white w-11 h-11 fs-20 me-4">'. substr($job->titre, 0, 2) .'</span>';
                    @endphp
                  @else
                    @php
                          
                      echo ' <span class="avatar bg-yellow text-white w-11 h-11 fs-20 me-4">'. substr($job->titre, 0, 2) .'</span>';
                    @endphp
                  @endif
                @endif
                
                  
                
                
              </div>
              <div>
                <span class="badge bg-pale-aqua text-aqua rounded py-1 mb-2">{{$job->type}}</span>
                @if (app()->getLocale() == 'en')
                  <h4 class="mb-1">{{$job->titre_en}}</h4>
                @else
                  <h4 class="mb-1">{{$job->titre}}</h4>
                @endif
                
                <p class="mb-0 text-body">{{$job->lieu}}</p>
              </div>
            </div>
          </a>
        </div>
        <!--/column -->
        @endforeach

      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
