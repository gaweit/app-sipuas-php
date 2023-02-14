<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();

?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Penerimaan Buah</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_tambah_pb.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_pb" class="form-control"  placeholder="Masukkan Tanggal" required >
                                </div>

                                <div class="col-12">
                                <label><bold> Penerimaan Buah</bold></label>    
                                </div>
                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Weighbridge 01</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_1" id="Normal" value="Normal">
                                        <label class="form-check-label" for="Normal">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_1" id="Tidak Normal" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_1" id="Standby" value="Standby">
                                        <label class="form-check-label" for="Standby">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_1" id="Rusak" value="Rusak">
                                        <label class="form-check-label" for="Rusak">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Weighbridge 02</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_2" id="Normal2" value="Normal">
                                        <label class="form-check-label" for="Normal2">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_2" id="Tidak Normal2" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal2">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_2" id="Standby2" value="Standby">
                                        <label class="form-check-label" for="Standby2">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="w_2" id="Rusak2" value="Rusak">
                                        <label class="form-check-label" for="Rusak2">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Ffb Conveyor 01</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_1" id="Normal3" value="Normal">
                                        <label class="form-check-label" for="Normal3">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_1" id="Tidak Normal3" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal3">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_1" id="Standby3" value="Standby">
                                        <label class="form-check-label" for="Standby3">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_1" id="Rusak3" value="Rusak">
                                        <label class="form-check-label" for="Rusak3">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Ffb Conveyor 02</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_2" id="Normal4" value="Normal">
                                        <label class="form-check-label" for="Normal4">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_2" id="Tidak Normal4" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal4">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_2" id="Standby4" value="Standby">
                                        <label class="form-check-label" for="Standby4">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fc_2" id="Rusak4" value="Rusak">
                                        <label class="form-check-label" for="Rusak4">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                              
                                    <label class="d-block" for="inputEmail4">Lori</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lori" id="Normal5" value="Normal">
                                        <label class="form-check-label" for="Normal5">Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lori" id="Tidak Normal5" value="Tidak Normal">
                                        <label class="form-check-label" for="Tidak Normal5">Tidak Normal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lori" id="Standby5" value="Standby">
                                        <label class="form-check-label" for="Standby5">Standby</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="lori" id="Rusak5" value="Rusak">
                                        <label class="form-check-label" for="Rusak5">Rusak</label>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_pb" class="form-control"  placeholder="Masukkan Data" ></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="simpan" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>