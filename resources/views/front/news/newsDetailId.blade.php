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
      <div class="col-md-12 col-lg-8 col-xl-7 mx-auto mb-10">
        @if (app()->getLocale() == 'en')
          <h1 class="display-1 mb-3" style="color: #fff">{{$news->libelle_en}}</h1>
        @else
          <h1 class="display-1 mb-3" style="color: #fff">{{$news->libelle}}</h1>
        @endif
        
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->  


<section id="snippet-4" class="wrapper bg-light wrapper-border" style="margin-bottom: 0px">
    <div class="container pt-10 pt-md-12">

      <div class="row" style="padding-bottom: 50px">
        <div class="col-xxl-6 mx-auto">
            @if (app()->getLocale() == 'en')
            <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{$news->libelle_en}}</a></h2>
            <p style="margin-top: 0px">{!! $news->description_en !!}</p>
            @else
            <h2 class="post-title display-5" style="margin-top: 0px"><a href="" class="link-dark">{{$news->libelle}}</a></h2>
            <p style="margin-top: 0px">{!! $news->description !!}</p>
            @endif
           
            <!--/div -->
          </div>
          <!--/column -->
        <div class="col-xxl-6 mx-auto">
          <figure style="margin-top: 0px"><a href="" target="_blank"><img class="img-fluid" src="{{asset('/storage/imgs/'.$news->image)}}" alt=""></a></figure>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
  
    
  </section>
  <!-- /section -->

@endsection
