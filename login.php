
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

    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo-jateng.png">

    <title>Login Sistem</title>

    <!-- Bootstrap Core CSS -->

    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="css/style.css" rel="stylesheet">

    <!-- You can change the theme colors from here -->

    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

</head>



<body>

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    <!-- <div class="preloader">

        <svg class="circular" viewBox="25 25 50 50">

            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>

    </div> -->

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(assets/images/background/login-register.jpg);">

        <div class="login-box card">

            <div class="card-body">

                <form class="form-horizontal form-material" id="login-form" action="cek_login.php" method="post">

                    <a href="javascript:void(0)" class="text-center db"><img src="assets/images/login-sisda.png" alt="Home" /><br/></a>

                    <div class="form-group m-t-40">
                        <div class="logo text-center">
                        <h2>Login Sistem</h2>
                        </div>

                        <div class="col-xs-12">
                            <p>Username</p>
                            <input class="form-control" type="text" required="" placeholder="Masukan username..." name="username">

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-xs-12">
                            <p>Password</p>

                            <input class="form-control" type="password" required="" placeholder="Masukan password..." name="password">

                        </div>

                    </div>

                    <div class="form-group text-center m-t-20">

                        <div class="col-xs-12">

                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" value=login&nbsp;&nbsp;>Log In</button>

                        </div>

                    </div>

                    

                </form>

                <form class="form-horizontal" id="recoverform" action="index.html">

                    <div class="form-group ">

                        <div class="col-xs-12">

                            <h3>Recover Password</h3>

                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>

                        </div>

                    </div>

                    <div class="form-group ">

                        <div class="col-xs-12">

                            <input class="form-control" type="text" required="" placeholder="Email">

                        </div>

                    </div>

                    <div class="form-group text-center m-t-20">

                        <div class="col-xs-12">

                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="js/jquery.slimscroll.js"></script>

    <!--Wave Effects -->

    <script src="js/waves.js"></script>

    <!--Menu sidebar -->

    <script src="js/sidebarmenu.js"></script>

    <!--stickey kit -->

    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->

    <script src="js/custom.min.js"></script>

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->

    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>



</html>