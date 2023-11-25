
@extends('base')

@section('content')
    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url({{asset('images/breadcrumb_bg-1.png')}})">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Login</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                <div class="row g-4 flex-row">
                    <div class="col-lg-6 stretch-card">
                        <div class="account__content account__content--style2">

                            <div class="account__header">
                                <h2>Account Preview</h2>
                                <div class="">
                                    <label for="account-email" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="account-email" placeholder="Your ID"
                                               required>

                                </div>
                                <a  href="#" class="trk-btn trk-btn--border trk-btn--secondary  mt-4 d-block">Preview</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  stretch-card">
                        <div class="account__content account__content--style2">

                            <div class="account__header">
                                <h2>Demo</h2>
                                <p>Random account demo</p>
                                <a  href="#" class="trk-btn trk-btn--border trk-btn--primary  mt-4 d-block">Demo</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="account__content account__content--style3">
            <table class="table">
                <tbody>
                <tr>
                    <td><img src="http:placeholder"></td>
                    <td>0x9dA7E35D1397e61A2cc2ce737D6D77f1D1a5A23d</td>
                    <td>2minuites Ago</td>
                </tr>
                <tr>
                    <td><img src="http:placeholder"></td>
                    <td>0x9dA7E35D1397e61A2cc2ce737D6D77f1D1a5A23d</td>
                    <td>2minuites Ago</td>
                </tr>
                <tr>
                    <td><img src="http:placeholder"></td>
                    <td>0x9dA7E35D1397e61A2cc2ce737D6D77f1D1a5A23d</td>
                    <td>2minuites Ago</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </section>
    <!-- ===============>> account end here <<================= -->
@endsection
