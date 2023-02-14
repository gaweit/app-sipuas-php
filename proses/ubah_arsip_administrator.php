<?php
    include ("../includes/defines.php");
    if(isset($_POST['idarsip']))
    {
        $idarsip=$_POST['idarsip'];
        $query=mysql_query("SELECT * FROM arsip WHERE id_arsip=$idarsip");
        $data=mysql_fetch_assoc($query);
    }
?>  
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Arsip</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/proses_ubah_arsip_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Judul</label>
                        <input hidden="hidden" type="text" name="id_arsip" value="<?php echo $data['id_arsip']; ?>">
                        <input type="text" name="judul" class="form-control"  placeholder="Masukkan Data Judul" value="<?php echo $data['judul']; ?>" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">File</label>
                        <input type="file" name="file" class="form-control"  placeholder="Masukkan Data File" value="<?php echo $data['file']; ?>" required >
                        </div>

                        
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>