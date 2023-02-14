<?php
    include ("../../includes/defines.php");
    if(isset($_POST['idbag']))
    {
        $idbag=$_POST['idbag'];
        $query=mysql_query("SELECT * FROM bagian WHERE id_bagian=$idbag");
        $data=mysql_fetch_assoc($query);
    }
?>   
                   

            <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Bagian</h4>
                  </div>
                  <div class="card-body">
                  <form action="proses/administrator/proses_ubah_bagian_administrator.php" method="POST" enctype="multipart/form-data" >
                    <div class="form-row">
                  
                      <div class="form-group col-md-12">
                        <label for="inputEmail4">Bagian</label>
                        <input hidden="hidden" type="text" name="id_bagian" value="<?php echo $data['id_bagian']; ?>">
                        <input type="text" name="bagian" class="form-control" value="<?php echo $data['bagian']; ?>"
                         placeholder="Masukkan Data Bagian" required >
                      </div>
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
                </div>