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
                    <li class="breadcrumb-item "><a href="#">{{ __('Our products') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Fire alarms') }}</li>
                    
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
@if (count($produits)==0)
    <h2 style="text-align: center">Page en construction</h2>
@else
    

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="position-relative">
            <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
            <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
            <div class="row gx-md-5 gy-5 text-center">
              @foreach ($produits as $service)
              <div class="col-md-4 col-xl-4">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <img src="{{$service->image}}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                    @if (app()->getLocale() == 'en')
                      <h4><br>{{$service->libelle_en}}</h4>
                      <p class="mb-2">{!!$service->short_en!!}</p>
                    @else
                      <h4><br>{{$service->libelle}}</h4>
                      <p class="mb-2">{!!$service->short!!}</p></p>
                    @endif
                    
                    <a href="/produit_MC/edit/{{$service->id}}" class="more hover link-yellow">{{ __('Read More') }}</a>
                    
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              @endforeach
             
            </div>
            
          </div>
          <nav class="d-flex" aria-label="pagination" style="margin-top: 30px">
            <ul class="pagination">
              

              <li class="page-item">{{$produits->links()}}</li>
              
            </ul>
            <!-- /.pagination -->
          </nav>
          <!-- /nav -->
          <!-- /.position-relative -->
          
        </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  @endif

@endsection
