@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <!-- FORM VALIDATION -->
    <div class="row mt">
        <div class="col-lg-12">
          <h4><i class="fa fa-angle-right"></i> </h4>
          <div class="row">
            <div class="col-md-4 col-sm-4 mb"><a style="float: left;margin-left: 100px" href="/administration/about" type="button"  class="btn btn-default"><i class="fa fa-arrow-circle-o-left" style="color: #08367A" aria-hidden="true"></i> Retourner à la liste</a></div>
            <div class="col-md-4 col-sm-4 mb"></div>
            <div class="col-md-4 col-sm-4 mb"></div>
         </div>
         @include('admin.page.message');
          <div class="form-panel">
            <div class=" form">
              <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{route('administration.about')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Petite description </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="short" name="short" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Petite description_en </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="short_en" name="short_en" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Libellé </label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="libelle" id="libelle" placeholder="Your description" rows="5" data-rule="required" data-msg="Your description"></textarea>
                  </div>
                </div>

                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Libellé </label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="libelle_en" id="libelle_en" placeholder="Your description" rows="5" data-rule="required" data-msg="Your description"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-lg-2 col-sm-3 " style="margin-left: 10px">Images Mises en avant</label>
                    <div class="col-md-3 col-sm-4 mb">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-theme02 btn-file">
                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="default" id="image" name="image" />
                          </span>
                          <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-theme02 btn-file">
                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" class="default" id="image2" name="image2" />
                          </span>
                          <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                        </div>
                      </div>
                    </div>
                    
                  </div>  
                </div>
                <div class="form-group ">
                  <label class="control-label col-lg-2 col-sm-3"></label>
                  <div class="col-lg-10 col-sm-9">
                    
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
        CKEDITOR.replace('libelle',{
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('libelle_en',{
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
        });
        
    </script>
 
    
@endsection
