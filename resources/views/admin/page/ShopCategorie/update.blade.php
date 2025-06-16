@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <!-- FORM VALIDATION -->
    <div class="row mt">
        <div class="col-lg-12">
          <h4><i class="fa fa-angle-right"></i> </h4>
          <div class="form-panel">
            <div class=" form">
              <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{route('administration.shop_categorie.edit',$categorie->id)}}">
                @csrf
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Libellé </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="libelle" name="libelle" value="{{$categorie->libelle}}" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Libellé_en </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="libelle_en" name="libelle_en" value="{{$categorie->libelle_en}}" minlength="2" type="text" required />
                  </div>
                </div>
              
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <a href="/administration/shop_categorie" type="button" class="btn btn-danger">Annuler</a>
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
