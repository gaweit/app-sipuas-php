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
                    <h4>Tabel Data Rebusan</h4>
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
                      <button class="btn btn-icon btn-info" data-toggle="modal" data-target="#tambah">
                        <i class="fas fa-plus" aria-hidden="true"></i> Tambah </button><br><br>
                        <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Fruit Transfer Carriage 01</th>
                              <th>Fruit Transfer Carriage 02</th>
                              <th>Sterilizer 01</th>
                              <th>Sterilizer 02</th>
                              <th>Sterilizer 03</th>
                              <th>Drawbridge 01</th>
                              <th>Drawbridge 02</th>
                              <th>Drawbridge 03</th>
                              <th>Power Pack 1</th>
                              <th>Power Pack 2</th>
                              <th>Power Pack 3</th>
                              <th>Hydroulik Under Tow 01</th>
                              <th>Hydroulik Under Tow 02</th>
                              <th>Hydroulik Under Tow 03</th>
                              <th>Hydroulik Under Tow 04</th>
                              <th>Hydroulik Under Tow 05</th>
                              <th>Hydroulik Under Tow 06</th>
                              <th>Hydroulik Under Tow 07</th>
                              <th>Blowdown Chambers</th>
                              <th>Keterangan</th>
                              <th>Aksi</th>
                              
                            </tr>
                          </thead>
                          <?php
                          
                          $query = mysql_query("SELECT * FROM rebusan_proses ORDER BY tanggal ASC");
                          $no = 1;

                          while ($data = mysql_fetch_assoc($query)) {?> 
                            <tbody>
                              <tr>
                                <td> <?php echo $no++ ?></td> 
                                <td> <?php echo $data['tanggal']; ?></td>
                                <?php if($data['fruit_tc01'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['fruit_tc01'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['fruit_tc01'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['fruit_tc01'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>
                                
                                <?php if($data['fruit_tc02'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['fruit_tc02'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['fruit_tc02'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['fruit_tc02'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['sterilizer01'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer01'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer01'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer01'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['sterilizer02'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer02'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer02'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer02'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['sterilizer03'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer03'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer03'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['sterilizer03'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['drawbridge01'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge01'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge01'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge01'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['drawbridge02'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge02'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge02'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge02'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['drawbridge03'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge03'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge03'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['drawbridge03'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['power_pack01'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack01'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack01'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack01'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['power_pack02'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack02'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack02'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack02'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['power_pack03'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack03'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack03'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['power_pack03'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut01'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut01'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut01'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut01'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut02'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut02'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut02'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut02'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut03'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut03'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut03'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut03'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut04'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut04'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut04'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut04'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut05'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut05'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut05'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut05'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut06'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut06'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut06'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut06'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['hut07'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut07'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut07'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['hut07'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <?php if($data['blowdown_chambers'] == "Normal"){ ?>
                                  <td><button type="button" class="btn btn-icon btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['blowdown_chambers'] == "Tidak Normal"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['blowdown_chambers'] == "Standby"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php }elseif($data['blowdown_chambers'] == "Rusak"){ ?>
                                  <td> <button type="button" class="btn btn-icon btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>
                                <?php } ?>

                                <td> <?php echo $data['ket_reb']; ?></td>
                                
                                <td class="td-actions text-center">
                                 <a  href ="#edit" data-toggle="modal" data-id="<?php echo $data['id_reb'];?>" 
                                   data-target="#edit"><button type="button" rel="tooltip" class="btn btn-icon btn-success">
                                    <i class="fa fa-edit"> Ubah</i>
                                  </button></a>
                                  
                                  <a  href="#" onclick="confirm_modal('proses/administrator/hapus_rebusan.php?id=<?php echo $data['id_reb'];?>');">
                                    <button type="button" rel="tooltip" class="btn btn-icon btn-danger">
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
                        <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                        <span class="selectgroup-button">Light</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                        <span class="selectgroup-button">Dark</span>
                      </label>
                    </div>
                  </div>
                  <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                      <label class="selectgroup-item">
                        <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                        data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
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
              <a href="templateshub.net">Sistem Informasi Priority & Upkeep Assesment PT. Citra Putra Kebun Asri (CPKA) Jorong Factory Berbasis Mobile</a></a>
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

    include("proses/modal/rebusan_administrator.php");

    ?>
    <?php include ("proses/modal/akun.php");?>