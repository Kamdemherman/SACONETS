<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SACONECTS-Dashboard</title>

  <!-- Favicons -->
  <link href="{{ asset('dash/img/favicon.png') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/img/favicon1.png') }}" rel="shortcut icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('dash/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('dash/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ asset('dash/css/zabuto_calendar.css') }}" rel="stylesheet">
  <link href="{{ asset('dash/lib/gritter/css/jquery.gritter.css') }}" rel="stylesheet">
  <link href="{{ asset('dash/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dash/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('dash/lib/chart-master/Chart.js') }}" defer></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b style="color:#08367A">SACON<span style="color:#F39200">NETS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme"></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-envelope-o"></i>
              <span id="nbsms" class="badge bg-theme"></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="/administration/home">
                  <span class="photo"><img alt="avatar" src="dash/img/user.png"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="/administration/home">
                  <span class="photo"><img alt="avatar" src="dash/img/user.png"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="/administration/home">
                  <span class="photo"><img alt="avatar" src="dash/img/user.png"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="/administration/home">
                  <span class="photo"><img alt="avatar" src="dash/img/user.png"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="dash/img/user.png">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"></span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('administration.logout') }}">Logout</a>
            <form id="logout-form" action="{{ route('administration.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="/administration/home"><img src="{{ asset('dash/img/user.png') }}" class="img-circle" width="80"></a></p>
          {{-- <h5 class="centered">{{ Auth::user()->name }}</h5> --}}
          <li class="mt">
            <a class="active" href="/administration/home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a href="/administration/type_compte_user">
              <i class="fa fa-cogs"></i>
              <span>Type de compte Utilisateur </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li>
            <a href="/administration/shop_categorie">
              <i class="fa fa-cogs"></i>
              <span>Shop catégorie </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li>
            <a href="/administration/shop">
              <i class="fa fa-desktop"></i>
              <span>Shop  </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>

          <li>
            <a href="/administration/arivage">
              <i class="fa fa-desktop"></i>
              <span>Arivage  </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Commandes</span>
              </a>
            <ul class="sub">
              <li><a href="/administration/commande_en_attente">Commandes en attente</a></li>
              <li><a href="/administration/commande_reglee">Commandes Reglées</a></li>
              <li><a href="/administration/commande_annulee">Commandes Annulées</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>About</span>
              </a>
            <ul class="sub">
              <li><a href="/administration/about">About saconets</a></li>
              <li><a href="/administration/nous">Qui sommes nous</a></li>
              <li><a href="/administration/histoire">Histoire</a></li>
            </ul>
          </li>
          <li>
            <a href="/administration/telecom">
              
              <i class="fa fa-cogs"></i>
              <span>Services  </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Produits</span>
              </a>
            <ul class="sub">
              <li><a href="/administration/shop_categorie">Catégories</a></li>
              <li><a href="/administration/sous-categorie">Sous-catégories</a></li>
              <li><a href="/administration/produit">Produits</a></li>
              <li><a href="/administration/produit_Doc">Documents</a></li>
              <li><a href="/administration/produit_accessoire">Accessoires</a></li>
              {{-- <li><a href="/administration/produit_TC">Compteuse et trieuse</a></li>
              <li><a href="/administration/produit_MC">Machine de fabrication</a></li> --}}
            </ul>
          </li>
          <li>
            <a href="/administration/sav">
              
              <i class="fa fa-book"></i>
              <span>Sav  </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>

          <li>
            <a href="/administration/equipe">
              
              <i class="fa fa-book"></i>
              <span>Equipe </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>

          <li>
            <a href="/administration/technicien">
              
              <i class="fa fa-book"></i>
              <span>Techniciens </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li>
            <a href="/administration/news">
              
              <i class="fa fa-tasks"></i>
              <span>Actualité  </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Carrière</span>
              </a>
            <ul class="sub">
              <li><a href="/administration/emploi">Emploi</a></li>
              <li><a href="/administration/candidature">Candidature</a></li>
              <li><a href="/administration/candidature-spontanee">Candidature spontanée</a></li>
              <li><a href="/administration/faq">FAQ</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Partenaire</span>
              </a>
            <ul class="sub">
              <li><a href="/administration/partenaire">Liste des partenaires</a></li>
              <li><a href="/administration/investisseur">Demandes de partenariat/investissement</a></li>
            </ul>
          </li>
          <li>
            <a href="/administration/marque">
              
              <i class="fa fa-tasks"></i>
              <span>Marque  </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li>
            <a href="/administration/slider">
              <i class="fa fa-envelope"></i>
              <span>Slider </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          
          
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
    @yield('content')
    <!--main content end-->
    <!--footer start-->
    {{-- <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer> --}}
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  {{-- <script src="{{ asset('dash/lib/jquery/jquery.min.js') }}" defer></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="{{ asset('dash/lib/bootstrap/js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('dash/lib/jquery.dcjqaccordion.2.7.js') }}" defer></script>
  <script src="{{ asset('dash/lib/jquery.scrollTo.min.js') }}" defer></script>
  <script src="{{ asset('dash/lib/jquery.nicescroll.js') }}" defer></script>
  <script src="{{ asset('dash/lib/jquery.sparkline.js') }}" defer></script>
  <!--common script for all pages-->
  <script src="{{ asset('dash/lib/common-scripts.js') }}" defer></script>
  <script src="{{ asset('dash/lib/gritter/js/jquery.gritter.js') }}" defer></script>
  <script src="{{ asset('dash/lib/gritter-conf.js') }}" defer></script>
  <!--script for this page-->
  <script src="{{ asset('dash/lib/sparkline-chart.js') }}" defer></script>
  <script src="{{ asset('dash/lib/zabuto_calendar.js') }}" defer></script>
  <script src="{{ asset('dash/ckeditor/ckeditor.js') }}" defer></script>
  <script src="{{ asset('dash/lib/bootstrap-fileupload/bootstrap-fileupload.js') }}" defer></script>
  <script src="{{ asset('dash/lib/advanced-form-components.js') }}" defer></script>

 
  <script src="{{ asset('js/app.js') }}" defer></script>
  @yield('extra-js')
</body>

</html>
