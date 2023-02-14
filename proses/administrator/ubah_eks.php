<?php
include ("../../includes/defines.php");
if(isset($_POST['id_eks']))
{
    $id_eks=$_POST['id_eks'];
    $query=mysql_query("SELECT * FROM tbs_eksternal WHERE id_eks=$id_eks");
    $data=mysql_fetch_assoc($query);

  
}

?>             

                
                      

      <div class="card">
                  <div class="card-header">
                  <h4>Ubah Data TBS Eksternal</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_eks.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_eks" value="<?= $data['tgl_eks']; ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input hidden="hidden" type="text" name="id_eks" value="<?= $data['id_eks']; ?>">
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
                                    <textarea type="text" name="ket_eks" class="form-control"  placeholder="Masukkan Data" ><?= $data['ket_eks']; ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>