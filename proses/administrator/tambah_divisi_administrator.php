<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Divisi</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_tambah_divisi_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Divisi</label>
                        <input type="text" name="divisi" class="form-control"  placeholder="Masukkan Data Divisi" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Bagian</label>
                        <select class="form-control select2" name="id_bagian" required>
                                             <option>Pilih</option>
                                                <?php
                                                    $query= mysql_query("SELECT * FROM bagian order by id_bagian asc");
                                                    while($data=mysql_fetch_assoc($query))
                                                      {
                                                        $selected = ($data['id_bagian']==$id_bagian) ? "selected" : "";
                                                         echo "<option value='$data[id_bagian]' $selected>$data[bagian]</option>";
                                                                    }
                                                                ?>
                                          </select>
                        </div>
                      
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>