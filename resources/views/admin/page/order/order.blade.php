@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Commandes en attente</h4>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb">
              {{-- <button id="print" style="float: right;margin-right: 100px"  class="btn btn-warning"><i class="fa fa-download" style="color: #08367A" aria-hidden="true"></i> Export pdf</button> --}}
             </div>
             <div class="col-md-4 col-sm-4 mb">
              <button id="print" style="float: right;margin-right: 100px"  class="btn btn-warning"><i class="fa fa-download" style="color: #08367A" aria-hidden="true"></i> Export pdf</button>
             </div>
             {{-- <div class="col-md-4 col-sm-4 mb"><a style="float: right;margin-right: 100px" href="/administration/commande_en_attente/pdf" type="button"  class="btn btn-warning"><i class="fa fa-download" style="color: #08367A" aria-hidden="true"></i> Export pdf</a></div>  --}}
          </div>
          
          <div class="row">
            <div class="col-md-3 col-sm-3 mb">
              <form class="form-inline" role="form" action="{{route('administration.commande_en_attente.search_date')}}">
                @csrf
                <div class="form-group">
                  <label class="sr-only" for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="date" >
                </div>
                <button type="submit" class="btn btn-theme">Rechercher</button>
              </form> 
            </div>
            <div class="col-md-6 col-sm-6 mb">
              <form class="form-inline" role="form" action="{{route('administration.commande_en_attente.search_entre')}}">
                @csrf
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Entre le</label>
                  <input type="date" class="form-control" id="debut" name="debut" >
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Et le</label>
                  <input type="date" class="form-control" id="fin" name="fin" >
                </div>
                <button type="submit" class="btn btn-theme">Rechercher</button>
              </form> 
            </div>
            <div class="col-md-3 col-sm-3 mb">
              <form class="form-inline" role="form" action="{{route('administration.commande_en_attente.search_nom')}}">
                @csrf
                <div class="form-group">
                  <label class="sr-only" for="name">Nom</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom">
                </div>
                <button type="submit" class="btn btn-theme">Rechercher</button>
              </form> 
            </div>
          </div>
          @include('admin.page.message')
          <section id="no-more-tables">
            <table class="table table-bordered table-striped table-condensed cf" style="font-size: 18px">
              <thead class="cf">
                <tr>
                  <th>Client</th>
                  <th>Montant</th>
                  <th>Taxe (19,25%)</th>
                  <th>Date</th>
                  <th>Etat de la commande</th>
                  <th class="numeric"></th>
                  <th class="numeric"></th>
                  <th class="numeric"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $type)
                <tr>
                  
                  <td data-title="Code" >{{$type->user->name}}</td>
                  <td data-title="Company" >{{getPrix($type->montant)}} </td>
                  <td data-title="Company" >{{getPrix($type->tva)}} </td>
                  <td data-title="Company" >{{$type->order_date}}</td>
                  <td data-title="Company" >{{$type->etat}}</td>
                  <td class="numeric" data-title="Price"><a href="/administration/commande_en_attente/update/{{$type->id}}"> Valider</i></a></td>
                  <td class="numeric" data-title="Price"><a href="/administration/commande_en_attente/edit/{{$type->id}}" title="Voir"> <i class="fa fa-eye" style="color: #08367A" aria-hidden="true"></i></a></td>
                  <td class="numeric" data-title="Change">
                    <form action="/administration/commande_en_attente/destroy/{{$type->id}}" method="DELETE">
                      @csrf
                      @method('DELETE')
                      <a href="/administration/commande_en_attente/destroy/{{$type->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fa fa-trash-o" style="color: red" aria-hidden="true"></i></a></td>
                      
                  </form>
                    
                </tr>                   
                @endforeach
              </tbody>
            </table>
            <div style="text-align: right; margin: 15px">{{$orders->links()}}</div>
          </section>

          <section id="no-more-tables" style="display: none">
            <table class="table table-bordered table-striped table-condensed cf" id="orderPrint" style="font-size: 18px">
              <thead class="cf">
                <tr>
                  <th>Client</th>
                  <th>Montant</th>
                  <th>Taxe (19,25%)</th>
                  <th>Date</th>
                  <th>Etat de la commande</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $type)
                <tr>
                  
                  <td data-title="Code" >{{$type->user->name}}</td>
                  <td data-title="Company" >{{getPrix($type->montant)}} </td>
                  <td data-title="Company" >{{getPrix($type->tva)}} </td>
                  <td data-title="Company" >{{$type->order_date}}</td>
                  <td data-title="Company" >{{$type->etat}}</td> 
                </tr>                   
                @endforeach
              </tbody>
            </table>

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