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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Ordering') }}</h1>
        {{-- <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: #fff">{{ __('Fuel by passion')}}</p> --}}
      </div>
      
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->   
  @if (Cart::count() > 0)
    
  <section class="wrapper bg-light">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-12">
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
          <h3 class="mb-4">{{ __('Order details') }}</h3>
          <div class="shopping-cart mb-7">
            @foreach (Cart::content() as $produit) 
            <div class="shopping-cart-item d-flex justify-content-between mb-4">
              <div class="d-flex flex-row d-flex align-items-center">
                <figure class="rounded w-17"><a href=""><img src="{{asset('/storage/imgs/'.$produit->model->image)}}" srcset="{{asset('/storage/imgs/'.$produit->model->image)}}" alt="" /></a></figure>
                <div class="w-100 ms-4">
                  <h3 class="post-title h6 lh-xs mb-1"><a href="#" class="link-dark">{{$produit->model->titre}}</a></h3>
                  {{-- <div class="small">Color: Black</div>
                  <div class="small">Size: 43</div> --}}
                </div>
              </div>
              <div class="ms-2 d-flex align-items-center">
                <p class="price fs-sm"><span class="amount">{{$produit->model->getPrix()}}</span></p>
              </div>
            </div>
            @endforeach
            <!--/.shopping-cart-item -->
            
          </div>
          <!-- /.shopping-cart-->
          <hr class="my-4">
          {{-- <h3 class="mb-2">Shipping</h3>
          <div class="mb-5">
            <div class="form-check mb-2">
              <input id="standart" name="shippingMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="standart">Free - Standart delivery</label>
              <small class="text-muted d-block">Shipment may take 5-6 business days</small>
            </div>
            <div class="form-check">
              <input id="express" name="shippingMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="express">$10 - Express delivery</label>
              <small class="text-muted d-block">Shipment may take 2-3 business days</small>
            </div>
          </div> --}}
          <div class="table-responsive">
            <table class="table table-order">
              <tbody>
                <tr>
                  <td class="ps-0"><strong class="text-dark">{{ __('Subtotal') }}</strong></td>
                  <td class="pe-0 text-end">
                    <p class="price">{{ getPrix(Cart::subtotal())}}</p>
                  </td>
                </tr>
                <tr>
                  <td class="ps-0"><strong class="text-dark">Taxe (19,25%)</strong></td>
                  <td class="pe-0 text-end">
                    <p class="price text-red">{{ getPrix(Cart::tax())}}</p>
                  </td>
                </tr>
                {{-- <tr>
                  <td class="ps-0"><strong class="text-dark">Shipping</strong></td>
                  <td class="pe-0 text-end">
                    <p class="price">$10</p>
                  </td>
                </tr> --}}
                <tr>
                  <td class="ps-0"><strong class="text-dark">Total</strong></td>
                  <td class="pe-0 text-end">
                    <p class="price text-dark fw-bold">{{ getPrix(Cart::total())}}</p>
                  </td>
                </tr>
                <tr>
                  
                  <td class="pe-0 text-end">
                    <form action="{{route('commander.send')}}" method="get">
                      @csrf
                      <div class="form-floating mb-4">
                        <textarea id="recommandation" class="form-control"  style="height: 150px" name="recommandation" id="recommandation"></textarea>
                        <label for="motivation">{{ __('Recommandation of costumer')}} ({{ __('Optional')}})</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="submit" class="btn btn-primary rounded w-100 mt-4" value="{{ __('Send Order')}}">
                    </div>
                    </form>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
          {{-- <a href="#" class="btn btn-primary rounded w-100 mt-4">Place Order</a> --}}
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section --> 
  @else
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
  <p style="text-align: center">Votre panier est vide</p>
  @endif
@endsection
