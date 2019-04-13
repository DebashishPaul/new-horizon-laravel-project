<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('backend/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/font-awesome-4.7/backend/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/font-awesome-5/backend/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/mdi-font/backend/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('backend/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('backend/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backend/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('backend/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('backend/images/icon/logo.png')}}" alt="CoolAdmin">
                            </a>
                        </div>

                        <div class="login-form">
                            @if(Session::has('green'))
                                  <div class="alert alert-success"><p style="font-size:20px; text-align:center;"><b>
                                    {{Session::get('green')}}
                                  </b></p></div>
                            @endif

                            @if(Session::has('red'))
                                  <div class="alert alert-danger"><p style="font-size:20px; text-align:center;"><b>
                                    {{Session::get('red')}}
                                  </b></p></div>
                            @endif

                            @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                            @endif

                            <form action="{{url('/loginCheck')}}" method="post">
                              {{csrf_field()}}
                                <input type="text" name="email" class="form-control" placeholder="Email"><br>

                                <input type="password" name="password" class="form-control" placeholder="Password"><br>
                
                                <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>

                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('backend/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('backend/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('backend/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('backend/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/vendor/chartbackend/js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('backend/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('backend/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->