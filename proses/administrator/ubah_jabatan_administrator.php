<?php
    include ("../../includes/defines.php");
    if(isset($_POST['idjab']))
    {
        $idjab=$_POST['idjab'];
        $query=mysql_query("SELECT * FROM jabatan WHERE id_jabatan=$idjab");
        $data=mysql_fetch_assoc($query);
    }
?>   
                   

            <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Jabatan</h4>
                  </div>
                  <div class="card-body">
                  <form action="proses/administrator/proses_ubah_jabatan_administrator.php" method="POST" enctype="multipart/form-data" >
                    <div class="form-row">
                  
                      <div class="form-group col-md-12">
                        <label for="inputEmail4">Jabatan</label>
                        <input hidden="hidden" type="text" name="id_jabatan" value="<?php echo $data['id_jabatan']; ?>">
                        <input type="text" name="jabatan" class="form-control" value="<?php echo $data['jabatan']; ?>" placeholder="Masukkan Data Jabatan" required >
                      </div>
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
                </div>