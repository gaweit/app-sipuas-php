<?php
    include ("../includes/defines.php");
    if(isset($_POST['idshift']))
    {
        $idshift=$_POST['idshift'];
        $query=mysql_query("SELECT * FROM shift WHERE id_shift=$idshift");
        $data=mysql_fetch_assoc($query);
    }
?>  
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Shift</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/proses_ubah_shift_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Shift</label>
                        <input hidden="hidden" type="text" name="id_shift" value="<?php echo $data['id_shift']; ?>">
                        <input type="text" name="shift" class="form-control"  placeholder="Masukkan Data Shift" value="<?php echo $data['shift']; ?>" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Keterangan</label>
                        <input type="file" name="file" class="form-control"  placeholder="Masukkan Data Shift" value="<?php echo $data['keterangan']; ?>" required >
                        </div>

                        
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>