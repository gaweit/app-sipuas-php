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
                                        <h4>Tabel Data nut_kernel</h4>
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
                                                        <th>hcbc</th>
                                                        <th>fcf_a__l_01</th>
                                                        <th>fcf_a__l_02</th>
                                                        <th>npd_01</th>
                                                        <th>npd_02</th>
                                                        <th>inclened_wnc_01</th>
                                                        <th>inclened_wnc_02</th>
                                                        <th>wet_ne_01</th>
                                                        <th>wet_ne_02</th>
                                                        <th>nut_df_a__l01</th>
                                                        <th>primari_wf_a__l01</th>
                                                        <th>primari_wf_a__l02</th>
                                                        <th>scondary_wf_a__l01</th>
                                                        <th>scondary_wf_a__l02</th>
                                                        <th>nut_hopper</th>
                                                        <th>rm_01</th>
                                                        <th>rm_02</th>
                                                        <th>rm_03</th>
                                                        <th>rm_04</th>
                                                        <th>cmc_01</th>
                                                        <th>cmc_02</th>
                                                        <th>cms</th>
                                                        <th>hp01_line1</th>
                                                        <th>hp02_line1</th>
                                                        <th>hp03_line1</th>
                                                        <th>hp01_line2</th>
                                                        <th>hp02_line2</th>
                                                        <th>hp03_line2</th>
                                                        <th>wetshell_c</th>
                                                        <th>wetshell_tf</th>
                                                        <th>wkc_01</th>
                                                        <th>wkc_02</th>
                                                        <th>wkc_03</th>
                                                        <th>wke_01</th>
                                                        <th>wke_02</th>
                                                        <th>wkdc</th>
                                                        <th>kds_hf01</th>
                                                        <th>kds_hf02</th>
                                                        <th>kds_hf03</th>
                                                        <th>bottom_kc</th>
                                                        <th>dry_ktf</th>
                                                        <th>kbs_01</th>
                                                        <th>ltds_al1</th>
                                                        <th>ltds_al2</th>
                                                        <th>kernel_silo1</th>
                                                        <th>kernel_silo2</th>
                                                        <th>kernel_silo3</th>
                                                        <th>ket</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <?php
                          
                          $query = mysql_query("SELECT * FROM nut_kernel ORDER BY tanggal ASC");
                          $no = 1;

                          while ($data = mysql_fetch_assoc($query)) {?>
                                                <tbody>
                                                    <tr>
                                                        <td> <?php echo $no++ ?></td>
                                                        <td> <?php echo $data['tanggal']; ?></td>


                                                        <?php if($data['hcbc'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hcbc'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hcbc'] == "Standby"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hcbc'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['fcf_a__l_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fcf_a__l_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fcf_a__l_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fcf_a__l_01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['fcf_a__l_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fcf_a__l_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fcf_a__l_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['fcf_a__l_02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['npd_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['npd_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['npd_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['npd_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['npd_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['npd_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['npd_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['npd_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['inclened_wnc_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['inclened_wnc_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['inclened_wnc_01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['inclened_wnc_01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['inclened_wnc_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['inclened_wnc_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['inclened_wnc_02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['inclened_wnc_02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wet_ne_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wet_ne_01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wet_ne_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wet_ne_01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wet_ne_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wet_ne_02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wet_ne_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wet_ne_02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['nut_df_a__l01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['nut_df_a__l01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['nut_df_a__l01'] == "Standby"){ ?>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['nut_df_a__l01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['primari_wf_a__l01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['primari_wf_a__l01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['primari_wf_a__l01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['primari_wf_a__l01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['primari_wf_a__l02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['primari_wf_a__l02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['primari_wf_a__l02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['primari_wf_a__l02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['scondary_wf_a__l01'] == "Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['scondary_wf_a__l01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['scondary_wf_a__l01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['scondary_wf_a__l01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['scondary_wf_a__l02'] == "Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['scondary_wf_a__l02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['scondary_wf_a__l02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['scondary_wf_a__l02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['nut_hopper'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['nut_hopper'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['nut_hopper'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['nut_hopper'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['rm_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['rm_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['rm_03'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_03'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_03'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_03'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['rm_04'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_04'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_04'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['rm_04'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['cmc_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cmc_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cmc_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cmc_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['cmc_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cmc_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cmc_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cmc_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['cms'] == "Normal"){ ?> <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cms'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cms'] == "Standby"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['cms'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hp01_line1'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp01_line1'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp01_line1'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp01_line1'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hp02_line1'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp02_line1'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp02_line1'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp02_line1'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hp03_line1'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp03_line1'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp03_line1'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp03_line1'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hp01_line2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp01_line2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp01_line2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp01_line2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hp02_line2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp02_line2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp02_line2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp02_line2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['hp03_line2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp03_line2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp03_line2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['hp03_line2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wetshell_c'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wetshell_c'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wetshell_c'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wetshell_c'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wetshell_tf'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wetshell_tf'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wetshell_tf'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wetshell_tf'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wkc_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wkc_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wkc_03'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_03'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_03'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkc_03'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wke_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wke_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wke_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wke_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wke_02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wke_02'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wke_02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wke_02'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['wkdc'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkdc'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkdc'] == "Standby"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['wkdc'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kds_hf01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf01'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kds_hf02'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf02'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf02'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kds_hf03'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf03'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kds_hf03'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['bottom_kc'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['bottom_kc'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['bottom_kc'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['bottom_kc'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['dry_ktf'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['dry_ktf'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['dry_ktf'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['dry_ktf'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kbs_01'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kbs_01'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kbs_01'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kbs_01'] == "Rusak"){ ?> <td> <button
                                                                type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['ltds_al1'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ltds_al1'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ltds_al1'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ltds_al1'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['ltds_al2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ltds_al2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ltds_al2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['ltds_al2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kernel_silo1'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo1'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo1'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo1'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kernel_silo2'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo2'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo2'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo2'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['kernel_silo3'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo3'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo3'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['kernel_silo3'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>
                                                        <?php if($data['tanggal'] == "Normal"){ ?> <td><button
                                                                type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['tanggal'] == "Tidak Normal"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['tanggal'] == "Standby"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php }elseif($data['tanggal'] == "Rusak"){ ?> <td>
                                                            <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td> <?php } ?>

                                                        <td> <?php echo $data['ket']; ?></td>

                                                        <td class="td-actions text-center">
                                                            <a href="#edit" data-toggle="modal"
                                                                data-id="<?php echo $data['id_nutkernel'];?>"
                                                                data-target="#edit"><button type="button" rel="tooltip"
                                                                    class="btn btn-icon btn-success">
                                                                    <i class="fa fa-edit"> Ubah</i>
                                                                </button></a>

                                                            <a href="#"
                                                                onclick="confirm_modal('proses/administrator/hapus_nut_kernel.php?id=<?php echo $data['id_nutkernel'];?>');">
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

    include("proses/modal/nut_kernel_modal.php");

    ?>
<?php include ("proses/modal/akun.php");?>