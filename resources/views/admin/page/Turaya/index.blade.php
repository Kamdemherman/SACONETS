@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Produit thuraya</h4>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"><a style="float: right;margin-right: 100px" href="/administration/produit_add" type="button"  class="btn btn-default"><i class="fa fa-plus-square" style="color: #08367A" aria-hidden="true"></i> Nouveau</a></div>
          </div>
          <div class="row">
            <div class="col-md-1 col-sm-1 mb">
              
            </div>
            <div class="col-md-5 col-sm-5 mb">
              
            </div>
            <div class="col-md-6 col-sm-6 mb">
              <form class="form-inline" role="form" action="{{route('administration.produit.search')}}">
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
                  <th>Libellé</th>
                  <th>Libellé En</th>
                  <th>Petite description</th>
                  <th class="numeric"></th>
                  <th class="numeric"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pts as $type)
                <tr>
                  
                  <td data-title="Code" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$type->libelle}}</td>
                  <td data-title="Company" >{{$type->libelle_en}}</td>
                  <td data-title="Company" >{{$type->short}}</td>
                  <td class="numeric" data-title="Price"><a href="/administration/produit_edit/{{$type->id}}" title="Modifier"> <i class="fa fa-pencil" style="color: #08367A" aria-hidden="true"></i></a></td>
                  <td class="numeric" data-title="Change">
                    <form action="/administration/produit/destroy/{{$type->id}}" method="DELETE">
                      @csrf
                      @method('DELETE')
                      <a href="/administration/produit/destroy/{{$type->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fa fa-trash-o" style="color: red" aria-hidden="true"></i></a></td>
                      
                  </form>
                    
                </tr>                   
                @endforeach
              </tbody>
            </table>
            <div style="text-align: right; margin: 15px">{{$pts->links()}}</div>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
  </section>
</section>
@endsection
