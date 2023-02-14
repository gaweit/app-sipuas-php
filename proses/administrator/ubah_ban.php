<?php
include ("../../includes/defines.php");
if(isset($_POST['id_bantingan']))
{
    $id_ban=$_POST['id_bantingan'];
    $query=mysql_query("SELECT * FROM bantingan WHERE id_bantingan=$id_bantingan");
    $data=mysql_fetch_assoc($query);

  
}

$Tipper_Cap_5Ton = $data['Tipper_Cap_5Ton'];
$sfb_conveyor01 = $data['sfb_conveyor01'];
$sfb_conveyor02 = $data['sfb_conveyor02'];
$threser01 = $data['threser01'];
$threser02 = $data['threser02'];
$threser03 = $data['threser03'];
$discharge_conveyor01 = $data['discharge_conveyor01'];
$discharge_conveyor02 = $data['discharge_conveyor02'];
$discharge_conveyor03 = $data['discharge_conveyor03'];
$eb_conveyor = $data['eb_conveyor'];
?>

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Bantingan</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_ban.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_ban" value="<?= $data['tgl_ban'] ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input type="hidden" name="id_bantingan" value="<?= $data['id_bantingan'] ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Bantingan</bold></label>    
                                </div>
                                <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">Tipper_Cap_5Ton</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="Tipper_Cap_5Ton" id="Normal" value="Normal">
                                  <label class="form-check-label" for="Normal">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="Tipper_Cap_5Ton" id="Tidak Normal" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="Tipper_Cap_5Ton" id="Standby" value="Standby">
                                  <label class="form-check-label" for="Standby">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="Tipper_Cap_5Ton" id="Rusak" value="Rusak">
                                  <label class="form-check-label" for="Rusak">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                        
                              <label class="d-block" for="inputEmail4">sfb_conveyor01</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Normal2" value="Normal">
                                  <label class="form-check-label" for="Normal2">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Tidak Normal2" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Standby2" value="Standby">
                                  <label class="form-check-label" for="Standby2">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor01" id="Rusak2" value="Rusak">
                                  <label class="form-check-label" for="Rusak2">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                        
                              <label class="d-block" for="inputEmail4">sfb_conveyor02</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Normal3" value="Normal">
                                  <label class="form-check-label" for="Normal3">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Tidak Normal3" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal3">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Standby3" value="Standby">
                                  <label class="form-check-label" for="Standby3">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="sfb_conveyor02" id="Rusak3" value="Rusak">
                                  <label class="form-check-label" for="Rusak3">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                        
                              <label class="d-block" for="inputEmail4">threser01</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser01" id="Normal4" value="Normal">
                                  <label class="form-check-label" for="Normal4">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser01" id="Tidak Normal4" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser01" id="Standby4" value="Standby">
                                  <label class="form-check-label" for="Standby4">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser01" id="Rusak4" value="Rusak">
                                  <label class="form-check-label" for="Rusak4">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                        
                              <label class="d-block" for="inputEmail4">threser02</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser02" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser02" id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser02" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser02" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">

                          <label class="d-block" for="inputEmail4">threser03</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser03" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser03" id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser03" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="threser03" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">

                          <label class="d-block" for="inputEmail4">discharge_conveyor01</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor01" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">

                          <label class="d-block" for="inputEmail4">discharge_conveyor02</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor02" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">

                          <label class="d-block" for="inputEmail4">discharge_conveyor03</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="discharge_conveyor03" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">

                          <label class="d-block" for="inputEmail4">eb_conveyor</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="eb_conveyor" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="eb_conveyor" id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="eb_conveyor" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="eb_conveyor" id="Rusak5" value="Rusak">
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