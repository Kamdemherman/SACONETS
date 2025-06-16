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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Shop') }}</h1>
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
  <div class="container py-1 py-md-2">
    <div class="row gx-lg-8 gx-xl-12 gy-8 align-items-center">
      <div class="col-md-6 col-lg-8 position-relative">
        <div class="row">
          <div class="col-md-6 col-lg-12 mb-5" style="background-color: rgba(var(--bs-gray-rgb),var(--bs-bg-opacity))!important;">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="rounded mt-md-10 mt-20 position-relative" style="margin-top: 20px">
                    <div style="margin-left: 10px">
                      
                      @if (app()->getLocale() == 'en')
                      <h1 class="display-4 mb-3 mt-0" style="color: #08367A">{{ __('New arrival')}}</h1>
                      
                      <p style="">{{$soldes[0]->produit->categorie->libelle_en}}</p>
                      <h2 class="display-4 mb-3 mt-10" style="color: #08367A">{{$soldes[0]->produit->titre_en}}</h2>
                      @else
                      <h2 class="display-4 mb-3 mt-0" style="color: #08367A">{{ __('New arrival')}}</h2>
                      
                      <p style="">{{$soldes[0]->produit->categorie->libelle}}</p>
                      <h1 class="display-4 mb-3 mt-10" style="color: #08367A">{{$soldes[0]->produit->titre}}</h1>
                      @endif
                    </div>  
                    
                    <div class="card text-center mb-15 mt-0" data-cue="fadeIn" data-delay="600" style="background: #F39200">
                        <div class="card-body py-11 counter-wrapper" style="padding-top: 1.1rem!important; padding-bottom: 1rem!important;padding-left: 0rem!important;">
                            <h4 class="counter text-nowrap" style="color: #FFF">{{getPrix($soldes[0]->produit->prix)}}</h4>
                           
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                
              </div>
              <!--/column -->
              <div class="col-md-6">
                <div class="row gx-md-5 gy-1">
                  <div class="col-md-12 order-md-2">
                    <figure class="rounded mt-md-10 position-relative mb-5"  data-cue="fadeIn" data-delay="300"><img src="{{asset('/storage/imgs/'.$soldes[0]->produit->image)}}" srcset="{{asset('/storage/imgs/'.$soldes[0]->produit->image)}}" alt="" style="margin-top: 10px;"></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-10">
                    
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>

          <div class="col-md-6 col-lg-12">
            <div class="row">
              <div class="col-md-6 col-lg-4 bg-gray" style="margin-right: 0px">
                <div class="d-flex flex-row">
                  <div>
                    <img src="{{asset('dist/assets/img/icons/solid/shipment.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1">{{ __('100% Payment Secure')}}</h4>
                    <p class="mb-0">{{ __('Your payment are safe with us.')}}</p>
                  </div>
                </div>
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-4 bg-gray" style="margin-right: 0px">
                <div class="d-flex flex-row">
                  <div>
                    <img src="{{asset('dist/assets/img/icons/solid/push-cart.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1">{{ __('30 Days Return')}}</h4>
                    <p class="mb-0">{{ __('You have 30 days to return the products')}}</p></p>
                  </div>
                </div>
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-4 bg-gray">
                <div class="d-flex flex-row">
                  <div>
                    <img src="{{asset('dist/assets/img/icons/solid/verify.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
                  </div>
                  <div>
                    <h4 class="mb-1">Support 24/7</h4>
                    <p class="mb-0">{{ __('Contact us 24 hours a day')}}</p>
                  </div>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
        </div>
        
      </div>
      <!--/column -->
      <div class="col-md-6 col-lg-4">
        <div class="row">
          @foreach ($soldes as $solde)
              
          @if ($solde->id == 1)
            <div class="project item col-md-6 col-xl-12" style="background: #F39200">
              <div class="post-header text-center mt-5">
                
                <center>
                  @if (app()->getLocale() == 'en')
                      <h2 class="post-title h3 fs-22"><a href="{{route('shop.details',$solde->produit->slug)}}" class="link-dark">{{$solde->produit->titre_en}}</a></h2>
                  @else
                      <h2 class="post-title h3 fs-22"><a href="{{route('shop.details',$solde->produit->slug)}}" class="link-dark">{{$solde->produit->titre}}</a></h2>
                  @endif
                </center>
                
              </div>
              <center>
                <figure class="rounded mb-6" style="width: 50%;max-width: 100%;height: 180!important;">
                  <img src="{{asset('/storage/imgs/'.$solde->produit->image)}}" srcset="{{asset('/storage/imgs/'.$solde->produit->image)}}" alt="" style="height: 200px" />
    
                </figure>
              </center>
              <div class="post-header text-center mb-10">
                
                <center>
                  
                      <a class="price mb-10" href="{{route('shop.details',$solde->produit->slug)}}"> <ins><span class="amount" style="background: #08367A; color: #FFF; padding: 10px;text-transform: uppercase">{{ __('Buy')}}</span></ins> </a>
                </center>
                
              </div>
              <!-- /.post-header -->
            </div>
          @else
            <div class="project item col-md-6 col-xl-12 mt-3" style="background: #08367A">
              <div class="post-header text-center mt-5">
                
                <center>
                  @if (app()->getLocale() == 'en')
                      <h2 class="post-title h3 fs-22"><a href="{{route('shop.details',$solde->produit->slug)}}" class="link-dark" style="color: #F39200">{{$solde->produit->titre_en}}</a></h2>
                  @else
                      <h2 class="post-title h3 fs-22"><a href="{{route('shop.details',$solde->produit->slug)}}" class="link-dark" style="color: #F39200">{{$solde->produit->titre}}</a></h2>
                  @endif
                </center>
                
              </div>
              <center>
                <figure class="rounded mb-6" style="width: 50%;max-width: 100%;height: 180!important;">
                  <img src="{{asset('/storage/imgs/'.$solde->produit->image)}}" srcset="{{asset('/storage/imgs/'.$solde->produit->image)}}" alt="" style="height: 200px" />
    
                </figure>
              </center>
              <div class="post-header text-center mb-10">
                
                <center>
                  
                      <a class="price" href="{{route('shop.details',$solde->produit->slug)}}"> <ins><span class="amount" style="background: #08367A; color: #FFF; padding: 10px;text-transform: uppercase">{{ __('Buy')}}</span></ins> </a>
                </center>
                
              </div>
              <!-- /.post-header -->
            </div>
          @endif
          
          @endforeach
          
          
      </div>
      </div>
      <!--/column -->
      
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->  


{{-- <section class="wrapper bg-gray">
  <div class="container py-16 py-md-5">
    
  </div>
  <!-- /.container -->
</section>
<!-- /section -->   --}}
 
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16 pt-12">
      @if (request()->input())
            @if (app()->getLocale() == 'en')
              <h1 style="text-align: center">{{$shops->total()}} search result(s)"{{request()->title}}"</h1>
            @else
              <h1 style="text-align: center">{{$shops->total()}} résultat(s) pour la recherche "{{request()->title}}"</h1>
            @endif
        
      @endif
      @if (count($errors) > 0)
      <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
          
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session('success'))
      <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
        <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('success')}}</a>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="row gy-10">
        <div class="col-lg-9 order-lg-2">
          <div class="row align-items-center mb-10 position-relative zindex-1">
            <div class="col-md-4 col-xl-4 pe-xl-20">
              {{-- <h2 class="display-6 mb-1">New Arrivals</h2>
              <p class="mb-0 text-muted">Showing 1–9 of 30 results</p> --}}
            </div>
            <!--/column -->
            <div class="col-md-8 col-xl-8 ms-md-auto text-md-end mt-5 mt-md-0">
              <div class="form-select-wrapper">
              {{-- <form action="{{route('shop.search')}}">
                @csrf
                <div class="form-floating input-group">
                    <input type="text" class="form-control" value="{{request()->title ?? ''}}" placeholder="{{ __('Enter title') }}" id="title" name="title">
                    <label for="seo-check">{{ __('Enter title') }}</label>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>{{ __('Search') }}</button>
                </div>
              </form>   --}}
              </div>
              <!--/.form-select-wrapper -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="grid grid-view projects-masonry shop mb-13">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
              @foreach ($shops as $shop)
 
              <div class="project item col-md-6 col-xl-4">
                <figure class="rounded mb-6">
                  <img src="{{asset('/storage/imgs/'.$shop->image)}}" srcset="{{asset('/storage/imgs/'.$shop->image)}}" alt="" />
                  <a class="item-like" href="/like/{{$shop->id}}" data-bs-toggle="white-tooltip" title="Add to wishlist"><i class="uil uil-heart"></i></a>
                  <a class="item-view" href="{{route('shop.details',$shop->slug)}}" data-bs-toggle="white-tooltip" title="Quick view"><i class="uil uil-eye"></i></a>
                  @if ($shop->stock > 0)
                  <form action="{{route('add.cart')}}" method="POST">
                    @csrf
                    <input type="hidden" id="produit_id" name="produit_id" value="{{$shop->id}}" />
                    {{-- @if (app()->getLocale() == 'en')
                      <input type="hidden" id="titre" name="titre" value="{{$shop->titre_en}}" />
                    @else
                      <input type="hidden" id="titre" name="titre" value="{{$shop->titre}}" />
                    @endif
                    <input type="hidden" id="prix" name="prix" value="{{$shop->prix}}" /> --}}
                    <button class="item-cart" type="submit"><i class="uil uil-shopping-bag"></i> Add to Cart</button>
                  </form>
                  
                  <span class="badge bg-purple rounded-pill">Disponible</span>
                    
                  @else
                    <span class="badge bg-red  rounded-pill">Indisponible</span>
                    {{-- <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Indisponible</span></span> --}}
                  @endif
                  
                </figure>
                <div class="post-header align-items-center">
                  <center>
                    @if (app()->getLocale() == 'en')
                      <h2 class="post-title h3 fs-22"><a href="{{route('shop.details',$shop->slug)}}" class="link-dark">{{$shop->titre_en}}</a></h2>
                    @else
                        <h2 class="post-title h3 fs-22"><a href="{{route('shop.details',$shop->slug)}}" class="link-dark">{{$shop->titre}}</a></h2>
                    @endif
                    
                  </center>

                  <center>
                    <div class="align-items-center">
                      @if (app()->getLocale() == 'en')
                          <div class="post-category text-ash mb-0">{{$shop->categorie->libelle_en}}</div>
                      @else
                          <div class="post-category text-ash mb-0">{{$shop->categorie->libelle}}</div>
                      @endif
                      <p class="price mt-5"> <ins><span class="amount" style="background: #F39200; color: #FFF; padding: 8px;font-weight: bold">{{getPrix($shop->prix)}}</span></ins> </p>
                    </div>
                  </center>
                    
                </div>
                <!-- /.post-header -->
              </div>
              @endforeach
              <!-- /.item -->

            </div>
            <!-- /.row -->
          </div>
          <!-- /.grid -->
          <nav class="d-flex" aria-label="pagination">
            <ul class="pagination">
              {{-- <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                </a>
              </li> --}}
              <li class="page-item ">{{$shops->links()}}</li>
              
              {{-- <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                </a>
              </li> --}}
            </ul>
            <!-- /.pagination -->
          </nav>
          <!-- /nav -->
        </div>
        <!-- /column -->
        <aside class="col-lg-3 sidebar">
          <div class="row">
              <div class="col-lg-12 text-center" style="background: #F39200; color: #fff">
                <h2 class="widget-title mb-3 mt-5" style="color: #fff">{{ __('Categories')}}</h2>
              </div>
              <div class="col-lg-12">
                <div class="widget mt-1" style="margin-left: 10px">
            
                  <ul class="ps-0">
                    @foreach ($categories as $categorie)
                    <li class="mb-1">
                      @if (app()->getLocale() == 'en')
                        <a href="/shop/categorie/{{$categorie->id}}" class="align-items-center rounded link-body" > {{$categorie->libelle_en}} <span class="fs-sm text-muted ms-1"></span>
                      @else
                        <a href="/shop/categorie/{{$categorie->id}}" class="align-items-center rounded link-body" > {{$categorie->libelle}} <span class="fs-sm text-muted ms-1"></span>
                      @endif
                      
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
          </div>
          
          <!-- /.widget -->
          {{-- <div class="widget">
            <h4 class="widget-title mb-3">Rating</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating5" checked>
              <label class="form-check-label" for="rating5">
                <span class="ratings five"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating4">
              <label class="form-check-label" for="rating4">
                <span class="ratings four"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating3">
              <label class="form-check-label" for="rating3">
                <span class="ratings three"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating2">
              <label class="form-check-label" for="rating2">
                <span class="ratings two"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating1">
              <label class="form-check-label" for="rating1">
                <span class="ratings one"></span>
              </label>
            </div>
            <!-- /.form-check -->
          </div> --}}
          <!-- /.widget -->
          
          {{-- <div class="widget">
            <h4 class="widget-title mb-3">Price</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price1" checked>
              <label class="form-check-label" for="price1"> $0.00 - $50.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price2">
              <label class="form-check-label" for="price2"> $0.00 - $50.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price3">
              <label class="form-check-label" for="price3"> $50.00 - $100.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" id="price4">
              <label class="form-check-label" for="price4"> $150.00 - $200.00 </label>
            </div>
            <!-- /.form-check -->
            <div class="row">
              <div class="col-7 col-md-5 col-lg-12 col-xl-10 col-xxl-10">
                <div class="d-flex align-items-center mt-4">
                  <input type="number" class="form-control form-control-sm" placeholder="$0.00" min="0">
                  <div class="text-muted mx-2">‒</div>
                  <input type="number" class="form-control form-control-sm" placeholder="$50.00" max="50">
                </div>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div> --}}
          <!-- /.widget -->
        </aside>
        <!-- /column .sidebar -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
  <!-- /section -->
{{-- <section class="wrapper bg-gray">
    <div class="container py-12 py-md-14">
      <div class="row gx-lg-8 gx-xl-12 gy-8">
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img src="dist/assets/img/icons/solid/shipment.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">Free Shipping</h4>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img src="dist/assets/img/icons/solid/push-cart.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">30 Days Return</h4>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img src="dist/assets/img/icons/solid/verify.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
            </div>
            <div>
              <h4 class="mb-1">2-Years Warranty</h4>
              <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
</section> --}}
  <!-- /section -->

@endsection
