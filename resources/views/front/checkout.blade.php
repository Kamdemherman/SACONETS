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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Checkout') }}</h1>
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
      <div class="row gx-md-8 gx-xl-12 gy-12">
        <div class="col-lg-8">
            <form action="{{route('stripe')}}" method="GET">
            @csrf
            <hr class="mt-7 mb-6">
            <h3 class="mb-4">Payment</h3>
            <div class="mt-3 mb-6">
              <div class="form-check">
                <input id="stripe" name="type" type="radio" class="form-check-input" value="stripe" checked required>
                <label class="form-check-label" for="credit">Stripe</label>
              </div>
              <div class="form-check">
                <input id="mobile" name="type" type="radio" class="form-check-input" value="mobile" required>
                <label class="form-check-label" for="debit">Mobile money</label>
              </div>
              
              
            </div>
            <div class="row">
              <div class="col-xl-8">
                <div class="row gy-3 gx-3">
                  <div class="col-md-12">
                    
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating">
                        <button type="submit" class="btn btn-primary rounded w-100 mt-4">{{ __('Place Order') }}</button>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-floating">
                      
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-floating">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <form action="{{route('paypal')}}" method="POST">
            @csrf
            <hr class="mt-7 mb-6">
            <h3 class="mb-4">Payment</h3>
            <div class="mt-3 mb-6">
              
              <div class="form-check">
                <input id="mobile" name="type" type="radio" class="form-check-input" value="paypal" checked required>
                <label class="form-check-label" for="debit">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-8">
                <div class="row gy-3 gx-3">
                  <div class="col-md-12">
                    
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating">
                        <button type="submit" class="btn btn-primary rounded w-100 mt-4">{{ __('Place Order') }}</button>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-floating">
                      
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-floating">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /column -->
        <div class="col-lg-4">
          <h3 class="mb-4">{{ __('Order details') }}</h3>
          <div class="shopping-cart mb-7">
            @foreach (Cart::content() as $produit) 
            <div class="shopping-cart-item d-flex justify-content-between mb-4">
              <div class="d-flex flex-row d-flex align-items-center">
                <figure class="rounded w-17"><a href=""><img src="{{asset('/storage/imgs/'.$produit->model->image)}}" srcset="{{asset('/storage/imgs/'.$produit->model->image)}}" alt="" /></a></figure>
                <div class="w-100 ms-4">
                  <h3 class="post-title h6 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">{{$produit->model->titre}}</a></h3>
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
@endsection
