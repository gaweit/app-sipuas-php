<?php
ini_set("display_errors",0);
include("../includes/defines.php");
include("../includes/fungsi.php");
session_start();
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Arsip</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/proses_tambah_arsip_admin_lab.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Judul</label>
                        <input type="text" name="judul" class="form-control"  placeholder="Masukkan Data Judul" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">File</label>
                        <input type="file" name="file" class="form-control"  placeholder="Masukkan Data Shift" required >
                        </div>

                        
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>