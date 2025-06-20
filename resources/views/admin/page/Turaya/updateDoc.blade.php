@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <!-- FORM VALIDATION -->
    <div class="row mt">
        <div class="col-lg-12">
          <h4><i class="fa fa-angle-right"></i> </h4>
          {{-- <div class="row">
            <div class="col-md-4 col-sm-4 mb"><a style="float: left;margin-left: 100px" href="/administration/about_saconets" type="button"  class="btn btn-default"><i class="fa fa-arrow-circle-o-left" style="color: #08367A" aria-hidden="true"></i> Retourner à la liste</a></div>
            <div class="col-md-4 col-sm-4 mb"></div>
            <div class="col-md-4 col-sm-4 mb"></div>
         </div> --}}
          <div class="form-panel">
            <div class=" form">
              <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{route('administration.produit_Doc.edit',$ptDoc->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                  <label for="video" class="control-label col-lg-2">Vidéo(joutube) </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="video" name="video" value="{{$ptDoc->video}}" minlength="2" type="text"  />
                  </div>
                </div>
                <div class="form-group ">
                    <label for="titre" class="control-label col-lg-2">Titre </label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="titre" name="titre" minlength="2" type="text" value="{{$ptDoc->titre}}" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="titre_en" class="control-label col-lg-2">Titre_en </label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="titre_en" name="titre_en" minlength="2" type="text" value="{{$ptDoc->titre_en}}" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="document" class="control-label col-lg-2">document </label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="document" name="document" minlength="2" type="file" />
                    </div>
                </div>
                
                <div class="form-group ">
                    <label for="document_en" class="control-label col-lg-2">document </label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="document_en" name="document_en" minlength="2" type="file"  />
                    </div>
                </div>
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">produit</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="prod_id" id="prod_id">
                      @foreach ($produits as $produit)
                        @if ($produit->id == $ptDoc->prod_id )
                          <option value="{{$produit->id}}" selected>{{$produit->libelle}}</option>
                        @else
                          <option value="{{$produit->id}}">{{$produit->libelle}}</option>
                        @endif
                        
                      @endforeach
                      
                    </select>
                  </div>
                </div>
              
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <a href="/administration/produit_Doc" type="button" class="btn btn-danger">Annuler</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
      </div>
  </section>
</section>
@endsection

