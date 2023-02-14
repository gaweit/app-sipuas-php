<?php
include ("../../includes/defines.php");
if(isset($_POST['id_bt']))
{
    $id_bt=$_POST['id_bt'];
    $query=mysql_query("SELECT * FROM breakdown WHERE id_bt=$id_bt");
    $data=mysql_fetch_assoc($query);

  
}

?> 
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah BreakdownTime</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/admin_maintenance/proses_ubah_breakdown_admin_maintenance.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_bt" value="<?= $data['tgl_bt'] ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input type="hidden" name="id_bt" value="<?= $data['id_bt'] ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Breakdown Time</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Value</label>
                                    <input type="text" name="nilai" value="<?= $data['nilai'] ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_bt" class="form-control"  placeholder="Masukkan Data" ><?= $data['ket_bt'] ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>