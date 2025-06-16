@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

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
          <h1 class="display-1 mb-3" style="color: #fff">{{$produit->libelle_en}}</h1>
          
        @else
          <h1 class="display-1 mb-3" style="color: #fff">{{$produit->libelle}}</h1>
         
        @endif
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section --> 


<section class="wrapper wrapper-border">
  <div class="container py-11" style="padding-top: 2rem!important; padding-bottom: 0rem!important">
    @if (app()->getLocale() == 'en')
      <h2 class="h5 autre">{{ __('See other products:')}} {{$produit->categorie->libelle_en}}</h2>
    @else
      <h2 class="h5 autre">{{ __('See other products:')}} {{$produit->categorie->libelle}}</h2>
    @endif
    
    <ul class="list-inline mb-0">
      @php
        $autres=App\Models\Produit_turaya::where('cat_id',$produit->cat_id)->where('id','<>',$produit->id)->get();
      @endphp
      @foreach ($autres as $autre)
        @if (app()->getLocale() == 'en')
          <li class="list-inline-item me-1 mb-2"><a href="{{route('produit.details', $autre->slug)}}" class="btn btn-soft-ash btn-sm rounded ">{{$autre->libelle_en}}</a></li>
        @else
          <li class="list-inline-item me-1 mb-2"><a href="{{route('produit.details', $autre->slug)}}" class="btn btn-soft-ash btn-sm rounded ">{{$autre->libelle}}</a></li>
        @endif
      @endforeach
      
      
    </ul>
  </div>
  <!-- /.container -->
</section>  
 
<!-- /section  bg-gradient-primary-->

<section id="snippet-4" class="wrapper bg-light" style="margin-bottom: 20px">
    <div class="container pt-10 pt-md-12">

      <div class="row" style="padding-bottom: 50px">

        <div class="col-xxl-6 mx-auto">
          <div class="swiper-container swiper-thumbs-container dots-over" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure class="rounded"><img class="img" src="{{asset('/storage/imgs/'.$produit->image)}}" srcset="{{asset('/storage/imgs/'.$produit->image)}}" alt="" /><a class="item-link swiper-no-swiping" href="{{asset('/storage/imgs/'.$produit->image)}}" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <figure class="rounded"><img class="img" src="{{asset('/storage/imgs/'.$produit->image2)}}" srcset="{{asset('/storage/imgs/'.$produit->image2)}}" alt="" /><a class="item-link swiper-no-swiping" href="{{asset('/storage/imgs/'.$produit->image2)}}" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <figure class="rounded"><img class="img" src="{{asset('/storage/imgs/'.$produit->image3)}}" srcset="{{asset('/storage/imgs/'.$produit->image3)}}" alt="" /><a class="item-link swiper-no-swiping" href="{{asset('/storage/imgs/'.$produit->image3)}}" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                </div>
                <!--/.swiper-slide -->
                
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
            <div class="swiper swiper-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image)}}" srcset="{{asset('/storage/imgs/'.$produit->image)}}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image2)}}" srcset="{{asset('/storage/imgs/'.$produit->image2)}}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{asset('/storage/imgs/'.$produit->image3)}}" srcset="{{asset('/storage/imgs/'.$produit->image3)}}" class="rounded" alt="" /></div>
                
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
          <!--/column -->
        <div class="col-xxl-4 mx-auto">
          <div>
            @if (session('retour'))
                <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('retour')}}</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
          </div>
          {{-- <figure style="margin-top: -100px"><a href="" target="_blank"><img class="img-fluid" src="{{$produit->image}}" alt=""></a></figure> --}}

          @if (app()->getLocale() == 'en')
                <span class="badge bg-blue rounded-pill mt-5" style="font-size: 15px; background: #08367A;margin-bottom: 10px">{{$produit->categorie->libelle_en}}</span>
                <h2 class="post-title display-5"><a href="" class="link-dark">{{$produit->libelle_en}}</a></h2>
              @else
                <span class="badge bg-blue rounded-pill mt-5" style="font-size: 15px; background: #08367A;margin-bottom: 10px">{{$produit->categorie->libelle}}</span>
                <h2 class="post-title display-5 "><a href="" class="link-dark">{{$produit->libelle}}</a></h2>
              @endif
              <p>{!! $produit->caracteristique !!}</p>
          <div class="d-flex justify-content-center justify-content-lg-start mt-10" >
            <span><a href="{{route('search.shop',$produit->libelle)}}" class="btn btn-yellow rounded-pill mb-2 me-1">{{ __('Buy now') }}</a></span>
            <span><a href="#demande" class="btn btn-blue rounded-pill mb-2 me-1">{{ __('Request a Quote') }}</a></span>
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /column -->

        
        <!--/column -->
      </div>
      <!-- /.row -->


      
      
    </div>
  
    
  </section>

  <!-- /section -->

  <section class="wrapper bg-gradient-primary">
    <div class="container pt-0 pt-md-4 pb-8 ">
      <div class="accordion accordion-wrapper" id="accordionExample">

        <div class="card accordion-item">
          <div class="card-header" id="headingTwo">
            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Description </button>
          </div>
          <!--/.card-header -->
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="card-body">
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.accordion-collapse -->
        </div>
        <!--/.accordion-item -->
        <div class="card accordion-item">
          <div class="card-header" id="headingThree">
            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
          </div>
          <!--/.card-header -->
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="card-body">
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.accordion-collapse -->
        </div>
        <!--/.accordion-item -->

        <div class="card accordion-item">
          <div class="card-header" id="headingFour">
            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Header and Slider Options </button>
          </div>
          <!--/.card-header -->
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="card-body">
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.accordion-collapse -->
        </div>
        <!--/.accordion-item -->

      </div>
      <!--/.accordion -->
      
    </div>
    <!-- /.container -->
  </section>
  <!-- /section --> 
  

<section class="wrapper bg-gradient-primary">
  <div class="container pt-0 pt-md-4 pb-8 ">
    <div class="row" style="padding-bottom: 50px; margin-top: 0px">
        
      @if (app()->getLocale() == 'en')
          <p style="margin-top: 0px">{!! $produit->description_en !!}</p>
          @else
          <p style="margin-top: 0px">{!! $produit->description !!}</p>
          @endif
      
      <!--/column -->
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
  <div class="container pt-0 pt-md-4 pb-8 ">
    
    @if (count($accessoires) > 0)
    <div class="row">
      
        <h1 class="post-title display-5" style="text-align: left">{{ __('Accessoires') }}</h1>
      
      
    </div>
    <div class="row">
      <div class="col-xxl-12 mx-auto">
        <div class="swiper-container dots-closer blog grid-view mb-15" data-margin="0" data-dots="true" data-items-md="4" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              @foreach ($accessoires as $accessoire)
                
              
              <div class="swiper-slide">
                <div class="item-inner">
                  <article>
                    <div class="card">
                      <div class="card-body">
                        @if (app()->getLocale() == 'en')
                          <h6>{{ $accessoire->titre_en}}</h6>
                          <p>{{ $accessoire->paragraphe_en}}</p>
                        @else
                          <h6>{{ $accessoire->titre}}</h6>
                          <p>{{ $accessoire->paragraphe}}</p>
                        @endif
                        
                        
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </article>
                  <!-- /article -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              @endforeach
           
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
    </div>
    @endif
    @if ($document != null)
      
    
    <div class="row">
      
      <h1 class="post-title display-5" style="text-align: left">{{ __('Knowledge Centre') }}</h1>
    </div>
    <div class="row" id="demande">
      <div class="col-xxl-6 mx-auto">
        @if ($document->brochure != null)
        <a href="{{asset('/storage/pdf/'.$document->brochure)}}" target="_blank">
          <div class="alert alert-dark alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-download-alt"></i>  {{ __('Brochure') }} <i class="uil uil-arrow-to-bottom"></i>
            
          </div>
        </a>
        @endif
        @if ($document->fiche != null)
        <a href="{{asset('/storage/pdf/'.$document->fiche)}}" target="_blank">
          <div class="alert alert-dark alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-download-alt"></i>  {{ __('Technical data') }} <i class="uil uil-arrow-to-bottom"></i>
            
          </div>
        </a>
        @endif
        
        @if ($document->manuel != null)
        <a href="{{asset('/storage/pdf/'.$document->manuel)}}" target="_blank">
          <div class="alert alert-dark alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-download-alt"></i>  {{ __('User manual') }} <i class="uil uil-arrow-to-bottom"></i>
            
          </div>
        </a>
        @endif
        
        @if ($document->manuel_connexion != null)
        <a href="{{asset('/storage/pdf/'.$document->manuel_connexion)}}" target="_blank">
          <div class="alert alert-dark alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-download-alt"></i>  {{ __('Connection manual') }} <i class="uil uil-arrow-to-bottom"></i>
            
          </div>
        </a>
        @endif
        
        @if ($document->comparaison != null)
        <a href="{{asset('/storage/pdf/'.$document->comparaison)}}" target="_blank">
          <div class="alert alert-dark alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-download-alt"></i>  {{ __('Satellite Phone Comparison Sheet') }} <i class="uil uil-arrow-to-bottom"></i>
            
          </div>
        </a>
        @endif
        
      </div>
      @if ($document->video != null)
      <div class="col-xxl-6 mx-auto">
        <div class="ratio ratio-16x9">
          <iframe class="rounded" src="https://www.youtube.com/embed/{{$document->video}}?rel=0" title="YouTube video" allowfullscreen></iframe>
        </div>
        
      </div>
      @endif
      
    @endif

  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-gradient-primary">
  <div class="container pt-0 pt-md-4 pb-8 ">

    <div class="row mt-10" >
      <div class="col-xxl-6 mx-auto">
        
      </div>
      <h1 class="post-title display-5" style="text-align: left">{{ __('Request a Quote') }}</h1>
      <div class="col-xxl-6 mx-auto">
        <div>
          @if (session('success'))
              <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
              <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('success')}}</a>.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          @if (session('error'))
              <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
              <i class="uil uil-times-circle"></i>  <a href="#" class="alert-link hover">{{session('error')}}</a>.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
      </div>
      </div>
    </div>
    <div class="row">
    <form style="margin-top: 0px; " method="POST" action="{{route('devis.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-xxl-4 mx-auto">
          <div class="form-floating mb-4">
              <input id="name" type="text" class="form-control" name="name" id="name" required>
              <label for="name">{{ __('Full name')}}*</label>
              @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
          </div>
        </div>
        <div class="col-xxl-4 mx-auto">
          <div class="form-floating mb-4">
              <input id="email" type="email" class="form-control" name="email" id="email" required> 
              <label for="email">{{ __('E-mail')}}*</label>
              @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
          </div>
        </div>
        <div class="col-xxl-4 mx-auto">
          <div class="form-floating mb-4">
              <input id="company" type="text" class="form-control" name="company" id="company" required> 
              <label for="email">{{ __('Company')}}*</label>
              @if ($errors->has('company'))
                  <span class="text-danger">{{ $errors->first('company') }}</span>
              @endif
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xxl-4 mx-auto">
          <div class="form-floating mb-4">
              <input id="ville" type="text" class="form-control" name="ville" id="ville" required>
              <label for="ville">{{ __('City')}}*</label>
              @if ($errors->has('ville'))
                  <span class="text-danger">{{ $errors->first('ville') }}</span>
              @endif
          </div>
        </div>
        <div class="col-xxl-4 mx-auto">
          <div class="form-floating mb-4">
              <input id="phone" type="text" class="form-control" name="phone" id="phone" required> 
              <label for="phone">{{ __('Phone')}}*</label>
              @if ($errors->has('phone'))
                  <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif
          </div>
        </div>
        <div class="col-xxl-4 mx-auto">
          
        </div>
        
      </div>


      <div class="row">
        <div class="col-xxl-8 mx-auto">
          <div class="form-floating mb-4">
              <textarea id="object" class="form-control"  style="height: 150px" name="object" id="object" required></textarea>
                <label for="object">{{ __('Requesting information for:')}} {{$produit->libelle}}*</label>
              
              @if ($errors->has('object'))
                  <span class="text-danger">{{ $errors->first('object') }}</span>
              @endif
          </div>
        </div>
        <div class="col-xxl-4 mx-auto">
          <div class="form-floating mb-4">
              <strong style="float: left">ReCaptcha:</strong>
              <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
              @if ($errors->has('g-recaptcha-response'))
                  <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
              @endif
          </div>
        </div>
        <div class="form-floating mb-4">
            <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('Send your request')}}">
            <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
        </div>
      </div>
    </form>  
    </div>  
    
    
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
  

@endsection
