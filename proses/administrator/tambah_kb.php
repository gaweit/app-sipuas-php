<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();

?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Kualitas Brondolan</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_tambah_kb.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="date" name="tgl_kb" class="form-control"  placeholder="Masukkan Tanggal" required >
                                </div>

                                <div class="col-12">
                                <label><bold> Kualitas Brondolan</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Brondolan to TBS</label>
                                    <input type="text" name="to_tbs" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Brondolan Segar</label>
                                    <input type="text" name="segar" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Brondolan Busuk</label>
                                    <input type="text" name="busuk" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Sampah</label>
                                    <input type="text" name="sampah" class="form-control"  placeholder="Masukkan Data Hanya Angka" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Keterangan</label>
                                    <textarea type="text" name="ket_kb" class="form-control"  placeholder="Masukkan Data" ></textarea>
                                </div>

                        </div>

                          
                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="simpan" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>