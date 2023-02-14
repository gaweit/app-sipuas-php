<nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
            
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">

        <?php
       
          $query =mysql_query("SELECT * FROM wtp_lab WHERE status_admin='Menunggu'");/// status menunggu dideklarasikan dengan 0 
           $z = mysql_num_rows($query)
                           
           ?>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
              <?php echo $z; ?> </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Data WTP
                <div class="float-right">
                  <a href="proses_ubah_notifikasi_admin_lab.php?id_wtp">Lihat Data Semua</a>
                </div>
              </div>
           
             
            </div>
          </li>
         
          <li class="dropdown"><a href="#" data-toggle="dropdown"
		 
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
			  <?php 
                                    $id_user=$_SESSION['id_user'];
                                    $query_mysql = mysql_query("SELECT * FROM user WHERE id_user='$id_user'")or die(mysql_error());
                                    while($data = mysql_fetch_array($query_mysql)){ 
                                        ?>
			  <img alt="image" src="foto/<?php echo $data['foto']?>"
			  <?php } ?>
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
            <?php 
                                    $id_user=$_SESSION['id_user'];
                                    $query_mysql = mysql_query("SELECT * FROM user WHERE id_user='$id_user'")or die(mysql_error());
                                    while($data = mysql_fetch_array($query_mysql)){ 
                                        ?>
              <div class="dropdown-title">Hello, <?php echo $data['nama'] ?></div>
              <?php } ?>

			  <?php 
                                    $id_user=$_SESSION['id_user'];
                                    $query_mysql = mysql_query("SELECT * FROM user WHERE id_user='$id_user'")or die(mysql_error());
                                    while($data = mysql_fetch_array($query_mysql)){ 
                                ?>

              <a href="#editprofil" data-toggle="modal" title="Profil" data-id="<?php echo $data['id_user']; ?>" data-target="#editprofil" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profil
              </a>  <a href="#editakunadmin" data-toggle="modal" title="Kelola" data-id="<?php echo $data['id_user']; ?>" data-target="#editakunadmin" class="dropdown-item has-icon"> <i class="fas fa-key"></i>
                Kelola Sandi
              </a>

			  <?php } ?>

              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="halaman.php"> <img alt="image" src="assets2/logo/logo.png" class="header-logo" /> <span
                class="logo-name">SIPUAS</span>
            </a>
          </div>
          
          <ul class="sidebar-menu">
            <li class="menu-header">Halaman</li>
            <li class="dropdown active">
              <a href="halaman.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
       

         
           
           
            <li class="menu-header">Dokumen</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span> Data Lab</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="data_wtp_admin_lab.php">Water Treatment Plant</a></li>
                <li><a class="nav-link" href="data_arsip_admin_lab.php">Arsip Dokumen</a></li>
                <li><a class="nav-link" href="performance_mill.php">Performance Mill</a></li>
                <li><a class="nav-link" href="losses.php">Losses</a></li>
                <li><a class="nav-link" href="tbs_internal.php">TBS Internal</a></li>
                <li><a class="nav-link" href="tbs_eksternal.php">TBS Eksternal</a></li>
                <li><a class="nav-link" href="kualitas_brondolan.php">Kualitas Brondolan</a></li>
            
              </ul>
            </li>

            

          
           
            <li class="dropdown">
              <a href="logout.php"><i
                  data-feather="power"></i><span>Keluar</span></a> 
            </li>

           
          </ul>
        </aside>
      </div>