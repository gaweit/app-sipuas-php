<?php
    include ("../../includes/defines.php");
    if(isset($_POST['idpeg']))
    {
        $idpeg=$_POST['idpeg'];
        $query=mysql_query("SELECT * FROM pegawai
        INNER JOIN divisi on divisi.id_divisi = pegawai.id_divisi
        INNER JOIN jabatan on jabatan.id_jabatan = pegawai.id_jabatan
        INNER JOIN bagian on bagian.id_bagian = divisi.id_bagian
                                                      WHERE id_pegawai=$idpeg");
        $data=mysql_fetch_assoc($query);
    }
?>   
            
      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Pegawai</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_pegawai_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
                  
                        <div class="form-group col-md-12">
                        <label for="inputEmail4">ID Card</label>
                        <input hidden="hidden" type="text" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
                        <input type="text" name="id_card" class="form-control"  placeholder="Masukkan Data ID Card"
                        value="<?php echo $data['id_card']; ?>" required  >
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control"  placeholder="Masukkan Data Nama Lengkap" 
                        value="<?php echo $data['nama_lengkap']; ?>" required  >
                        </div>

                       
                        
                        


                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Divisi</label>
                        <select class="form-control select2" name="id_divisi" required>
                                 
                                                <?php
                                                    $query2= mysql_query("SELECT * FROM divisi INNER JOIN bagian 
                                                    on bagian.id_bagian = divisi.id_bagian order by id_divisi asc");
                                                    while($data2=mysql_fetch_assoc($query2))
                                                      {
                                                        $selected = ($data2['id_divisi']==$id_divisi) ? "selected" : "";
                                                         echo "<option value='$data2[id_divisi]' $selected>$data2[divisi] - $data2[bagian] 
                                                         </option>";
                                                                    }
                                                                ?>
                                          </select>
                        </div>

                        <div class="form-group col-md-12">
                        <label for="inputEmail4">Jabatan</label>
                        <select class="form-control select2" name="id_jabatan" required>
                                             
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