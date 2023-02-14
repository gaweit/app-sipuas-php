<?php
ini_set("display_errors",0);
include("../includes/defines.php");
include("../includes/fungsi.php");
session_start();
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Shift</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/proses_tambah_shift_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Shift</label>
                        <input type="text" name="shift" class="form-control"  placeholder="Masukkan Data Shift" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Keterangan</label>
                        <input type="file" name="file" class="form-control"  placeholder="Masukkan Data Shift" required >
                        </div>

                        
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>