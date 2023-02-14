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
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
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

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span> DATA PROSES</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="penerimaan_buah.php">Penerimaan Buah</a></li>
                <li><a class="nav-link" href="rebusan.php">Rebusan</a></li>
                <li><a class="nav-link" href="bantingan.php">Bantingan</a></li>
                <li><a class="nav-link" href="press.php">Press</a></li>
                <li><a class="nav-link" href="klarifikasi.php">Klarifikasi</a></li>
                <li><a class="nav-link" href="nut_kernel.php">Nut & Kernel</a></li>
                <li><a class="nav-link" href="boiler.php">Boiler</a></li>
                <li><a class="nav-link" href="kamar_mesin.php">Kamar Mesin</a></li>
                <li><a class="nav-link" href="tangki_timbun.php">Tangki Timbun</a></li>
                <li><a class="nav-link" href="water_treatment.php">Water Treatment</a></li>
                <li><a class="nav-link" href="pengolahan_limbah.php">Pengolahan Limbah</a></li>
                <li><a class="nav-link" href="janjang_kosong.php">Janjang Kosong</a></li>
              </ul>
            </li>
            
            
           
            <li class="dropdown">
              <a href="logout.php"><i
                  data-feather="power"></i><span>Keluar</span></a> 
            </li>

           
          </ul>
        </aside>
      </div>