@include('layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Fund</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Fund</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <!--                                        <h4 class="font-weight-bold mb-0">--><?php //echo $name; ?><!--</h4>-->
            </div>
        </div>
        <!--                    <div class="col-xl-9 col-md-8">-->
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">

                </div>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="card-body">
                <br>
                <br>
                @foreach($data2 as $data)
                    <!-- Primary Alert -->
                        <div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
                            <div class="alert-body">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="ri-user-smile-line fs-16 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="alert-heading">Notification  !</h5>
                                        <p class="mb-0">Notification for Minimum amount funding</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert-content">
                                <p class="mb-0">Note that ₦{{$data->len}}  is the Minimum Funding Amount</p>
                            </div>
                        </div>
                        <!-- Primary Alert -->
                        <div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
                            <div class="alert-body">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="ri-user-smile-line fs-16 align-middle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="alert-heading">Notification !</h5>
                                        <p class="mb-0">Notification for amount to be charge on each funding</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert-content">
                                <p class="mb-0">Note that ₦{{$data->charges}} will be charged On every Funding.</p>
                            </div>
                        </div>

            </div>
        </div>



        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><i class="mdi mdi-wallet"></i>Wallet Balance</h4>
                        <div class="wallet-details">
                            <!--                                <span>Wallet Balance</span>-->
                            <h3>₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</h3>
                            <div class="d-flex justify-content-between my-4">
                            </div>
                            <div class="wallet-progress-chart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Enter Amount Below</h4>
                        <!--                        --><?php
                        //                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        //
                        //                            $amou=intval(mysqli_real_escape_string($con,$_POST['amount']));
                        //
                        //                            print "
                        //                    <script>
                        //                        window.location = 'fun.php?amount=$amou';
                        //                    </script>
                        //                    ";
                        //                        }
                        //                        ?>
                        <form  action="" method="post" id="paymentForm" >
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">

                                        <label class="form-control">NGN</label>
                                    </div>
                                    <input type="number" min="{{$data->len}}" maxlength="4" class="form-control" name="amount" id="amount" placeholder="00.00" required/>
                                </div>
                                @endforeach
                            </div>
                            <input type="hidden"  id="email-address" value="{{$user->email}}">
                    </div>
                </div>
{{--                <button class="btn btn-outline-success btn-block withdraw-btn" type="submit" onclick="payWithPaystack()">Click Fund With Paystack</button>--}}
{{--                <script src="https://js.paystack.co/v1/inline.js"> </script>--}}
                <br>
                {{--                <a href="fun.php"><button  type="button" class=" btn-block withdraw-btn"  >Fund With Transfer</button></a>--}}

                </form>
                <!--                <button class="btn btn-success btn-block withdraw-btn" type="submit" onClick="makePayment()"> Fund With Flutterwave</button>-->
                <!--                <script src="https://checkout.flutterwave.com/v3.js"> </script>-->

            </div>
        </div>

        <p>OR</p>
        <div class="card">
            <div class="card-body">
                <div class='alert alert-primary'>
                    <i class='ri-bell-line label-icon'></i><h6 class="text-center text-white">Transfer money to your Virtual Bank Account to get your Sollyinstantawoof Wallet credited instantly! </br></h6>

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
        <!--        <div class="row">-->
        <!--            <div class="col-md-7 grid-margin stretch-card">-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Deposit history</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Amount</th>
                            <th>Amount Before</th>
                            <th>Amount After</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        @foreach($fund as $depo)
                            <tr>
                                <td>{{$depo['username']}}</td>
                                <td>{{$depo['amount']}}</td>
                                <td>{{$depo['iwallet']}}</td>
                                <td>{{$depo['fwallet']}}</td>
                                <td>{{$depo['date']}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{$fund->links()}}
                </div>
            </div>
        </div>
    </div>
