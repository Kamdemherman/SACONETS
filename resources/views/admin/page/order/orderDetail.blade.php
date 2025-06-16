@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i>
            <a href="javascript:history.go(-1)" class="btn btn-default">
              <i class="fas fa-arrow-alt-circle-left">Retour</i>
            </a></h4>
            <button id="print" style="float: right;margin-right: 100px"  class="btn btn-warning"><i class="fa fa-download" style="color: #08367A" aria-hidden="true"></i> Export pdf</button>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"></div>
             {{-- <div class="col-md-4 col-sm-4 mb"><a style="float: right;margin-right: 100px" href="/administration/partenaire_add" type="button"  class="btn btn-default"><i class="fa fa-plus-square" style="color: #08367A" aria-hidden="true"></i> Nouveau</a></div> --}}
          </div>
          @include('admin.page.message')
          <section id="no-more-tables" >
            <div id="orderPrint">
            <h4> Détails de la commande de {{$details->user_name}} du {{$details->order_date}}. D'un montant de: <strong>{{getPrix($details->montant)}}</strong></h4>
            <table class="table table-bordered table-striped table-condensed cf" style="font-size: 18px">
              <thead class="cf">
                <tr>
                  <th>Produit</th>
                  <th>Prix</th>
                  <th>Quantité</th>
                  <th>Taxe (19,25%)</th>
                </tr>
              </thead>
              <tbody>
                @foreach (unserialize($details->produits) as $produit)
                <tr>
                  
                  <td data-title="Code" >{{$produit[0]}}</td>
                  <td data-title="Company" >{{getPrix($produit[1])}} </td>
                  <td data-title="Company" >{{$produit[2]}}</td>
                   <td>{{getPrix($produit[1] * 0.1925)}}</td> 
                </tr>            
                @endforeach
                
              </tbody>
            </table>
            </div>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
  </section>
</section>
@endsection

@section('extra-js')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="{{asset('printThis/printThis.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click','#print',function(){
                
                $('#orderPrint').printThis({
                    importCSS: false,
                    loadCSS: "/dash/lib/bootstrap/css/bootstrap.min.css",
                    header: "<h1>Look at all of my kitties!</h1>"
                });
            })
            
        })

    </script>

@endsection
