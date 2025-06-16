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
        {{-- @if (app()->getLocale() == 'en')
          <h1 class="display-1 mb-3" style="color: #fff">{{$news->libelle_en}}</h1>titre
        @else
          <h1 class="display-1 mb-3" style="color: #fff">{{$news->libelle}}</h1>
        @endif --}}
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('News search')}}: {{$titre}}</h1>
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->  
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="blog grid grid-view" style="margin-top: 20px">
            <div class="row isotope gx-md-8 gy-8 mb-8">
               @foreach ($news as $item)
              <article class="item post col-md-6">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{route('news.detail',$item->slug)}}"> <img src="{{asset('/storage/imgs/'.$item->image)}}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">{{ __('Read More') }}</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        {{-- <a href="#" class="hover" rel="category">Coding</a> --}}
                      </div>
                      <!-- /.post-category -->
                      @if (app()->getLocale() == 'en')
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('news.detail',$item->slug)}}">{{$item->libelle_en}}</a></h2>
                      @else
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('news.detail',$item->slug)}}">{{$item->libelle}}</a></h2> 
                      @endif
                      
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                        @if (app()->getLocale() == 'en')
                        <p>{!!$item->short_en!!}</p>
                        @else
                        <p>{!!$item->short!!}</p>
                        @endif
                      
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($item->dates)->format('M d Y')}}</span></li>
                      {{-- <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li> --}}
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->                   
              @endforeach 
             
            </div>
            <!-- /.row -->
          </div>
          <!-- /.blog -->
          {{$news->links('pagination')}}
          <!-- /nav -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
