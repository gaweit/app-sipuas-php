<?php
ini_set("display_errors",0);
include("../../includes/defines.php");
include("../../includes/fungsi.php");
session_start();
?>
                 

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Tambah Pengguna</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_tambah_pengguna_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
                  <div class="form-group col-md-12">
                        <label for="inputEmail4">Pegawai</label>
                        <select class="form-control select2" name="id_pegawai" required>
                        <option>Pilih</option>
                                                <?php
                                                    $query1= mysql_query("SELECT * FROM pegawai 
                                                     INNER JOIN divisi on divisi.id_divisi = pegawai.id_divisi
                                                     INNER JOIN jabatan on jabatan.id_jabatan = pegawai.id_jabatan
                                                     INNER JOIN bagian on bagian.id_bagian = divisi.id_bagian
                                                     ORDER BY id_pegawai");
                                                    while($data1=mysql_fetch_assoc($query1))
                                                      {
                                                        $selected = ($data1['id_pegawai']==$id_pegawai) ? "selected" : "";
                                                         echo "<option value='$data1[id_pegawai]' $selected>$data1[id_card] / $data1[nama_lengkap]
                                                        / $data1[jabatan] / $data1[divisi] </option>";
                                                                    }
                                                                ?>
                                          </select>
                        </div>

                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Nama</label>
                        <input type="text" name="nama" class="form-control"  placeholder="Masukkan Data Nama" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Masukkan Data Username" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Masukkan Data Password" required >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Level</label>
                                               <fieldset class="controls">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Manager" 
                                                        required class="form-check-input" <?php if($data['level']=="Manager"){echo "checked";}?>> <span class="custom-control-indicator"></span> 
                                                        <span class="custom-control-description"> Manager</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Administrator" class="form-check-input" <?php if($data['level']=="Administrator"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description">Administrator</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Admin_LAB" class="form-check-input" <?php if($data['level']=="Admin_LAB"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description">Admin LAB</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Admin_Proses" class="form-check-input" <?php if($data['level']=="Admin_Proses"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description">Admin Proses</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Admin_Maintenance" class="form-check-input" 
                                                        <?php if($data['level']=="Admin_Maintenance"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description">Admin Maintenance</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Admin_K3" class="form-check-input" 
                                                        <?php if($data['level']=="Admin_K3"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description">Admin K3</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Operator_Lab" class="form-check-input" 
                                                        <?php if($data['level']=="Operator_Lab"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator">
                                                        </span> <span class="custom-control-description">Operator Lab</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Operator_Proses" class="form-check-input" 
                                                        <?php if($data['level']=="Operator_Proses"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator">
                                                        </span> <span class="custom-control-description">Operator Proses</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Operator_Maintenance" class="form-check-input" 
                                                        <?php if($data['level']=="Operator_Maintenance"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator">
                                                        </span> <span class="custom-control-description">Operator Maintenance</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Operator_K3" class="form-check-input" 
                                                        <?php if($data['level']=="Operator_K3"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator">
                                                        </span> <span class="custom-control-description">Operator K3</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Admin_Har" class="form-check-input" 
                                                        <?php if($data['level']=="Admin_Har"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator">
                                                        </span> <span class="custom-control-description">Admin Har</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="level" value="Superadmin" class="form-check-input" 
                                                        <?php if($data['level']=="Superadmin"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator">
                                                        </span> <span class="custom-control-description">Superadmin</span> </label>
                                                </fieldset>

                        </div>
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Status</label>
                                               <fieldset class="controls">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="status" value="Aktif" 
                                                        required class="form-check-input" <?php if($data['status']=="Aktif"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> 
                                                        <span class="custom-control-description"> Aktif</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="status" value="Nonaktif" class="form-check-input" 
                                                        <?php if($data['status']=="Nonaktif"){echo "checked";}?>> 
                                                        <span class="custom-control-indicator"></span> 
                                                        <span class="custom-control-description"> Nonaktif</span> </label>
                                                </fieldset>
                                                

                        </div>

          
                    </div>

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>