<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/assets/images/favicon.png') }}">
    <title>FROE | Login</title>

    <!-- page css -->
    <link href="{{ asset('template/dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template/dist/css/style.min.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border" style="background-image: linear-gradient(to bottom right, #03a9f3, #03a9f3);">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">FROE</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card" style="border-radius: 10px">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST"
                        action="{{ route('login') }}">
                        @csrf

                        <h2 class="text-center">
                            <img style="height:120px;width:auto"
                                src="{{ asset('template/assets/images/default-admin.png') }}" alt="Logo">
                        </h2>

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="toast mb-2 d-flex align-items-center text-white bg-danger border-0" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-body">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="info" class="fill-white feather-sm me-2"></i> {{ $error }}
                                    </div>
                                </div>
                                <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            @endforeach
                        @endif

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required=""
                                    placeholder="Username or Email Address" name="identity" :value="old('identity')"
                                    required autofocus autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password"
                                    name="password">
                            </div>
                        </div>

                        <input type="hidden" value="administrator" name="role">
                        <div class="form-group text-center" style="margin-bottom: 0">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn w-100 btn-lg btn-info btn-rounded text-white" type="submit">Log
                                    In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('template/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(document).on('click', '.btn-close', function() {
            $(this).parent().fadeOut(300, function() {
                $(this).remove();
            })
        });

        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>

</html>
