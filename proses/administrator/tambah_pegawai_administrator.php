<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Pegawai</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_tambah_pegawai_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">ID Card</label>
                        <input type="text" name="id_card" class="form-control"  placeholder="Masukkan Data ID Card" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control"  placeholder="Masukkan Data Nama Lengkap" required >
                        </div>

                       
                        
                        


                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Divisi</label>
                        <select class="form-control select2" name="id_divisi" required>
                                             <option>Pilih</option>
                                                <?php
                                                    $query= mysql_query("SELECT * FROM divisi INNER JOIN bagian on bagian.id_bagian = divisi.id_bagian order by id_divisi asc");
                                                    while($data=mysql_fetch_assoc($query))
                                                      {
                                                        $selected = ($data['id_divisi']==$id_divisi) ? "selected" : "";
                                                         echo "<option value='$data[id_divisi]' $selected>$data[divisi] - $data[bagian] </option>";
                                                                    }
                                                                ?>
                                          </select>
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Jabatan</label>
                        <select class="form-control select2" name="id_jabatan" required>
                                             <option>Pilih</option>
                                                <?php
                                                    $query= mysql_query("SELECT * FROM jabatan order by id_jabatan asc");
                                                    while($data=mysql_fetch_assoc($query))
                                                      {
                                                        $selected = ($data['id_jabatan']==$id_jabatan) ? "selected" : "";
                                                         echo "<option value='$data[id_jabatan]' $selected>$data[jabatan]</option>";
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