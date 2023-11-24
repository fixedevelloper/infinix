@extends('base')

@section('content')

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url({{asset('images/breadcrumb_bg-1.png')}})">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Documentation</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Documentation</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="{{asset('images/shap2.png')}}"
                                                                              alt="shape-icon"></span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->
    <!-- ===============>> account start here <<================= -->
    <section class="account padding-top padding-bottom sec-bg-color2">
        <div class="container">
            <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="account__content account__content--style1">

                            <!-- account tittle -->
                            <div class="account__header">
                                <h2>INFINIX FORCE</h2>
                                <p>Open or Download documentation PDF</p>
                            </div>


                            <!-- account form -->


                                <a target="_blank" href="{{asset('pdf/INFINIX FORCE ENG PDF_20231114_205824_0000.pdf')}}" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4"><i class="fa fa-file-pdf"></i>Open</a>
                            <a download href="{{asset('pdf/INFINIX FORCE ENG PDF_20231114_205824_0000.pdf')}}" class="trk-btn trk-btn--border trk-btn--outline2 d-block mt-4"><i class="fa fa-download"></i> Download</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="{{asset('images/contact_shap04.png')}}"
                                                                    alt="shape-icon"></span>
        </div>
    </section>
    <!-- ===============>> account end here <<================= -->

@endsection
