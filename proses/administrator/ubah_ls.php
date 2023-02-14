<?php
include ("../../includes/defines.php");
if(isset($_POST['id_ls']))
{
    $id_ls=$_POST['id_ls'];
    $query=mysql_query("SELECT * FROM losses WHERE id_ls=$id_ls");
    $data=mysql_fetch_assoc($query);

  
}

?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Ubah Data Performance Mill</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_ls.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_ls" value="<?= $data['tgl_ls']; ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input hidden="hidden" type="text" name="id_ls" value="<?= $data['id_ls']; ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Losses</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Total Oil Losses</label>
                                    <input type="text" name="total_oiloss" class="form-control"  placeholder="Masukkan Data Hanya Angka" value="<?= $data['total_oiloss']; ?>" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Oil Loss in Empty Bunch Press</label>
                                    <input type="text" name="olebp" class="form-control" value="<?= $data['olebp']; ?>" placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Oil Loss Fibre Press</label>
                                    <input type="text" value="<?= $data['olfp']; ?>" name="olfp" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Oil Loss Solid</label>
                                    <input type="text" name="ols" value="<?= $data['ols']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Oil Loss Final Effluent</label>
                                    <input type="text" name="olfe" value="<?= $data['olfe']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Total Kernel Loss</label>
                                    <input type="text" name="tkl" value="<?= $data['tkl']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Kernel Loss in EB</label>
                                    <input type="text" name="kle" value="<?= $data['kle']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Kernel Loss Fibre Cyclone</label>
                                    <input type="text" name="klfc" value="<?= $data['klfc']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Kernel Loss LTDS 1</label>
                                    <input type="text" name="kll_1" value="<?= $data['kll_1']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Kernel Loss LTDS 2</label>
                                    <input type="text" name="kll_2" class="form-control" value="<?= $data['kll_2']; ?>" placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Kernel Loss Hydrocylone</label>
                                    <input type="text" name="klh" value="<?= $data['klh']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_ls" class="form-control"  placeholder="Masukkan Data" ><?= $data['ket_ls']; ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>