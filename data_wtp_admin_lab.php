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
      
      <?php include ('proses/menu/menu_admin_lab.php')?>

      <div class="main-content">
        <section class="section">
          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tabel Data Water Treatment Plant</h4>
                  </div>
                  
                  <div class="card-body">
                    
                    <div class="table-responsive">
                    <button class="btn btn-icon btn-info" data-toggle="modal" data-target="#tambah">
                      <i class="fas fa-plus" aria-hidden="true"></i> Tambah 
                                                    </button><br><br>
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                      <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Start water Intake</th>
                                            <th>Stop Water Intake</th>
                                            <th>Start Raw Water</th>
                                            <th>Stop Raw Water</th>
                                            <th>Start Sand Filter 1</th>
                                            <th>Stop Sand Filter 1</th>
                                            <th>Start Sand Filter 2</th>
                                            <th>Stop Sand Filter 2</th>
                                            <th>Start Softener 1</th>
                                            <th>Stop Softener 1</th>
                                            <th>Start Softener 2</th>
                                            <th>Stop Softener 2</th>
                                            <th>Start Pump Domestic 1</th>
                                            <th>Stop Pump Domestic 1</th>
                                            <th>Start Pump Domestic 2</th>
                                            <th>Stop Pump Domestic 2</th>
                                            <th>Soda</th> 
                                            <th>Alum</th>
                                            <th>N3273</th>
                                            <th>N214</th>
                                            <th>N2811</th>
                                            <th>Polymer</th>
                                            <th>NaCL</th>
                                          
                                            <th>Proses Awal</th>
                                            <th>Proses Akhir</th>
                                            <th>Boiler Awal</th>
                                            <th>Boiler Akhir</th>
                                           
                                            <th>Domestic Awal</th>
                                            <th>Domestic Akhir</th>
                                            <th>Waduk</th>
                                            <th>Sungai</th>                                 
                                            <th>Shift Operator</th>                                  
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <?php
                                    
                                                    $query = mysql_query("SELECT * FROM wtp_lab 
                                                    Inner join user on user.id_user = wtp_lab.id_user
                                                    inner join jadwal_shift on jadwal_shift.id_jadwal_shift = wtp_lab.id_jadwal_shift
                                                    inner join shift on shift.id_shift = jadwal_shift.id_shift
                                                    
                                                    ORDER BY id_wtp");
                                                $no = 1;

                                                    while ($data = mysql_fetch_assoc($query)) {?> 
                                    <tbody>
                                        <tr>
                                                <td> <?php echo $no++ ?></td> 
                                                <td> <?php echo $data['nama']; ?></td>
                                                <td> <?= tanggal_indo($data['tanggal']); ?> </td>
                                                <td> <?php echo $data['start_water_intake']; ?></td>
                                                <td> <?php echo $data['stop_water_intake']; ?></td>
                                                <td> <?php echo $data['start_raw_water']; ?></td>
                                                <td> <?php echo $data['stop_raw_water']; ?></td>
                                                <td> <?php echo $data['start_sand_filter1']; ?></td>
                                                <td> <?php echo $data['stop_sand_filter1']; ?></td>
                                                <td> <?php echo $data['start_sand_filter2']; ?></td>
                                                <td> <?php echo $data['stop_sand_filter2']; ?></td>
                                                <td> <?php echo $data['start_softener1']; ?></td>
                                                <td> <?php echo $data['stop_softener1']; ?></td>
                                                <td> <?php echo $data['start_softener2']; ?></td>
                                                <td> <?php echo $data['stop_softener2']; ?></td>
                                                <td> <?php echo $data['start_pump_domestic1']; ?></td>
                                                <td> <?php echo $data['stop_pump_domestic1']; ?></td>
                                                <td> <?php echo $data['start_pump_domestic2']; ?></td>
                                                <td> <?php echo $data['stop_pump_domestic2']; ?></td>
                                                <td> <?php echo $data['soda']; ?></td>
                                                <td> <?php echo $data['alum']; ?></td>
                                                <td> <?php echo $data['N3273']; ?></td>
                                                <td> <?php echo $data['N214']; ?></td>
                                                <td> <?php echo $data['N2811']; ?></td>
                                                <td> <?php echo $data['polymer']; ?></td>
                                                <td> <?php echo $data['NaCL']; ?></td>
                                               
                                                <td> <?php echo $data['proses_awal']; ?></td>
                                                <td> <?php echo $data['proses_akhir']; ?></td>
                                                <td> <?php echo $data['boiler_awal']; ?></td>
                                                <td> <?php echo $data['boiler_akhir']; ?></td>

                                                <td> <?php echo $data['domestic_awal']; ?></td>
                                                <td> <?php echo $data['domestic_akhir']; ?></td>
                                                
                                                <td> <?php echo $data['waduk']; ?></td>
                                                <td> <?php echo $data['sungai']; ?></td>
                                           
                                              
                                                <td> <?php echo $data['shift']; ?></td>
                                                
                                               
                                                <td class="td-actions text-center">
                                                         <a  href ="#edit" data-toggle="modal" data-id="<?php echo $data['id_wtp'];?>" 
                                                         data-target="#edit"><button type="button" rel="tooltip" class="btn btn-icon btn-success">
                                                            <i class="fa fa-edit"> Ubah</i>
                                                        </button></a>

                              <a  href="#" onclick="confirm_modal('proses/admin_lab/hapus_wtp_admin_lab.php?id=<?php echo $data['id_wtp'];?>');">
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

include("proses/modal/wtp_admin_lab.php");

?>
<?php include ("proses/modal/akun.php");?>