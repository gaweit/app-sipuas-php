<?php
    include ("../includes/defines.php");
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
                <form action="proses/proses_kelola_profil_administrator.php" method="POST" enctype="multipart/form-data" >
                    <div class="card-header">
                      <h4>Perubahan Profil</h4>
                    </div>
                    <div class="card-body pb-0">
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-user"></i>
                            </div>
                          </div>
                          <input hidden="hidden" type="text" name="id_user" value="<?php echo $data['id_user']; ?>">
                          <input type="file" class="form-control" name="file" placeholder="Masukkan Foto" value="<?php echo $data['foto']; ?>" required>
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