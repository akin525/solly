<x-guest-layout>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="#" class="d-block">
                                                    <h2 class="text-capitalize text-white"><b>Sollyinstantawoof</b></h2>
                                                    <img src="{{asset('sam.png')}}" alt="" height="200">

                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" The Best Platform For Automated VTU, Databundle and Bills Services! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" We makes life better for other people."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Start enjoying this very low rates Data plan for your internet browsing databundle....! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Register Account</h5>
                                            <p class="text-muted">Get your Free Sollyinstantawoof account now.</p>
                                        </div>

                                        <div class="mt-4">
                                <!-- Form -->
                    <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">
                        @csrf
                        <x-jet-validation-errors class="alert-danger card-body" />

                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email address" required>
                            <div class="invalid-feedback">
                                Please enter email
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                            <div class="invalid-feedback">
                                Please enter username
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Full Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name" required>
                            <div class="invalid-feedback">
                                Please enter your full name
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Phone No<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Enter Phone No" required>
                            <div class="invalid-feedback">
                                Please enter Phone No
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password-input">Password</label>
                            <div class="position-relative auth-pass-inputgroup">
                                <input type="password" class="form-control pe-5 password-input" name="password" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                <div class="invalid-feedback">
                                    Please enter password
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Confirmed Password<span class="text-danger">*</span></label>
                            <input type="password" class="form-control"  name="password_confirmation" placeholder="Enter Confirmed Password" required>
                            <div class="invalid-feedback">
                                Confirmed Password
                            </div>
                        </div>

                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                            <h5 class="fs-13">Password must contain:</h5>
                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Sign Up</button>
                        </div>

                        <div class="mt-4 text-center">
                            <div class="signin-other-title">
                                <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                            </div>

                        </div>
                    </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">Already have an account ? <a href="{{route('login')}}" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script>Sollyinstantawoof<i class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- validation init -->
    <script src="{{asset('assets/js/pages/form-validation.init.js"')}}></script>
    <!-- password create init -->
    <script src="{{asset('assets/js/pages/passowrd-create.init.js')}}"></script>
</x-guest-layout>
