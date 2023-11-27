
@extends('admin.base')

@section('content')

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                 <div class="col-md-4 mb-3">
                                        <img class="wd-100 ht-100 rounded-circle" src="{{asset("admin/images/small_logo.svg")}}" alt="">
                                     <img class="wd-100 ht-100 d-none d-xl-none d-lg-none d-sm-none  rounded-circle float-end" src="{{asset("admin/images/Logo_transparent USDC_20231125_183026_0000.svg")}}" alt="">
                                    </div>
                                    <div class="col-md-8 text-start">
                                        <h1 class="tx-16 fw-bolder mt-2">ID:xxxxxxxxxxxxxxxxx</h1>
                                        <h3 class="tx-12 text-muted mt-2">Invited by:xxxxxxxxxxxxxxxxx</h3>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin">
                    <div>
                        <div class="card mb-2" style="background-image: url({{asset('admin/images/Logo_transparent_USDC_20231125_183246_0000.svg')}});
                            background-repeat:no-repeat;
                            background-size:contain;
                            background-position-x: right;" >
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Personal link</h6>
                                </div>
                                <div class="">
                                    <span>xxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Image PUB</h6>
                                </div>
                                <div class="">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
<div class="row  flex-grow-1">
    <div class="col-md-3 grid-margin stretch-card">
    <div class="card"  style="background-image: url({{asset('admin/images/Logo_partenaire_20231125_183616_0000.svg')}});
        background-repeat:no-repeat;
        background-size:contain;
        background-position-x: right;">
        <div class="card-body">
            <h3 class="text-flickr">Patners</h3>
            <h3 class="number_dashbord mt-1 fw-bolder">6985741</h3>
            <span class="block"><span class="mdi mdi-arrow-top-right"></span>235</span>
        </div>
    </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card  bg--cover" style="background-image: url({{asset('admin/images/Logo_team_20231125_183948_0000.svg')}});
            background-repeat:no-repeat;
            background-size:contain;
            background-position-x: right;">
            <div class="card-body">
                <section>
                    <h3>Teams</h3>
                    <h3 class="number_dashbord mt-1 fw-bolder">25897</h3>
                    <span class="block"><span class="mdi mdi-arrow-top-right"></span>46</span>
                </section>

            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3>Profits</h3>
                <h3 class="tx-16 fw-bolder">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h3>
                <h3 class="tx-16 fw-bolder">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h3>
            </div>
        </div>
    </div>

</div>

@endsection
