@include('layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Primary Alert -->
        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">{{$greet}} {{Auth::user()->name}}</h4>
                                    <p class="text-muted mb-0">Welcome to Sollyinstantawoof Data Bundle</p>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
                        <div class="alert-body">
                            {{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-bell-fill fs-16 align-middle"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="alert-heading">WellCome Back {{Auth::user()->username}} !</h5>
                                    <p class="mb-0">Notification From Admin!. </p>
                                </div>
                            </div>
                        </div>
                        <div class="alert-content">
                            <p class="mb-0">{{$me->message}}.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Balance</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</h4>
                                            <a href="#" class="text-decoration-underline">Wallet Balance</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                                            <i class="bx bx-wallet text-success"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Deposit</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-danger fs-14 mb-0">
                                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">₦{{number_format(intval($totaldeposite *1), 2)}}</h4>
                                            <a href="#" class="text-decoration-underline">View all Deposit</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                                            <i class="bx bx-wallet text-info"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Purchase</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">₦{{number_format(intval($bill *1), 2)}} </h4>
                                            <a href="#" class="text-decoration-underline">Purchase Details</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-warning rounded fs-3">
                                                            <i class="bx bx-cart text-warning"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Charges</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-muted fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">₦{{number_format(intval($charge *1), 2)}} </h4>
                                            <a href="#" class="text-decoration-underline">All Charges</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->


                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Waec Result Checker</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <a href="{{route('waec')}}">
                                    <img width="300" src="{{asset('img/wa.jpg')}}" alt="">
                                        </a>
                                    </div>

                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Neco Result Checker</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-danger fs-14 mb-0">
                                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <a href="{{route('neco')}}">
                                        <img width="300" height="200" src="{{asset('img/neco.jpg')}}" alt="">
                                        </a>
                                    </div>

                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->


                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Nabteb Result Checker</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-muted fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <a href="#">
                                        <img width="300" src="{{asset('img/nabteb.jpg')}}" alt="">
                                        </a>
                                    </div>

                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->

                    <div class="card">
                        <div class="card-body">
                            <div class='alert alert-primary'>
                                <i class='ri-bell-line label-icon'></i><h5 class="text-center">Transfer money to your Virtual Bank Account to get your Sollyinstantawoof Wallet credited instantly! </br></h5>

                                <center>

                                    <div class="alert alert-primary alert-dismissible alert-solid alert-label-icon fade show" role="alert">
                                        @if (Auth::user()->account_number==1 && Auth::user()->account_name==1)
                                            <a class="text-white" href="{{route('vertual')}}"> <i class="ri-user-smile-line label-icon text-white"></i><strong>Click this section to get your permament Virtual Bank Account (Transfer money to the account no to get your Sollyinstantawoof Wallet funded instantly!)</strong></a>

                                        @else
                                            <i class="ri-user-smile-line label-icon"></i><strong>{{Auth::user()->account_name}}</strong>
                                            <i class="ri-user-smile-line label-icon"></i><strong>Account No:{{Auth::user()->account_number}}</strong>
                                            <i class="ri-user-smile-line label-icon"></i><strong>WEMA-BANK</strong>
                                        @endif

                                        {{--                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>--}}
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Quick Purchase</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                                <h5 class="mb-0 text-decoration-underline">Select Your Product</h5>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4 col-lg-6">
                                    <div class="card card-overlay">
                                        <img class="card-img img-fluid" src="{{asset('img/net.png')}}" width="300" height="10" alt="Card image">
                                        <div class="card-img-overlay p-0 d-flex flex-column">
                                            <div class="card-header bg-transparent">
                                                <h2 class="badge badge-gradient-primary card-title text-white mb-0">Buy All Mobile Data Here, Click The Below Button</h2>
                                            </div>
                                            <div class="card-body">
                                                <p class="badge badge-gradient-primary card-text text-white mb-2">Start enjoying this very low rates Data plan for your internet browsing databundle..... </p>
                                                <p class="card-text">
                                                    <h4 class=" badge badge-gradient-primary text-white">All Product Have Validation Date</h4>
                                                </p>
                                            </div>
                                            <div class="card-footer bg-transparent text-center">
                                                <a href="{{route('select')}}" class="badge badge-gradient-success">Buy Now<i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-xxl-4 col-lg-6">
                                    <div class="card card-overlay">
                                        <img class="card-img img-fluid" src="{{asset('img/tv.png')}}" width="300" height="10" alt="Card image">
                                        <div class="card-img-overlay p-0 d-flex flex-column">
                                            <div class="card-header bg-transparent">
                                                <h2 class="badge badge-gradient-primary card-title text-white mb-0">Buy All Cable Tv Plan Here, Click The Below Button</h2>
                                            </div>
                                            <div class="card-body">
                                                <p class="badge badge-gradient-primary card-text text-white mb-2">Pay your gotv, DSTV, Startimes. </p>
                                                <p class="card-text">
{{--                                                    <small class="text-white">Last updated 3 mins ago</small>--}}
                                                </p>
                                            </div>
                                            <div class="card-footer bg-transparent text-center">
                                                <a href="{{url('picktv')}}" class="badge badge-gradient-success">Pay Tv<i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                        </div><!-- end col -->
                    </div>

                    <!-- end row -->
