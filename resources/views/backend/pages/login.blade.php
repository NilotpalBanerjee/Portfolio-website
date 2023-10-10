<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Admin</title>

        <!-- Custom fonts for this template-->
        <link
            href="{{url('/')}}/backend/vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />

        <!-- Custom styles for this template-->
        <link
            href="{{url('/')}}/backend/css/sb-admin-2.min.css"
            rel="stylesheet"
        />
    </head>

    <body class="bg-light">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                <div class="col-lg-6 shadow-lg bg-white rounded mt-5">
                    <div class="p-5">
                        @if(session('error'))
                            <div class="text-danger text-center">{{session('error')}}</div>
                            @endif
                        @if(session('success'))
                        <div class="text-success text-center">{{session('success')}}</div>
                        <br>
                        @endif
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
                        <form class="user" action="{{route('postLogin')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control form-control-user"
                                    id="exampleInputEmail"
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Email Address..."
                                />
                            </div>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control form-control-user"
                                    id="exampleInputPassword"
                                    placeholder="Password"
                                />
                            </div>
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <button type="submit"
                                class="btn btn-primary btn-user btn-block"
                            >
                                Login

                                <i class="fas fa-sign-in-alt"></i>
                            </button>
                            <!-- <hr />
                            <a
                                href="index.html"
                                class="btn btn-google btn-user btn-block"
                            >
                                <i class="fab fa-google fa-fw"></i> Login with
                                Google
                            </a>
                            <a
                                href="index.html"
                                class="btn btn-facebook btn-user btn-block"
                            >
                                <i class="fab fa-facebook-f fa-fw"></i> Login
                                with Facebook
                            </a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{url('/')}}/backend/vendor/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{url('/')}}/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{url('/')}}/backend/js/sb-admin-2.min.js"></script>
    </body>
</html>
