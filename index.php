<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
   
    <link rel="icon" type="image/png" href="assets2/logo/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SI - PUAS</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets2/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets2/css/font-awesome.css" rel="stylesheet" />
    <link href="assets2/css/google-roboto-300-700.css" rel="stylesheet" />

</head>


<body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"></a>
            </div>
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                   
                   
                    <li>
                        <a href="laporan.php">
                            <i class="material-icons">report</i> Aduan
                        </a>
                    </li>
                    <li>
                        <a href="informasi.php">
                            <i class="material-icons">info</i> Informasi
                        </a>
                    </li>

                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="assets2/awal.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                             <form method="post" action="ceklogin.php">
                               <div class="card card-profile card-hidden">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="avatar" src="assets2/logo/logo.png" alt="...">
                                        </a>
                                    </div>
                                   
                                    <div class="card-content">
                                        <h4 class="card-title">SIGN</h4>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                 <label class="control-label">Username</label>
                                                <input type="text" id="username" name="username"  class="form-control"  required />
                                               
                                            </div>
                                        </div>
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" id="password" name="password"  class="form-control"  required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button name="submit" type="submit" class="btn btn-rose btn-round">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                  
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                 
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Sistem Informasi Priority & Upkeep Assesment PT. Citra Putra Kebun Asri (CPKA) Jorong Factory Berbasis Mobile</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown"></a>
        
    </div>
</div>
</body>
<script src="assets2/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets2/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets2/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets2/js/material.min.js" type="text/javascript"></script>
<script src="assets2/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets2/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets2/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="assets2/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="assets2/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets2/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="assets2/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets2/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets2/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets2/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="assets2/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets2/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets2/js/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets2/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets2/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets2/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets2/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets2/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>