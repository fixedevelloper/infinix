
@extends('base')

@section('content')

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url({{asset('images/breadcrumb_bg-1.png')}})">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Registration</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
    <section class="account padding-top padding-bottom sec-bg-color2">
        <div class="container">
            <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
                <img src="{{asset('images/Black White Minimal Coming Soon Instagram Post.svg')}}">
                {{--<div class="row g-4">
                    <div class="col-lg-6">
                        <div class="account__content account__content--style1">

                            <div class="account__header">
                                <h2>Registration In</h2>
                                <p>INFINIX FORCE</p>
                                <div class="row">
                                <div class="">
                                    <label for="account-email" class="form-label">Your upline</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="account-email" placeholder="001"
                                               required>
                                        <a  href="#" class="input-group-text trk-btn trk-btn--border trk-btn--primary">Save</a>
                                    </div>

                                </div>
                                </div>
                                <div class="mt-5">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-danger">Wallet not connected</li>
                                        <li class="list-group-item list-group-item-danger">Network</li>
                                        <li class="list-group-item list-group-item-success">Registration Available</li>
                                        <li class="list-group-item list-group-item-danger">Balance is less than 10 USDT and 0.004 BNB</li>
                                        <li class="list-group-item list-group-item-danger">Approve USDT</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account__content account__content--style1">

                            <!-- account tittle -->
                            <div class="account__header">
                                <h2>Guide connect to wallet</h2>
                                <p></p>
                                <a target="_blank" href="#" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4"><i class="fa fa-book-open-reader"></i>Read guide</a>
                            </div>

                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
        <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="{{asset('images/contact_shap04.png')}}"
                                                                    alt="shape-icon"></span>
        </div>
    </section>
@endsection
