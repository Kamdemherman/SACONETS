@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Candidature spontanée</h4>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"></div>
             
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-3 mb">
              
            </div>
            <div class="col-md-6 col-sm-6 mb">
              
            </div>
            <div class="col-md-3 col-sm-3 mb">
              <form class="form-inline" role="form" action="{{route('administration.candidature-spontanee.search')}}">
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
                  <th>CV</th>
                  <th>Lettre</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Ville</th>
                  <th>Adresse</th>
                  <th>Object</th>
                  
                  <th class="numeric"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($candidatureSpontanees as $type)
                <tr>
                  <td data-title="Company" > <a href="{{asset('/storage/pdf/'.$type->cv)}}" target="_blank"> CV</a></td>
                  <td data-title="Company" ><a href="{{asset('/storage/pdf/'.$type->lettre)}}" target="_blank"> Lettre de motivation</a></td>
                  <td data-title="Code" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$type->name}}</td>
                  <td data-title="Company" >{{$type->email}}</td>
                  <td data-title="Company" >{{$type->ville}}</td>
                  <td data-title="Company" >{{$type->adresse}}</td>
                  <td data-title="Company" >{{$type->objet}}</td>
                  
                  <td class="numeric" data-title="Change">
                    <form action="/administration/candidature-spontanee/destroy/{{$type->id}}" method="DELETE">
                      @csrf
                      @method('DELETE')
                      <a href="/administration/candidature-spontanee/destroy/{{$type->id}}" type="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" style="color: red" aria-hidden="true"></i></a></td>
                      
                  </form>
                    
                </tr>                   
                @endforeach
              </tbody>
            </table>
            <div style="text-align: right; margin: 15px">{{$candidatureSpontanees->links()}}</div>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
  </section>
</section>
@endsection
