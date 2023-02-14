<?php
include ("../../includes/defines.php");
if(isset($_POST['id_pm']))
{
    $id_pm=$_POST['id_pm'];
    $query=mysql_query("SELECT * FROM performance_mill WHERE id_pm=$id_pm");
    $data=mysql_fetch_assoc($query);

  
}

?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Ubah Data Performance Mill</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_pm.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_pm" class="form-control"  placeholder="Masukkan Tanggal" value="<?= $data['tgl_pm']; ?>" required >
                                    <input hidden="hidden" type="text" name="id_pm" value="<?= $data['id_pm']; ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Performance Mill</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Oil Extraction Rate (OER)</label>
                                    <input type="text" name="oil_extract" class="form-control"  placeholder="Masukkan Data Hanya Angka" value="<?= $data['oil_extract']; ?>" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">FFA</label>
                                    <input type="text" name="ffa" class="form-control" value="<?= $data['ffa']; ?>"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Moisture CPO</label>
                                    <input type="text" name="moisture_cpo" value="<?= $data['moisture_cpo']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Dirt CPO</label>
                                    <input type="text" name="dirt_cpo" value="<?= $data['dirt_cpo']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Kernel Extraction Rate (KER)</label>
                                    <input type="text" name="kernel_extract" value="<?= $data['kernel_extract']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Moisture Kernel</label>
                                    <input type="text" name="moisture_kernel" value="<?= $data['moisture_kernel']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Dirt Kernel</label>
                                    <input type="text" name="dirt_kernel" value="<?= $data['dirt_kernel']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_kb" class="form-control" placeholder="Masukkan Data" ><?= $data['ket_pm']; ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>