<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Jabatan</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_tambah_jabatan_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control"  placeholder="Masukkan Data Jabatan" required >
                        </div>
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>