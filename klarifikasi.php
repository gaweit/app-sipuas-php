<?php
ini_set("display_errors",0);
include("includes/defines.php");
include("includes/fungsi.php");
include("includes/tgl_indo.php");
cekSession();

?>

<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="assets2/logo/logo.png" />
    <title>SI - PUAS</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">



</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <?php include ('proses/menu/menu_admin_proses.php')?>

            <div class="main-content">
                <section class="section">
                    <div class="section-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Tabel Data klarifikasi</h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5>Proses</h5>
                                            <button type="button" class="btn btn-icon btn-success">Normal</button>
                                            <button type="button" class="btn btn-icon btn-warning">Tidak Normal</button>
                                            <button type="button" class="btn btn-icon btn-info">Standby</button>
                                            <button type="button" class="btn btn-icon btn-danger">Rusak</button>
                                        </div>
                                        <div class="table-responsive">
                                            <button class="btn btn-icon btn-info" data-toggle="modal"
                                                data-target="#tambah">
                                                <i class="fas fa-plus" aria-hidden="true"></i> Tambah </button><br><br>
                                            <table class="table table-striped table-hover" id="save-stage"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>tanggal </th>
                                                        <th>vibrating_screen01</th>
                                                        <th>vibrating_screen02</th>
                                                        <th>vibrating_screen03</th>
                                                        <th>vibrating_screen04</th>
                                                        <th>cop_ssc_01</th>
                                                        <th>cop_ssc_02</th>
                                                        <th>cop_ssc_03</th>
                                                        <th>cop_ssc_04</th>
                                                        <th>sand_cyclone_ssc01</th>
                                                        <th>sand_cyclone_ssc02</th>
                                                        <th>vacum_dryer_w__c_pump_01</th>
                                                        <th>pop_01</th>
                                                        <th>pop_02</th>
                                                        <th>dotp_01</th>
                                                        <th>dotp_02</th>
                                                        <th>flow_meter</th>
                                                        <th>orp_01</th>
                                                        <th>orp_02</th>
                                                        <th>slugepump_01</th>
                                                        <th>slugedump_02</th>
                                                        <th>decanter_01</th>
                                                        <th>decanter_02</th>
                                                        <th>dcc</th>
                                                        <th>heavyphase_p01</th>
                                                        <th>heavyphase_p02</th>
                                                        <th>lighphase_p01</th>
                                                        <th>lighphase_p02</th>
                                                        <th>sluge_s01</th>
                                                        <th>sluge_s02</th>
                                                        <th>sluge_s03</th>
                                                        <th>rsp_01_tfp_2</th>
                                                        <th>rsp_02_tfp_2</th>
                                                        <th>sop_01</th>
                                                        <th>sop_02</th>
                                                        <th>hwp_01</th>
                                                        <th>hwp_02</th>
                                                        <th>compresor</th>
                                                        <th>fat_pit</th>
                                                        <th>oiltank_1</th>
                                                        <th>oiltank_2</th>
                                                        <th>buffertank_decanter</th>
                                                        <th>bt_ss</th>
                                                        <th>recovery_tank</th>
                                                        <th>sluge_tank</th>
                                                        <th>ket</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <?php
                          
                          $query = mysql_query("SELECT * FROM klarifikasi ORDER BY tanggal ASC");
                          $no = 1;

                          while ($data = mysql_fetch_assoc($query)) {?>
                                                <tbody>
                                                    <tr>
                                                        <td> <?php echo $no++ ?></td>
                                                        <td> <?php echo $data['tanggal']; ?></td>
                                                        <?php if($data['vibrating_screen01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['vibrating_screen02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['vibrating_screen03'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen03'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen03'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['vibrating_screen04'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen04'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen04'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vibrating_screen04'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['cop_ssc_01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['cop_ssc_02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['cop_ssc_03'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_03'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_03'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['cop_ssc_04'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_04'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_04'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['cop_ssc_04'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['sand_cyclone_ssc01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_cyclone_ssc01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_cyclone_ssc01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_cyclone_ssc01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['sand_cyclone_ssc02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_cyclone_ssc02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_cyclone_ssc02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_cyclone_ssc02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['vacum_dryer_w__c_pump_01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vacum_dryer_w__c_pump_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vacum_dryer_w__c_pump_01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['vacum_dryer_w__c_pump_01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['pop_01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['pop_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['pop_01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['pop_01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['pop_02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['pop_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['pop_02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['pop_02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['dotp_01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['dotp_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['dotp_01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['dotp_01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['dotp_02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['dotp_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['dotp_02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['dotp_02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['flow_meter'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['flow_meter'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['flow_meter'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['flow_meter'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['orp_01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['orp_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['orp_01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['orp_01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['orp_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['orp_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['orp_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['orp_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>

                                                        <?php if($data['slugepump_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['slugepump_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['slugepump_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['slugepump_01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['slugedump_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['slugedump_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['slugedump_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['slugedump_02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['decanter_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['decanter_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['decanter_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['decanter_01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['decanter_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['decanter_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['decanter_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['decanter_02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['dcc'] == "Normal"){ ?> <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['dcc'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['dcc'] == "Standby"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['dcc'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['heavyphase_p01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['heavyphase_p01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['heavyphase_p01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['heavyphase_p01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['heavyphase_p02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['heavyphase_p02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['heavyphase_p02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['heavyphase_p02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['lighphase_p01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['lighphase_p01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['lighphase_p01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['lighphase_p01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['lighphase_p02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['lighphase_p02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['lighphase_p02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['lighphase_p02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['sluge_s01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['sluge_s02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['sluge_s03'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s03'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_s03'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['rsp_01_tfp_2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rsp_01_tfp_2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rsp_01_tfp_2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rsp_01_tfp_2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['rsp_02_tfp_2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rsp_02_tfp_2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rsp_02_tfp_2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rsp_02_tfp_2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['sop_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sop_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sop_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sop_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['sop_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sop_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sop_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sop_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hwp_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hwp_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hwp_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hwp_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hwp_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hwp_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hwp_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hwp_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['compresor'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['compresor'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['compresor'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['compresor'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['fat_pit'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fat_pit'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fat_pit'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fat_pit'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['oiltank_1'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['oiltank_1'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['oiltank_1'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['oiltank_1'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['oiltank_2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['oiltank_2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['oiltank_2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['oiltank_2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['buffertank_decanter'] == "Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['buffertank_decanter'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['buffertank_decanter'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['buffertank_decanter'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['bt_ss'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['bt_ss'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['bt_ss'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['bt_ss'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['recovery_tank'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['recovery_tank'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['recovery_tank'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['recovery_tank'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['sluge_tank'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_tank'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_tank'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['sluge_tank'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['ket'] == "Normal"){ ?> <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ket'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ket'] == "Standby"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ket'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>

                                                        <td> <?php echo $data['keterangan']; ?></td>

                                                        <td class="td-actions text-center">
                                                            <a href="#edit" data-toggle="modal"
                                                                data-id="<?php echo $data['id_klarifikasi'];?>"
                                                                data-target="#edit"><button type="button" rel="tooltip"
                                                                    class="btn btn-icon btn-success">
                                                                    <i class="fa fa-edit"> Ubah</i>
                                                                </button></a>

                                                            <a href="#"
                                                                onclick="confirm_modal('proses/administrator/hapus_klarifikasi.php?id=<?php echo $data['id_klarifikasi'];?>');">
                                                                <button type="button" rel="tooltip"
                                                                    class="btn btn-icon btn-danger">
                                                                    <i class="fas fa-trash"> Hapus</i>
                                                                </button></a>


                                                        </td>
                                                    </tr>

                                                </tbody>
                                                <?php  } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Sistem Informasi Priority & Upkeep Assesment PT. Citra Putra Kebun Asri
                        (CPKA) Jorong Factory Berbasis Mobile</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/datatables.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/cleave-js/dist/cleave.min.js"></script>
    <script src="assets/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
    <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/forms-advanced-forms.js"></script>
    <!-- Template JS File -->



    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->

</html>

<?php 

    include("proses/modal/klarifikasi_modal.php");

    ?>
<?php include ("proses/modal/akun.php");?>