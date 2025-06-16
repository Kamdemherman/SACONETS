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


<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12">
        <div class="col-lg-8">
          <div class="blog single">
            <div class="card">
              <figure class="card-img-top"><img src="{{asset('/storage/imgs/'.$news->image)}}" alt="" /></figure>
              <div class="card-body">
                <div class="classic-view">
                  <article class="post">
                    <div class="post-content mb-5">
                      @if (app()->getLocale() == 'en')
                      <h2 class="h1 mb-4">{{$news->libelle_en}}</h2>
                      <p>{!! $news->description_en !!}</p>
                      @else
                      <h2 class="h1 mb-4">{{$news->libelle}}</h2>
                      <p>{!! $news->description !!}</p>
                      @endif
                    </div>
                    <!-- /.post-content -->
                    
                  </article>
                  <!-- /.post -->
                </div>
                <!-- /.classic-view -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.blog -->
        </div>
        <!-- /column -->
        <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
          <div class="widget">
            <h4 class="widget-title mb-3">{{ __('Search')}}</h4>
            <form class="search-form" method="GET" action="{{route('news.search')}}">
              @csrf
                <div class="form-floating mb-0">
                    <input id="search-form" type="text" class="form-control" id="titre" name="titre" placeholder="{{ __('Search')}}">
                    <label for="titre">{{ __('Search')}}</label>
                </div>
            </form>
            <nav class="nav social mt-10">
              <a href="https://api.whatsapp.com/send?text={{urlencode(url()->current()) }}" target="_blank"><i class="uil uil-whatsapp" style="font-size: 30px"></i></a>
              <a href="http://127.0.0.1:8000/news-details-{{$news->slug}}" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"><i class="uil uil-facebook-f" style="font-size: 30px"></i></a>
              {{-- <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a> --}}

            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">{{ __('Last posts')}}</h4>
            <ul class="image-list">
              @foreach ($autres as $autre)

              <li>
                <figure class="rounded" ><a href="{{route('news.detail',$autre->slug)}}"><img src="{{asset('/storage/imgs/'.$autre->image)}}" alt="" /></a></figure>
                <div class="post-content">
                  @if (app()->getLocale() == 'en')
                    <h6 class="mb-2"> <a class="link-dark" href="{{route('news.detail',$autre->slug)}}">{{$autre->libelle_en}}</a> </h6>
                  @else
                    <h6 class="mb-2"> <a class="link-dark" href="{{route('news.detail',$autre->slug)}}">{{$autre->libelle}}</a> </h6>
                  @endif
                  
                  <ul class="post-meta">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($autre->dates)->format('M d Y')}}</span></li>
                    {{-- <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li> --}}
                  </ul>
                  <!-- /.post-meta -->
                </div>
              </li>
                              
              @endforeach
              
            </ul>
            <!-- /.image-list -->
          </div>
          
          <!-- /.widget -->
        </aside>
        <!-- /column .sidebar -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
