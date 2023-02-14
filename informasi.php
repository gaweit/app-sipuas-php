﻿<?php
ini_set("display_errors",0);
 include("includes/defines.php");

 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets2/logo/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SI - PUAS</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

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
                        <div class="col-md-12">
                             <form action="proses/modal/proses_aduan.php" method="POST" enctype="multipart/form-data">
                               
                                    
                                     <div class="card card-plain">
                                <div class="card-content">
                                    <ul class="timeline">
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                                <i class="material-icons">build</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-danger">Informasi</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>PT.Citra Putra Kebun Asri (CPKA) dimulai pada Juli 2003 atas prakarsa Ibu Rosita S. Kalianda dimulai dengan kebun percontohan seluas 30 hektar yang beralokasi di Desa Sei Jelai, Kecamatan Tambang Ulang, Kabupaten Tanah Laut, Kalimantan Selatan. Prinsip Manusia Republik Indonesia No. C-23951 HT.01.04. Tahun 2006 dan diumumkan dan diperbarui dalam basis data Sismimbakum dari Direktur Jenderal Administrasi Hukum Umum pada tanggal 15 Agustus 2006.
Setelah itu perusahaan direorganisasi dengan mengundang prinsip-prinsip manajemen perkebunan moderen. PT.CPKA hingga 2009 memiliki potensi 3000 hektar yang tersebar di Desa Jorong 1.500 hektar, Desa Pemuda 600 hektar, Desa Alur 500 hektar dan Desa Sawarangan 500 hektar. 
PT.CPKA memperoleh akta perubahan Anggaran Dasar Menteri Hukum dan Hak Asasi Manusia Republik Indonesia yang berlaku sejak 3 Agustus 2006 dimana PT.CPKA bergerak dalam bisnis perkebunan kelapa sawit dan Pabrik Kelapa Sawit atau PKS memiliki perkebunan utama di Desa Jorong, Distrik Jorong Kabupaten Tanah Laut dan memiliki kantor pusat di Jl. Sei Mesa Simpang , Banjarmasin dan Pabrik Kelapa Sawit dengan kapasitas 30 ton/jam mulai didirikan pada 17 Juni 2013 dan mulai beroperasi pada 13 September 2014.</p>
                                                </div>
                                               
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                                <i class="material-icons">group</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-success">Pengguna</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Sistem Informasi Priority & Upkeep Assesment PT. Citra Putra Kebun Asri (CPKA) Jorong Factory Berbasis Mobile - Digunakan oleh beberapa user (Manager, Administrator, dan Admin Perdivisi) </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge info">
                                                <i class="material-icons">call</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-info">Kontak</span>
                                                </div>
                                                <div class="timeline-body">
                                                  
                                                    <p>Kontak Whatsapp</p>
                                                    <p>085750636528</p></i>   
                                                </div>
                                            </div>
                                        </li>

                                       
                                    </ul>
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
                        <a href="#">Sistem Informasi Priority & Upkeep Assesment PT. Citra Putra Kebun Asri (CPKA) Jorong Factory Berbasis Web</a>
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
<?php 
include ('proses/fungsi/angka_huruf.php');
 include("proses/tampilan/fungsitampilan.php");
 include("proses/arahan/daftar.php");
?>

</html>