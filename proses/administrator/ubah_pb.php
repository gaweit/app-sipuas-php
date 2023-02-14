<?php
include ("../../includes/defines.php");
if(isset($_POST['id_pb']))
{
    $id_pb=$_POST['id_pb'];
    $query=mysql_query("SELECT * FROM penerimaan_buah WHERE id_pb=$id_pb");
    $data=mysql_fetch_assoc($query);

  
}

$w1 = $data['w_1'];
$w2 = $data['w_2'];
$fc1 = $data['fc_1'];
$fc2 = $data['fc_2'];
$lori = $data['lori'];
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Penerimaan Buah</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_pb.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_pb" value="<?= $data['tgl_pb'] ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input type="hidden" name="id_pb" value="<?= $data['id_pb'] ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Penerimaan Buah</bold></label>    
                                </div>
                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Weighbridge 01</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($w1 == "Normal"){echo "checked";} ?> name="w_1" id="Normal" value="Normal">
                                        <label class="form-check-label" for="Normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_1" <?php if($w1 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($w1 == "Standby"){echo "checked";} ?> name="w_1" id="Standby" value="Standby">
                                        <label class="form-check-label" for="Standby">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($w1 == "Rusak"){echo "checked";} ?> type="radio" name="w_1" id="Rusak" value="Rusak">
                                        <label class="form-check-label" for="Rusak">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Weighbridge 02</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($w2 == "Normal"){echo "checked";} ?> name="w_2" id="Normal2" value="Normal">
                                        <label class="form-check-label" for="Normal2">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_2" <?php if($w2 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal2" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($w2 == "Standby"){echo "checked";} ?> name="w_2" id="Standby2" value="Standby">
                                        <label class="form-check-label" for="Standby2">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($w2 == "Rusak"){echo "checked";} ?> name="w_2" id="Rusak2" value="Rusak">
                                        <label class="form-check-label" for="Rusak2">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Ffb Conveyor 01</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($fc1 == "Normal"){echo "checked";} ?> type="radio" name="fc_1" id="Normal3" value="Normal">
                                        <label class="form-check-label" for="Normal3">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_1" <?php if($fc1 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal3" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal3">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fc1 == "Standby"){echo "checked";} ?> name="fc_1" id="Standby3" value="Standby">
                                        <label class="form-check-label" for="Standby3">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fc1 == "Rusak"){echo "checked";} ?> name="fc_1" id="Rusak3" value="Rusak">
                                        <label class="form-check-label" for="Rusak3">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Ffb Conveyor 02</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_2" <?php if($fc2 == "Normal"){echo "checked";} ?> id="Normal4" value="Normal">
                                        <label class="form-check-label" for="Normal4">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fc2 == "Tidak Normal"){echo "checked";} ?> name="fc_2" id="Tidak Normal4" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($fc2 == "Standby"){echo "checked";} ?> type="radio" name="fc_2" id="Standby4" value="Standby">
                                        <label class="form-check-label" for="Standby4">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fc2 == "Rusak"){echo "checked";} ?> name="fc_2" id="Rusak4" value="Rusak">
                                        <label class="form-check-label" for="Rusak4">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Lori</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($lori == "Normal"){echo "checked";} ?> name="lori" id="Normal5" value="Normal">
                                        <label class="form-check-label" for="Normal5">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lori" <?php if($lori == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($lori == "Standby"){echo "checked";} ?> name="lori" id="Standby5" value="Standby">
                                        <label class="form-check-label" for="Standby5">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($lori == "Rusak"){echo "checked";} ?> name="lori" id="Rusak5" value="Rusak">
                                        <label class="form-check-label" for="Rusak5">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_pb" class="form-control"  placeholder="Masukkan Data" ><?= $data['ket_pb'] ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>