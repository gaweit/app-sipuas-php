<?php
    include ("../../includes/defines.php");
    if(isset($_POST['idjadwalshift']))
    {
        $idjadwalshift=$_POST['idjadwalshift'];
        $query=mysql_query("SELECT * FROM jadwal_shift 
    
        WHERE id_jadwal_shift=$idjadwalshift");
        $data=mysql_fetch_assoc($query);

        $id_jadwal_shift=$data['id_jadwal_shift'];
        $id_user=$data['id_user'];
        $id_shift=$data['id_shift'];
     
    }
?>                    

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Jadwal Shift</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_jadwal_shift_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
                  <div class="form-group col-md-12">
                        <label for="inputEmail4">Pegawai</label>
                        <input hidden="hidden" type="text" name="id_jadwal_shift" value="<?php echo $data['id_jadwal_shift']; ?>">
                        <select class="form-control select2" name="id_user" required>
                        
                     
                                                <?php
                                                    $query1= mysql_query("SELECT * FROM user 
                                                    INNER JOIN pegawai on pegawai.id_pegawai = user.id_pegawai 
                                                    INNER JOIN jabatan on jabatan.id_jabatan = pegawai.id_jabatan
                                                    order by id_user asc");
                                                    while($data1=mysql_fetch_assoc($query1))
                                                      {
                                                        $selected = ($data1['id_user']==$id_user) ? "selected" : "";
                                                         echo "<option value='$data1[id_user]' $selected>$data1[nama_lengkap] - $data1[jabatan] </option>";
                                                                    }
                                                                ?>
                                          </select>
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Shift</label>
                        <select class="form-control select2" name="id_shift" required>
                                             <option>Pilih</option>
                                                <?php
                                                    $query= mysql_query("SELECT * FROM shift order by id_shift asc");
                                                    while($data=mysql_fetch_assoc($query))
                                                      {
                                                        $selected = ($data['id_shift']==$id_shift) ? "selected" : "";
                                                         echo "<option value='$data[id_shift]' $selected>$data[shift]</option>";
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