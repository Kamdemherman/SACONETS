@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Investisseurs</h4>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"></div>
          </div>
          @include('admin.page.message')
          <section id="no-more-tables">
            <table class="table table-bordered table-striped table-condensed cf" style="font-size: 18px">
              <thead class="cf">
                <tr>
                  <th>Raison sociale</th>
                  <th>Site internet</th>
                  <th>Pays</th>
                  <th>Email</th>
                  <th>Ville</th>
                  <th>Adresse</th>
                  <th>Motivation</th>
                  
                  <th class="numeric"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($investisseurs as $type)
                <tr>
                  <td data-title="Company" > {{$type->Raison_sociale}}</td>
                  <td data-title="Company" ><a href="{{$type->phone}}" target="_blank"> {{$type->phone}}</a></td>
                  <td data-title="Code" >{{$type->pays}}</td>
                  <td data-title="Company" >{{$type->email}}</td>
                  <td data-title="Company" >{{$type->ville}}</td>
                  <td data-title="Company" >{{$type->adresse}}</td>
                  <td data-title="Company" >{{$type->motivation}}</td>
                  
                  <td class="numeric" data-title="Change">
                    <form action="/administration/investisseur/destroy/{{$type->id}}" method="DELETE">
                      @csrf
                      @method('DELETE')
                      <a href="/administration/investisseur/destroy/{{$type->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fa fa-trash-o" style="color: red" aria-hidden="true" ></i></a></td>
                      
                  </form>
                    
                </tr>                   
                @endforeach
              </tbody>
            </table>
            <div style="text-align: right; margin: 15px">{{$investisseurs->links()}}</div>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
  </section>
</section>
@endsection
