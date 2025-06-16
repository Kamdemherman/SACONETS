@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Qui somme nous</h4>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"><a style="float: right;margin-right: 100px" href="/administration/nous_add" type="button"  class="btn btn-default"><i class="fa fa-plus-square" style="color: #08367A" aria-hidden="true"></i> Nouveau</a></div>
          </div>
          @include('admin.page.message')
          <section id="no-more-tables">
            <table class="table table-bordered table-striped table-condensed cf" style="font-size: 18px">
              <thead class="cf">
                <tr>
                  <th>Libellé</th>
                  <th>Libellé En</th>
                  <th class="numeric"></th>
                  <th class="numeric"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($nous as $type)
                <tr>
                  
                  <td data-title="Code" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-line-clamp: 2; -webkit-box-orient: vertical;">{!!$type->libelle!!}</td>
                  <td data-title="Company" >{!!$type->libelle_en!!}</td>
                  <td class="numeric" data-title="Price"><a href="/administration/nous_edit/{{$type->id}}" title="Modifier"> <i class="fa fa-pencil" style="color: #08367A" aria-hidden="true"></i></a></td>
                  <td class="numeric" data-title="Change">
                    <form action="/administration/nous/destroy/{{$type->id}}" method="DELETE">
                      @csrf
                      @method('DELETE')
                      <a href="/administration/nous/destroy/{{$type->id}}" type="button" onclick="return confirm('Are you sure?')" title="Supprimer"><i class="fa fa-trash-o" style="color: red" aria-hidden="true"></i></a></td>
                      
                  </form>
                    
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
