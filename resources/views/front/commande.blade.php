@extends('layouts.main')

@section('extra-meta')

<meta name="csrf-token" content="{{ csrf_token() }}">
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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Your orders') }}</h1>
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
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="row gx-md-10 gx-xl-12 gy-12">

        @if (session('success'))
        <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
          <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('success')}}</a>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
          <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('error')}}</a>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <div class="col-lg-12">
          <div class="table-responsive">
            @foreach (Auth::user()->orders as $commande) 
            <h3>Commande passée le {{Carbon\Carbon::parse($commande->payment_created_at)->format('d/m/y à h:i')}}
                d'un montant de <strong>{{getPrix($commande->montant)}}</strong>(Taxe (19,25%): {{getPrix($commande->tva)}})
            </h3>
            <table class="table text-center shopping-cart">
              <thead>
                <tr>
                  <th class="ps-0 w-25">
                    <div class="h4 mb-0 text-start">{{ __('Product') }}</div>
                  </th>
                  <th>
                    <div class="h4 mb-0">{{ __('Price') }}</div>
                  </th>
                  <th>
                    <div class="h4 mb-0">{{ __('Quantity') }}</div>
                  </th>

                  <th>
                    @switch($commande->etat)
                        @case('Non reglee')
                            <div class="badge rounded-pill bg-warning w-100">{{ __('In progress')}}</div>
                            
                            @break

                        @case('Annulee')
                            <div class="badge rounded-pill bg-danger w-100">{{ __('Failed')}}</div>
                            @break    
                    
                        @default
                            <div class="badge rounded-pill bg-success w-100">{{ __('Completed')}}</div>
                            
                    @endswitch
                  </th>
                  <th>
                    @switch($commande->etat)
                        @case('Non reglee')
                            
                            <div class="badge rounded-pill bg-dark w-100"> <a href="{{route('commande.annuler',$commande->id)}}" style="color: #fff">{{ __('Cancel')}}</a> </div>
                            @break

                        @case('Annulee')
                            
                            @break    
                    
                        @default
                            
                            
                    @endswitch
                  </th>
                </tr>
              </thead>
              <tbody>
                

                @foreach (unserialize($commande->produits) as $produit) 
                <tr>
                  <td class="option text-start d-flex flex-row align-items-center ps-0">
                    
                    <div class="w-100 ms-4">
                      <h3 class="post-title h6 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">{{$produit[0]}}</a></h3>
                      {{-- <div class="small">Color: Black</div>
                      <div class="small">Size: 43</div> --}}
                    </div>
                  </td>
                  <td>
                    <p class="price"><del><span class="amount"></span></del> <ins><span class="amount">{{getPrix($produit[1])}}</span></ins></p>
                  </td>
                  <td>
                    <p class="price"><del><span class="amount"></span></del> <ins><span class="amount">{{$produit[2]}}</span></ins></p>
                    <!--/.form-select-wrapper -->
                  </td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
            @endforeach
          </div>
          <!-- /.table-responsive -->
         
        </div>
        <!-- /column -->
        
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  
@endsection
