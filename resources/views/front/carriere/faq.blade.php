@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')

<section class="wrapper bg-gray">
  <div class="container py-12 py-md-14">
    <div class="row gx-lg-8 gx-xl-12 gy-8">
      <div class="col-md-10 col-lg-10">
        <div class="d-flex flex-row">
          <div>
              <nav class="d-inline-block" aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 mt-5" style="padding-top: 0px">
                    <li class="breadcrumb-item"><a href="/">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item "><a href="#">{{ __('About Us') }}</a></li>
                    <li class="breadcrumb-item "><a href="#">{{ __('Frequently Asked Questions') }}</a></li>
                   
                    
                  </ol>
              </nav>
          </div>
         
        </div>
      </div>
      <!--/column -->
      
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
 

<section id="snippet-4" class="wrapper bg-light wrapper-border" style="margin-bottom: 20px">
    <div class="container pt-5 pt-md-10">
        <div class="accordion accordion-wrapper" id="accordionExample">
            @foreach ($faqs as $faq)
            <div class="card accordion-item">
                <div class="card-header" id="headingTwo">
                  @if (app()->getLocale() == 'en')
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$faq->id}}" aria-expanded="false" aria-controls="collapseTwo{{$faq->id}}"> {{$faq->question_en}} </button>
                  @else
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$faq->id}}" aria-expanded="false" aria-controls="collapseTwo{{$faq->id}}"> {{$faq->question}} </button>
                  @endif
                  
                </div>
                <!--/.card-header -->
                <div id="collapseTwo{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    @if (app()->getLocale() == 'en')
                      <p>{{$faq->reponse_en}}</p>
                    @else
                      <p>{{$faq->reponse}}</p>
                    @endif
                    
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
            <!--/.accordion-item -->
            @endforeach
        
        </div>
          <!--/.accordion -->
    </div>
  
    
  </section>
  <!-- /section -->

@endsection
