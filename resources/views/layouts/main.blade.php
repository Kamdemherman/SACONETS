<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template"> --}}
  <meta name="author" content="elemis">

  @yield('extra-meta')
  
 

  @if (!empty($meta_titre))
  <meta property="og:title" content="Photil: {{$meta_titre}}" />
  <title>SACONETS-{{$meta_titre}}</title>
  @else
  <title>SACONETS</title>
  @endif
  
  @include('meta::manager')
  @if (!empty($meta_image))
  <meta property="og:image" content="{{ asset('storage/imgs/' .$meta_image) }}">
  @else
  <meta property="og:image" content="{{ asset('storage/imgs/1661523600_Saconets.jpg') }}">
  @endif
  <link href="{{ asset('dist/assets/img/favicon1.png') }}" rel="shortcut icon">
  <link href="{{ asset('dist/assets/css/plugins.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/saconets.css') }}" rel="stylesheet">
 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto');
  </style>
  @yield('extra-css')
  @yield('extra-script')
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <div class="bg-primary text-white fw-bold fs-15 mb-2 top">
        <div class="container py-2 d-md-flex flex-md-row">
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
            <address class="mb-0">Yaoundé, Hippodrome rue Frédéric FOE / Douala, Cinema le Wouri</address>
          </div>
          <div class="d-flex flex-row align-items-center me-6 ms-auto">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
            <p class="mb-0">(+237) 242 06 99 78 / 242 77 81 96</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
            <p class="mb-0"><a href="tvest@yahoo.com" class="link-white hover">info@saconets.com</a></p>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100" style="">
            <a href="/">
              <img class="logo-dark" src="{{asset('dist/assets/img/logo_saconetsbr2-r.png')}}" srcset="{{asset('dist/assets/img/logo_saconetsbr2-r.png')}}" alt="" />
              <img class="logo-light" src="{{asset('dist/assets/img/logo_saconetsbr2-r.png')}}" srcset="{{asset('dist/assets/img/logo_saconetsbr2-r.png')}}" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Saconets</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  
                  <!--<a class="nav-link" href="/" data-bs-toggle="">{{ __('Home') }}</a>-->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('About Us') }}</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="{{route('qui-somme-nous')}}" >{{ __('Who Are We?') }}</a>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="{{route('partenaire.liste')}}">{{ __('Pertners') }}</a> 
                    </li>
                    {{-- <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('Pertners') }}</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="{{route('partenaire.liste')}}">{{ __('Pertners List') }}</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="{{route('investisseurs')}}">{{ __('Become a partner and/or investor') }}</a></li>
                      </ul>
                    </li> --}}
                    {{-- <li class=""><a class="dropdown-item" href="{{route('honneurs')}}">{{ __('Company Honors') }}</a> --}}
                    </li>
                  </ul>
                </li>
                {{-- <li class="nav-item ">
                  
                <a class="nav-link" href="{{route('interconnexion-et-internet-VSAT')}}" data-bs-toggle="">{{ __('Our services') }}</a>
                </li> --}}
    
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('Our services') }}</a>
                  <div class="dropdown-menu dropdown-lg">
                    <div class="dropdown-lg-content">
                      <div>
                        <h6 class="dropdown-header"></h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="{{route('interconnexion-et-internet-VSAT')}}">{{ __('VSAT') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('internet-et-interconnexion-fibre-optique')}}">{{ __('Fiber Optic') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('video-surveillance')}}">{{ __('Videosurveillance') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('visioconference')}}">{{ __('Videoconferencing') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('controle-acces')}}">{{ __('Access control') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('alarme-anti-intrusion')}}">{{ __('Anti intrusion alarm') }}</a></li>
                          
                        </ul>
                      </div>
                      <!-- /.column -->
                      <div>
                        <h6 class="dropdown-header"></h6>
                        <ul class="list-unstyled">
                          
                          <li><a class="dropdown-item" href="{{route('systeme-de-securite-ncendie')}}">{{ __('Fire Safety System') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('telephonie-mobile-par-satellite')}}">{{ __('Mobile satellite telephony') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('tracking')}}">{{ __('Tracking') }}</a></li>
                          
                          <li><a class="dropdown-item" href="{{route('cablage-reseau-structure')}}">{{ __('Computer Networks and Consulting') }}</a></li>
                          <li><a class="dropdown-item" href="{{route('compteuses.trieuses')}}">{{ __('Banknote Counters and Sorters') }}</a></li>
                          {{-- <li><a class="dropdown-item" href="{{route('integration-des-solutions-de-services-reseaux-et-conseils')}}">{{ __('Integration of network services ') }}<br/>{{ __('security and consulting solutions') }}</a></li>  --}}
                          
                        </ul>
                      </div>
                      <!-- /.column -->
                    </div>
                    <!-- /auto-column -->
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('Our products') }}</a>
                  <ul class="dropdown-menu">
                      @php
                        $categories=App\Models\CategorieShop::all();
                      @endphp
                      @foreach ($categories as $item)
                        @if (app()->getLocale() == 'en')
                          <li class="nav-item"><a class="dropdown-item" href="{{route('produit.categorie', $item->slug)}}">{{$item->libelle_en}}</a></li>
                        @else
                          <li class="nav-item"><a class="dropdown-item" href="{{route('produit.categorie', $item->slug)}}">{{$item->libelle}}</a></li>
                        @endif
                        
                      @endforeach
         
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="/sav" data-bs-toggle="">{{ __('SAV') }}</a>
                </li>
                

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('Career') }}</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="{{route('job')}}" >{{ __('Jobs') }}</a>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="{{route('candidature-spontanee')}}">{{ __('Spontaneous application') }}</a>
                    </li>
                    {{-- <li class="nav-item"><a class="dropdown-item" href="{{route('faq')}}">{{ __('FAQ') }}</a> --}}
                    </li>
         
                  </ul>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link " href="/shop" data-bs-toggle="">{{ __('Shop') }}</a>
                  
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item" style="margin-left: 0px">
                  <a class="nav-link position-relative d-flex flex-row align-items-center" href="/panier">
                    <i class="uil uil-shopping-cart"></i>
                    <span class="badge badge-cart bg-primary">{{Cart::count()}}</span>
                  </a>
                </li>

                @guest
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('login')}}" data-bs-toggle="">{{ __('Login') }}</a>
                  </li>
                @else
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="{{route('commande')}}" >{{ __('My orders') }}</a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </li>
                    </ul>
                  </li>
                @endguest

                <li class="nav-item d-none d-md-block mt-3">
                  <a href="{{route('contact')}}" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                </li>
                
                {{-- <li class="nav-item">
                  <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                    {{ __('More') }}
                    
                  </a>
                </li> --}}
                
                <li class="nav-item dropdown language-select text-uppercase">
                  <a class="nav-link dropdown-item dropdown-toggle" id="langue" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                    @if (app()->getLocale() == 'en')
                      <img src="{{asset('dist/assets/img/flags/en.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                    @else
                      <img src="{{asset('dist/assets/img/flags/fr.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                    @endif
                  </a>
                  <ul class="dropdown-menu">
                    @if (app()->getLocale() == 'en')
                    <li class="nav-item">
                      <a class="dropdown-item" id="en" href="language/fr">
                        <img src="{{asset('dist/assets/img/flags/fr.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                      </a>
                    </li>
                    @else
                    <li class="nav-item">
                      <a class="dropdown-item" id="en" href="language/en">
                        <img src="{{asset('dist/assets/img/flags/en.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                      </a>
                    </li>
                    @endif
                    
                  </ul>
                </li>

              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto" style="margin-left: 10!important;">
            <ul class="navbar-nav flex-row align-items-center ms-auto" style="margin-left: 10!important;">
              
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn" ><span></span></button>
              </li>
              {{-- <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" id="langue" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                  @if (app()->getLocale() == 'en')
                    <img src="{{asset('dist/assets/img/flags/en.png')}}" alt="" class="" height="20px" style="margin: 4px" />
                  @else
                    <img src="{{asset('dist/assets/img/flags/fr.png')}}" alt="" class="" height="20px" style="margin: 4px" />
                  @endif
                </a>
                <ul class="dropdown-menu">
                  @if (app()->getLocale() == 'en')
                  <li class="nav-item">
                    <a class="dropdown-item" id="en" href="language/fr">
                      <img src="{{asset('dist/assets/img/flags/fr.png')}}" alt="" class="" height="20px" style="margin: 4px" />
                    </a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="dropdown-item" id="en" href="language/en">
                      <img src="{{asset('dist/assets/img/flags/en.png')}}" alt="" class="" height="20px" style="margin: 4px" />
                    </a>
                  </li>
                  @endif
                  
                </ul>
              </li>--}}
              {{-- @guest
              <li class="nav-item ">
                <a class="nav-link " href="/login" data-bs-toggle="">Login</a>
                
                <!--/.dropdown-menu -->
              </li>
              @else
              <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" id="langue" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="dropdown-item" id="en" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    </a>
                  </li>
                </ul>
              </li>
              @endguest --}}

              {{-- <li class="nav-item" style="margin-left: 50px">
                <a class="nav-link position-relative d-flex flex-row align-items-center" href="/panier">
                  <i class="uil uil-shopping-cart"></i>
                  <span class="badge badge-cart bg-primary">{{Cart::count()}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                  {{ __('More') }}
                  
                </a>
              </li> --}}
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other --> 
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="mb-0"></h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
          <div class="shopping-cart">
            
            <!--/.shopping-cart-item -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link " href="/contact" data-bs-toggle="">Contact</a>
                  
                  <!--/.dropdown-menu -->
                </li>
                @guest
                  <li class="nav-item ">
                    <a class="nav-link " href="/login" data-bs-toggle="">EXTRANET
                    </a>
                    
                    <!--/.dropdown-menu -->
                  </li>
                  
                  @else
                  <li class="nav-item dropdown language-select text-uppercase">
                    <a class="nav-link dropdown-item dropdown-toggle" id="langue" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXTRANET: {{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item ">
                        <a class="dropdown-item " href="/commande" data-bs-toggle="">{{ __('Your orders') }}
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" id="en" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        </a>
                      </li>
                    </ul>
                  </li>
                @endguest
            </ul>
            <!--/.shopping-cart-item -->
            
            <!--/.shopping-cart-item -->
          </div>
          <!-- /.shopping-cart-->
          
          <!-- /.offcanvas-footer-->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Saconets</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
     
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100" method="GET" action="{{ route('produit.search')}}">
            <input id="search-form" type="text" class="form-control" name="titre" placeholder="{{ __('Type keyword and hit enter')}}">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    @yield('content')
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse" style="background: #08367A">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-2">
          <div class="widget">
            <img class="mb-4" src="{{asset('dist/assets/img/logo_footer.png')}}" srcset="{{asset('dist/assets/img/logo_footer.png')}}" alt="" />
            <p class="mb-4">© 2022 Saconets. <a href="https://www.donsyl.com" target="_blank">by DONSYL</a>.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-3 col-lg-2 offset-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 " style="color: #F39200">{{ __('Useful links') }}</h4>
            <ul class="list-unstyled mb-0 footer1 text-white">
              <li><a href="#" class="text-white">{{ __('About Us') }}</a></li>
              <li><a href="#" class="text-white">{{ __('Our services') }}</a></li>
              <li><a href="#" class="text-white">{{ __('Our products') }}</a></li>
              <li><a href="#" class="text-white">{{ __('Career') }}</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-5 col-lg-4">
          <div class="widget">
            <h4 class="widget-title mb-3 " style="color: #F39200">{{ __('After sales services') }}</h4>
            <p class="mb-4 text-white">{{ __('Thanks to a team of engineers qualified in various fields8 SACONETS SA ensures a quality after sales service on all its products and services. * We provide 7 - Preventive Maintenance) - Curative Maintenance) - Technical Support 24/24 and 7/7 Contact our technical support on one of the numbers below or write us.* (+237) 242 778 1968 696 658 378 / (+237) 242 069 978 or info@saconets.com') }}</p>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-3 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 " style="color: #F39200"> {{ __('Contact') }}</h4>
            <address class="text-white">Yaoundé, Hippodrome rue Frédéric FOE  </address>
            <a href="" class="text-white">info@saconets.com</a><br /> (+237) 242 06 99 78 - 696 65 83 78
            <address class="text-white">Douala, Cinema le Wouri  </address>
             (+237) 242 77 81 96
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('dist/assets/js/plugins.js') }}" defer></script>
  <script src="{{ asset('dist/assets/js/theme.js') }}" defer></script>
 
  
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/626fb4507b967b11798d6ac2/1g225gn4e';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
  </script>
  <!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">

        

  </script>
  @yield('extra-js')
</body>

</html>