@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Slider</h4>
          <div class="row">
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"></div>
             <div class="col-md-4 col-sm-4 mb"><a style="float: right;margin-right: 100px" href="/administration/slider_add" type="button"  class="btn btn-default"><i class="fa fa-plus-square" style="color: #08367A" aria-hidden="true"></i> Nouveau</a></div>
          </div>
          @include('admin.page.message')
          <section id="no-more-tables">
            <table class="table table-bordered table-striped table-condensed cf" style="font-size: 18px">
              <thead class="cf">
                <tr>
                  <th>image</th>
                  <th>Titre</th>
                  <th>Titre_en</th>
                  <th>Paragraphe</th>
                  <th>Paragraphe_en</th>
                  <th class="numeric"></th>
                  <th class="numeric"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $type)
                <tr>
                  
                  <td data-title="Code" ><img src="{{asset('/storage/imgs/'.$type->image)}}" alt="" height="100px" width="200px"></td>
                  <td data-title="Company" >{{$type->titre}}</td>
                  <td data-title="Company" >{{$type->titre_en}}</td>
                  <td data-title="Company" >{{$type->paragraphe}}</td>
                  <td data-title="Company" >{{$type->paragraphe_en}}</td>
                  <td class="numeric" data-title="Price"><a href="/administration/slider_edit/{{$type->id}}" title="Modifier"> <i class="fa fa-pencil" style="color: #08367A" aria-hidden="true"></i></a></td>
                  <td class="numeric" data-title="Change">
                    <form action="/administration/slider/destroy/{{$type->id}}" method="DELETE">
                      @csrf
                      @method('DELETE')
                      <a href="/administration/slider/destroy/{{$type->id}}" title="Supprimer" type="button" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash-o" style="color: red" aria-hidden="true"></i></a></td>
                      
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
