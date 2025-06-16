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
        <h1 class="display-1 mb-3" style="color: #fff">{{ __('Cart') }}</h1>
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
        <div class="col-lg-8">
          <div class="table-responsive">
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
                    <div class="h4 mb-0">Total</div>
                  </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                

                @foreach (Cart::content() as $produit) 
                <tr>
                  <td class="option text-start d-flex flex-row align-items-center ps-0">
                    <figure class="rounded w-17"><a href=""><img src="{{ asset('/storage/imgs/'.$produit->model->image)}}" srcset="{{asset('/storage/imgs/'.$produit->model->image)}}" alt="" /></a></figure>
                    <div class="w-100 ms-4">
                      <h3 class="post-title h6 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">{{$produit->model->titre}}</a></h3>
                      {{-- <div class="small">Color: Black</div>
                      <div class="small">Size: 43</div> --}}
                    </div>
                  </td>
                  <td>
                    <p class="price"><del><span class="amount"></span></del> <ins><span class="amount">{{$produit->model->getPrix()}}</span></ins></p>
                  </td>
                  <td>
                    <div class="form-select-wrapper">
                      <select class="form-select form-select-sm mx-auto" data-id="{{$produit->rowId}}" data-stock="{{$produit->model->stock}}" name="qte" id="qte">
                        @for ($i=1;$i<=6;$i++ )
                        <option value="{{$i}}" {{$i==$produit->qty ? 'selected': ''}}>{{$i}}</option>
                        @endfor
                        
                      </select>
                    </div>
                    <!--/.form-select-wrapper -->
                  </td>
                  <td>
                    <p class="price"><span class="amount">{{getPrix($produit->subtotal())}}</span></p>
                  </td>
                  <td class="pe-0">
                   
                    <form action="/shop/panier/delete/{{$produit->rowId}}" method="DELETE">
                        @csrf
                        @method('DELETE')
                        
                        <a href="/shop/panier/delete/{{$produit->rowId}}" class="link-dark" onclick="return confirm('Are you sure?')"><i class="uil uil-trash-alt"></i></a>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
          <div class="row mt-0 gy-4">
            <div class="col-md-8 col-lg-7">
              <div class="form-floating input-group">
                {{-- <input type="url" class="form-control" placeholder="Enter promo code" id="seo-check">
                <label for="seo-check">{{ __('Enter promo code') }}</label>
                <button class="btn btn-primary" type="button">{{ __('Apply') }}</button> --}}
              </div>
              <!-- /.input-group -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-5 ms-auto ms-lg-0 text-md-end">
              {{-- <a href="#" class="btn btn-primary rounded">{{ __('Update Cart') }}</a> --}}
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /column -->
        <div class="col-lg-4">
          <h3 class="mb-4">{{ __('Order details') }}</h3>
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
          <a href="{{route('checkout')}}" class="btn btn-primary rounded w-100 mt-4">{{ __('Proceed to Checkout') }}</a><br>
          <p style="margin-top: 20px">{{ __('or')}}</p>
          <a href="{{route('commander')}}" class="btn btn-primary rounded w-100 mt-4">{{ __('Ordering') }}</a>
        </div>
        <!-- /column -->
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
              <img src="{{asset('dist/assets/img/icons/solid/shipment.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
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
              <img src="{{asset('dist/assets/img/icons/solid/push-cart.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
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
              <img src="{{asset('dist/assets/img/icons/solid/verify.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
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
@else  
  <p style="text-align: center">Votre panier est vide</p>
@endif   
@endsection


@section('extra-js')
  <script>
     var selects= document.querySelectorAll('#qte');
     Array.from(selects).forEach(element => {
      element.addEventListener('change',function(){
        var rowId=this.getAttribute('data-id');
        var stock=this.getAttribute('data-stock');
        var token=document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          fetch(
              `/panier/update/${rowId}`,
              {
                headers:{
                  "Content-Type":"application/json",
                  "Accept":"application/json text-plain, */*",
                  "X-Requested-With":"XMLHttpRequest",
                  "X-CSRF-TOKEN":token
                },
                method:"post",
                body: JSON.stringify({
                  qte:this.value,
                  stock:stock
                }) 
              }
          ).then((data) =>{
            console.log(data);
            location.reload();
          }).catch((error) => {
            console.log(error);
          });
          
      });
     });
   
  </script>

@endsection