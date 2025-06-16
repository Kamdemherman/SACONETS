<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commande {{ Auth::user()->name }}</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-12">
          
          <div class="col-lg-12">
            <h3 class="mb-4">{{ __('Order details') }}</h3>
            <div class="shopping-cart mb-7">
              @foreach (Cart::content() as $produit) 
              <div class="shopping-cart-item d-flex justify-content-between mb-4">
                <div class="d-flex flex-row d-flex align-items-center">
                  <figure class="rounded w-17"><a href=""><img src="{{asset('/storage/imgs/'.$produit->model->image)}}" srcset="{{asset('/storage/imgs/'.$produit->model->image)}}" alt="" height="100px" /></a></figure>
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
            <p>Recommandation: {{$data}}</p>
            <p>Contact: {{Auth::user()->email}} / {{Auth::user()->phone}}</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    
</body>
</html>