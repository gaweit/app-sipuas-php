<?php
    include ("../../includes/defines.php");
    if(isset($_POST['iduser']))
    {
        $iduser=$_POST['iduser'];
        $query=mysql_query("SELECT * FROM user WHERE id_user=$iduser");
        $data=mysql_fetch_assoc($query);
    }
?>   
                   

            <div class="row">
              <div class="col-12 col-sm-6 col-lg-6">
                
                <div class="card">
                  <div class="card-header">
                    <h4>Profil</h4>
                   
                  </div>
                  <div class="card-body">
                    <div class="mb-2 text-muted"></div>
                   
                    <div class="chocolat-parent">
                      <a href="#" class="chocolat-image" title="Just an example">
                        
                      <div data-crop-image="285">
                          <img alt="image" src="foto/<?php echo $data['foto']?>"class="img-fluid">
                        </div>
                      </a>
                    </div>
                 
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-6">
                
                <div class="card" id="sample-login">
                <form action="proses/administrator/proses_kelola_akun_administrator.php" method="POST" enctype="multipart/form-data" >
                    <div class="card-header">
                      <h4>Perubahan Sandi</h4>
                    </div>
                    <div class="card-body pb-0">
                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-user"></i>
                            </div>
                          </div>
                          <input hidden="hidden" type="text" name="id_user" value="<?php echo $data['id_user']; ?>">
                          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo $data['nama']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-user"></i>
                            </div>
                          </div>
                          
                          <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $data['username']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-lock"></i>
                            </div>
                          </div>
                          <input type="password" class="form-control" name="password" placeholder="Masukkan Password" value="<?php echo $data['password']; ?>" required>
                        </div>
                      </div>
                     
                    </div>
                    <div class="card-footer pt-">
                    <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                 
                    </div>
                  </form>
                </div>
              </div>
            </div>