<?php
include ("../../includes/defines.php");
if(isset($_POST['id_reb']))
{
    $id_pb=$_POST['id_reb'];
    $query=mysql_query("SELECT * FROM rebusan WHERE id_reb=$id_reb");
    $data=mysql_fetch_assoc($query);

  
}


   $fruit_tc1=$_POST['fruit_tc1'];
   $fruit_tc2=$_POST['fruit_tc2'];
   $sterilizer01=$_POST['sterilizer01'];
   $sterilizer02=$_POST['sterilizer02'];
   $sterilizer03=$_POST['sterilizer03'];
   $drawbrige01=$_POST['drawbrige01'];
   $drawbrige02=$_POST['drawbrige02'];
   $drawbrige03=$_POST['sterilizer01'];
   $power_pack1=$_POST['power_pack1'];
   $power_pack2=$_POST['power_pack2'];
   $power_pack3=$_POST['power_pack3'];
   $hut01=$_POST['hut01'];
   $hut02=$_POST['hut02'];
   $hut03=$_POST['hut03'];
   $hut04=$_POST['hut04'];
   $hut05=$_POST['hut05'];
   $hut06=$_POST['hut06'];
   $hut07=$_POST['hut07'];
   $blowdown_chambers=$_POST['blowdown_chambers'];
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Rebusan</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_rebusan.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_reb" value="<?= $data['tgl_reb'] ?>" class="form-control"  placeholder="Masukkan Tanggal" required >
                                    <input type="hidden" name="id_reb" value="<?= $data['id_reb'] ?>">
                                </div>

                                <div class="col-12">
                                <label><bold> Rebusan </bold></label>    
                                </div>
                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">fruit_tc1</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fruit_tc1 == "Normal"){echo "checked";} ?> name="fruit_tc1" id="Normal" value="Normal">
                                        <label class="form-check-label" for="Normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fruit_tc1" <?php if($fruit_tc1 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fruit_tc1 == "Standby"){echo "checked";} ?> name="fruit_tc1" id="Standby" value="Standby">
                                        <label class="form-check-label" for="Standby">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($fruit_tc1 == "Rusak"){echo "checked";} ?> type="radio" name="fruit_tc1" id="Rusak" value="Rusak">
                                        <label class="form-check-label" for="Rusak">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">$fruit_tc2</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fruit_tc2 == "Normal"){echo "checked";} ?> name="fruit_tc2" id="Normal2" value="Normal">
                                        <label class="form-check-label" for="Normal2">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fruit_tc2" <?php if($fruit_tc2 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal2" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fruit_tc2 == "Standby"){echo "checked";} ?> name="fruit_tc2" id="Standby2" value="Standby">
                                        <label class="form-check-label" for="Standby2">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($fruit_tc2 == "Rusak"){echo "checked";} ?> name="fruit_tc2" id="Rusak2" value="Rusak">
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
                              
                                    <label class="d-block" for="inputEmail4">sterilizer01</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sterilizer01" <?php if($sterilizer01 == "Normal"){echo "checked";} ?> id="Normal4" value="Normal">
                                        <label class="form-check-label" for="Normal4">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($sterilizer01 == "Tidak Normal"){echo "checked";} ?> name="sterilizer01" id="Tidak Normal4" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($sterilizer01 == "Standby"){echo "checked";} ?> type="radio" name="sterilizer01" id="Standby4" value="Standby">
                                        <label class="form-check-label" for="Standby4">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($sterilizer01 == "Rusak"){echo "checked";} ?> name="sterilizer01" id="Rusak4" value="Rusak">
                                        <label class="form-check-label" for="Rusak4">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">sterilizer02</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sterilizer02" <?php if($sterilizer02 == "Normal"){echo "checked";} ?> id="Normal4" value="Normal">
                                        <label class="form-check-label" for="Normal4">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($sterilizer02 == "Tidak Normal"){echo "checked";} ?> name="sterilizer02" id="Tidak Normal4" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($sterilizer02 == "Standby"){echo "checked";} ?> type="radio" name="sterilizer02" id="Standby4" value="Standby">
                                        <label class="form-check-label" for="Standby4">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($sterilizer02 == "Rusak"){echo "checked";} ?> name="sterilizer02" id="Rusak4" value="Rusak">
                                        <label class="form-check-label" for="Rusak4">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">sterilizer03</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sterilizer03" <?php if($sterilizer03 == "Normal"){echo "checked";} ?> id="Normal4" value="Normal">
                                        <label class="form-check-label" for="Normal4">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($sterilizer03 == "Tidak Normal"){echo "checked";} ?> name="sterilizer02" id="Tidak Normal4" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if($sterilizer03 == "Standby"){echo "checked";} ?> type="radio" name="sterilizer03" id="Standby4" value="Standby">
                                        <label class="form-check-label" for="Standby4">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($sterilizer03 == "Rusak"){echo "checked";} ?> name="sterilizer03" id="Rusak4" value="Rusak">
                                        <label class="form-check-label" for="Rusak4">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">drawbrige01</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige01 == "Normal"){echo "checked";} ?> name="drawbrige01" id="Normal5" value="Normal">
                                        <label class="form-check-label" for="Normal5">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="drawbrige01" <?php if($drawbrige01 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige01 == "Standby"){echo "checked";} ?> name="drawbrige01" id="Standby5" value="Standby">
                                        <label class="form-check-label" for="Standby5">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige01 == "Rusak"){echo "checked";} ?> name="drawbrige01" id="Rusak5" value="Rusak">
                                        <label class="form-check-label" for="Rusak5">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">drawbrige02</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige02 == "Normal"){echo "checked";} ?> name="drawbrige02" id="Normal5" value="Normal">
                                        <label class="form-check-label" for="Normal5">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="drawbrige02" <?php if($drawbrige02 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige02 == "Standby"){echo "checked";} ?> name="drawbrige02" id="Standby5" value="Standby">
                                        <label class="form-check-label" for="Standby5">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige02 == "Rusak"){echo "checked";} ?> name="drawbrige02" id="Rusak5" value="Rusak">
                                        <label class="form-check-label" for="Rusak5">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">$drawbrige03</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige03 == "Normal"){echo "checked";} ?> name="drawbrige03" id="Normal5" value="Normal">
                                        <label class="form-check-label" for="Normal5">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="drawbrige03" <?php if($drawbrige02 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige03 == "Standby"){echo "checked";} ?> name="drawbrige03" id="Standby5" value="Standby">
                                        <label class="form-check-label" for="Standby5">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($drawbrige03 == "Rusak"){echo "checked";} ?> name="drawbrige03" id="Rusak5" value="Rusak">
                                        <label class="form-check-label" for="Rusak5">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">$power_pack1</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($power_pack1 == "Normal"){echo "checked";} ?> name="power_pack1" id="Normal5" value="Normal">
                                        <label class="form-check-label" for="Normal5">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="power_pack1" <?php if($power_pack1 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($power_pack1 == "Standby"){echo "checked";} ?> name="power_pack1" id="Standby5" value="Standby">
                                        <label class="form-check-label" for="Standby5">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php if($power_pack1 == "Rusak"){echo "checked";} ?> name="power_pack1" id="Rusak5" value="Rusak">
                                        <label class="form-check-label" for="Rusak5">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$power_pack2</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($power_pack2 == "Normal"){echo "checked";} ?> name="power_pack2" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="power_pack2" <?php if($power_pack2 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($power_pack2 == "Standby"){echo "checked";} ?> name="power_pack2" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($power_pack2 == "Rusak"){echo "checked";} ?> name="power_pack2" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$power_pack3</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($power_pack3 == "Normal"){echo "checked";} ?> name="power_pack3" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="power_pack3" <?php if($power_pack3 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($power_pack3 == "Standby"){echo "checked";} ?> name="power_pack3" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($power_pack3 == "Rusak"){echo "checked";} ?> name="power_pack3" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut01</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut01 == "Normal"){echo "checked";} ?> name="hut01" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut01" <?php if($hut01 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut01 == "Standby"){echo "checked";} ?> name="hut01" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut01 == "Rusak"){echo "checked";} ?> name="hut01" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut02</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut02 == "Normal"){echo "checked";} ?> name="hut02" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut02" <?php if($hut02 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut02 == "Standby"){echo "checked";} ?> name="hut02" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut02 == "Rusak"){echo "checked";} ?> name="hut02" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut03</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut03 == "Normal"){echo "checked";} ?> name="hut03" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut03" <?php if($hut01 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut03 == "Standby"){echo "checked";} ?> name="hut03" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut03 == "Rusak"){echo "checked";} ?> name="hut03" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut04</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut04 == "Normal"){echo "checked";} ?> name="hut04" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut04" <?php if($hut04 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut04 == "Standby"){echo "checked";} ?> name="hut04" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut04 == "Rusak"){echo "checked";} ?> name="hut04" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut05</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut05 == "Normal"){echo "checked";} ?> name="hut05" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut05" <?php if($hut01 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut05 == "Standby"){echo "checked";} ?> name="hut05" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut05 == "Rusak"){echo "checked";} ?> name="hut05" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut06</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut01 == "Normal"){echo "checked";} ?> name="hut06" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut06" <?php if($hut06 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut06 == "Standby"){echo "checked";} ?> name="hut06" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut06 == "Rusak"){echo "checked";} ?> name="hut06" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$hut07</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut07 == "Normal"){echo "checked";} ?> name="hut07" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="hut07" <?php if($hut07 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut07 == "Standby"){echo "checked";} ?> name="hut07" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($hut07 == "Rusak"){echo "checked";} ?> name="hut07" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                          <div class="form-group col-12">
                              
                              <label class="d-block" for="inputEmail4">$blowdown_chambers</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($blowdown_chambers == "Normal"){echo "checked";} ?> name="blowdown_chambers" id="Normal5" value="Normal">
                                  <label class="form-check-label" for="Normal5">Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="blowdown_chambers" <?php if($hut07 == "Tidak Normal"){echo "checked";} ?> id="Tidak Normal5" value="Tidak Normal">
                                  <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($blowdown_chambers == "Standby"){echo "checked";} ?> name="blowdown_chambers" id="Standby5" value="Standby">
                                  <label class="form-check-label" for="Standby5">Standby</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" <?php if($blowdown_chambers == "Rusak"){echo "checked";} ?> name="blowdown_chambers" id="Rusak5" value="Rusak">
                                  <label class="form-check-label" for="Rusak5">Rusak</label>
                              </div>
                          </div>

                                <div class="form-group col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_reb" class="form-control"  placeholder="Masukkan Data" ><?= $data['ket_reb'] ?></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>