<?php
include ("../../includes/defines.php");
if(isset($_POST['id_kb']))
{
    $id_kb=$_POST['id_kb'];
    $query=mysql_query("SELECT * FROM kualitas_brondolan WHERE id_kb=$id_kb");
    $data=mysql_fetch_assoc($query);

  
}

?>             

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Ubah Data Kualitas Brondolan</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_kb.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_kb" value="<?= $data['tgl_kb']; ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input hidden="hidden" type="text" name="id_kb" value="<?= $data['id_kb']; ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Kualitas Brondolan</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Brondolan to TBS</label>
                                    <input type="text" name="to_tbs" class="form-control" value="<?= $data['to_tbs']; ?>" placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Brondolan Segar</label>
                                    <input type="text" name="segar" class="form-control" value="<?= $data['segar']; ?>" placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Brondolan Busuk</label>
                                    <input type="text" name="busuk" class="form-control" value="<?= $data['busuk']; ?>" placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Sampah</label>
                                    <input type="text" name="sampah" value="<?= $data['sampah']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_kb" class="form-control" placeholder="Masukkan Data" ><?= $data['ket_kb']; ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>