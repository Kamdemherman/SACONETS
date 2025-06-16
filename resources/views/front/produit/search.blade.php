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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Products') }} : {{$categorie}}</h1>
        {{-- <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{ __('Fuel by passion')}}</p> --}}
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section --> 

@php
    //$autres=App\Models\SousCategorie::where('cat_id',$categorie->id)->get();
@endphp

{{-- @if (count($autres) > 0)

<section class="wrapper wrapper-border">
    <div class="container py-11" style="padding-top: 2rem!important; padding-bottom: 0rem!important">
      @if (app()->getLocale() == 'en')
        <h2 class="h4 autre">{{ __('Subcategories of:')}} {{$produits[0]->categorie->libelle_en}}</h2>
      @else
        <h2 class="h4 autre">{{ __('Sous-catégories de:')}} {{$produits[0]->categorie->libelle}}</h2>
      @endif
      
      <ul class="list-inline mb-0">
        
        @foreach ($autres as $autre)
          @if (app()->getLocale() == 'en')
            <li class="list-inline-item me-1 mb-2"><a href="{{route('produit.sous.categorie', $autre->slug)}}" class="btn btn-soft-ash btn-sm rounded ">{{$autre->libelle_en}}</a></li>
          @else
            <li class="list-inline-item me-1 mb-2"><a href="{{route('produit.sous.categorie', $autre->slug)}}" class="btn btn-soft-ash btn-sm rounded ">{{$autre->libelle}}</a></li>
          @endif
        @endforeach
        
        
      </ul>
    </div>
    <!-- /.container -->
</section>
    
@endif --}}

<section class="wrapper bg-light">
    <div class="container py-8 py-md-10">
        <div class="position-relative">
            <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
            <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
            <div class="row gx-md-5 gy-5 text-center">
              @foreach ($produits as $item)
              <div class="col-md-4 col-xl-4">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <a href="{{route('produit.details', $item->slug)}}">
                    <img src="{{asset('/storage/imgs/'.$item->image)}}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" style="height: 250px;" alt="" />
                  </a>
                    @if (app()->getLocale() == 'en')
                      <h2 style="color: #F39200">{{$item->libelle_en}}</h2>
                      <p class="mb-2">{{$item->short_en}}</p>
                    @else
                      <h2 style="color: #F39200">{{$item->libelle}}</h2>
                      <p class="mb-2">{!!$item->short!!}</p></p>
                    @endif
                    
                    <a href="{{route('produit.details', $item->slug)}}" class="more hover link-yellow" style="color: #F39200">{{ __('Read More') }}</a>
                    
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              @endforeach
             
            </div>
            
          </div>
          {{$produits->links('pagination')}}
          
          
        </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection
