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
                                        <h4>Tabel Data Press</h4>
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
                                                        <th>bottom_cross_conveyor</th>
                                                        <th>fruit_evalator01</th>
                                                        <th>fruit_evalator02</th>
                                                        <th>fruit_evalator03</th>
                                                        <th>top_fdc</th>
                                                        <th>digester01</th>
                                                        <th>digester02</th>
                                                        <th>digester03</th>
                                                        <th>digester04</th>
                                                        <th>digester05</th>
                                                        <th>press01</th>
                                                        <th>press02</th>
                                                        <th>press03</th>
                                                        <th>press04</th>
                                                        <th>press05</th>
                                                        <th>sand_trap_tank</th>
                                                        <th>screen_waste_conveyor01</th>
                                                        <th>screen_waste_conveyor02</th>
                                                        <th>keterangan</th>
                                                        <th>tanggal</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <?php
                          
                          $query = mysql_query("SELECT * FROM press ORDER BY tanggal ASC");
                          $no = 1;

                          while ($data = mysql_fetch_assoc($query)) {?>
                                                <tbody>
                                                    <tr>
                                                        <td> <?php echo $no++ ?></td>
                                                        <td> <?php echo $data['tanggal']; ?></td>
                                                        <?php if($data['bottom_cross_conveyor'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['bottom_cross_conveyor'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['bottom_cross_conveyor'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['bottom_cross_conveyor'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['fruit_evalator01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['fruit_evalator02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['fruit_evalator03'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator03'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['fruit_evalator03'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['top_fdc'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['top_fdc'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['top_fdc'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['top_fdc'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['digester01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['digester02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['digester03'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester03'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester03'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['digester04'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester04'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester04'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester04'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['digester05'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester05'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester05'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['digester05'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['press01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['press02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['press03'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press03'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press03'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press03'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['press04'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press04'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press04'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press04'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['press05'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press05'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press05'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['press05'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['sand_trap_tank'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_trap_tank'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_trap_tank'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['sand_trap_tank'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['screen_waste_conveyor01'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['screen_waste_conveyor01'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['screen_waste_conveyor01'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['screen_waste_conveyor01'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <?php if($data['screen_waste_conveyor02'] == "Normal"){ ?>
                                                        <td><button type="button"
                                                                class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['screen_waste_conveyor02'] == "Tidak Normal"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['screen_waste_conveyor02'] == "Standby"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php }elseif($data['screen_waste_conveyor02'] == "Rusak"){ ?>
                                                        <td> <button type="button"
                                                                class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        </td>
                                                        <?php } ?>

                                                        <td> <?php echo $data['keterangan']; ?></td>

                                                        <td class="td-actions text-center">
                                                            <a href="#edit" data-toggle="modal"
                                                                data-id="<?php echo $data['id_press'];?>"
                                                                data-target="#edit"><button type="button" rel="tooltip"
                                                                    class="btn btn-icon btn-success">
                                                                    <i class="fa fa-edit"> Ubah</i>
                                                                </button></a>

                                                            <a href="#"
                                                                onclick="confirm_modal('proses/administrator/hapus_press.php?id=<?php echo $data['id_press'];?>');">
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

    include("proses/modal/press_modal.php");

    ?>
<?php include ("proses/modal/akun.php");?>