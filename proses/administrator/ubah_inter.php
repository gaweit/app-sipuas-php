<?php
include ("../../includes/defines.php");
if(isset($_POST['id_inter']))
{
    $id_inter=$_POST['id_inter'];
    $query=mysql_query("SELECT * FROM tbs_internal WHERE id_inter=$id_inter");
    $data=mysql_fetch_assoc($query);

  
}

?>             

                
                      

      <div class="card">
                  <div class="card-header">
                  <h4>Ubah Data TBS Internal</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_inter.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_inter" value="<?= $data['tgl_inter']; ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input hidden="hidden" type="text" name="id_inter" value="<?= $data['id_inter']; ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> TBS Internal</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Unripe</label>
                                    <input type="text" name="unripe" value="<?= $data['unripe']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Under Ripe</label>
                                    <input type="text" name="under" value="<?= $data['under']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Ripe</label>
                                    <input type="text" name="ripe" value="<?= $data['ripe']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Over Ripe</label>
                                    <input type="text" name="over_r" value="<?= $data['over_r']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Empty Bunch</label>
                                    <input type="text" name="empty_b" value="<?= $data['empty_b']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Abnormal</label>
                                    <input type="text" name="abnormal" value="<?= $data['abnormal']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Long Stalk</label>
                                    <input type="text" name="long_stalk" value="<?= $data['long_stalk']; ?>" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_inter" class="form-control"  placeholder="Masukkan Data" ><?= $data['ket_inter']; ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>