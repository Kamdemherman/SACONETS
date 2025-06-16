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
              <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{route('administration.partenaire.edit',$partenaire->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Raison sociale </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="raison_sociale" name="raison_sociale" value="{{$partenaire->raison_sociale}}" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Site internet </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="site" name="site" value="{{$partenaire->site}}" minlength="2" type="text"  />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Catégories </label>
                  <div class="col-lg-10">
                    <select class="form-control" name="type" id="type">
                        <option value="Videosurveillances">Videosurveillances</option>
                        <option value="Telephonie mobile par satellite">Telephonie mobile par satellite </option>
                        <option value="Solutions de securite">Solutions de securite </option>
                        <option value="Materiel reseau informatiques">Materiel reseau informatiques </option>
                        <option value="Solution d’interconnexion Point a Point">Solution d’interconnexion Point a Point </option>
                        <option value="Solution Monetique">Solution Monetique </option>
                        <option value="Solution de supervision">Solution de supervision</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group ">
                  <label class="control-label col-lg-2 col-sm-3">Logo</label>
                  <div class="col-lg-10 col-sm-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                        <img src="{{asset('/storage/avatars/'.$partenaire->logo)}}" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" id="logo" name="logo" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                    <span>
                      Attached image thumbnail is
                      supported in Latest Firefox, Chrome, Opera,
                      Safari and Internet Explorer 10 only
                      </span>
                  </div>
                </div>
              
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <a href="/administration/partenaire" type="button" class="btn btn-danger">Annuler</a>
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
@section('extra-js')

<script src="/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('description',{
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('description_en',{
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
    });
    
  </script>
 
    
@endsection
