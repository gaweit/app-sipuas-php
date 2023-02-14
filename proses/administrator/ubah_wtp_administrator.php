<?php
    include ("../../includes/defines.php");
    if(isset($_POST['idwtp']))
    {
        $idwtp=$_POST['idwtp'];
        $query=mysql_query("SELECT * FROM wtp_lab   Inner join user on user.id_user = wtp_lab.id_user
        inner join jadwal_shift on jadwal_shift.id_jadwal_shift = wtp_lab.id_jadwal_shift
        inner join shift on shift.id_shift = jadwal_shift.id_shift WHERE id_wtp=$idwtp");
        $data=mysql_fetch_assoc($query);

      
    }
?>          

                
                      

      <div class="card">
                  <div class="card-header">
                    <h4>Data Ubah Water Treatment Plant</h4>
                  </div>
            <div class="card-body">
                  <form action="proses/administrator/proses_ubah_wtp_administrator.php" method="POST" enctype="multipart/form-data" >
                  <div class="form-row">
 
              
                 

                               <div class="form-group col-md-12 col-12">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input hidden="hidden" type="text" name="id_wtp" value="<?php echo $data['id_wtp']; ?>">
                                    <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>"  placeholder="Masukkan Data Nama"  required >
                                </div>

                                <div class="col-12">
                                <label><bold> Water Intake</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_water_intake" class="form-control" value="<?php echo $data['start_water_intake']; ?>"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_water_intake" class="form-control" value="<?php echo $data['stop_water_intake']; ?>"  placeholder="Masukkan Data Stop" required >
                                </div>


                                <div class="col-12">
                                <label><bold> Raw Water</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_raw_water" class="form-control"  value="<?php echo $data['start_raw_water']; ?>"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_raw_water" class="form-control" 
                                    value="<?php echo $data['stop_raw_water']; ?>"  placeholder="Masukkan Data Stop" required >
                                </div>


                                <div class="col-12">
                                <label><bold> Sand Filter 1</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_sand_filter1" value="<?php echo $data['start_sand_filter1']; ?>" class="form-control"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_sand_filter1"  value="<?php echo $data['stop_sand_filter1']; ?>" class="form-control"  placeholder="Masukkan Data Stop" required >
                                </div>

                                <div class="col-12">
                                <label><bold> Sand Filter 2</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_sand_filter2" value="<?php echo $data['start_sand_filter2']; ?>" class="form-control"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_sand_filter2" value="<?php echo $data['stop_sand_filter2']; ?>" class="form-control"  placeholder="Masukkan Data Stop" required >
                                </div>

                                <div class="col-12">
                                <label><bold> Softener 1</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_softener1" value="<?php echo $data['start_softener1']; ?>" class="form-control"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_softener1" value="<?php echo $data['stop_softener1']; ?>" class="form-control"  placeholder="Masukkan Data Stop" required >
                                </div>

                                
                                <div class="col-12">
                                <label><bold> Softener 2</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_softener2" value="<?php echo $data['start_softener2']; ?>"  class="form-control"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i> 
                                    <input type="time" name="stop_softener2" value="<?php echo $data['stop_softener2']; ?>"class="form-control"  placeholder="Masukkan Data Stop" required >
                                </div>

                                <div class="col-12">
                                <label><bold> Pump Domestic 1</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_pump_domestic1" value="<?php echo $data['start_pump_domestic1']; ?>" class="form-control"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_pump_domestic1" value="<?php echo $data['stop_pump_domestic1']; ?>" class="form-control"  placeholder="Masukkan Data Stop" required >
                                </div>

                                
                                <div class="col-12">
                                <label><bold> Pump Domestic 2</bold></label>    
                                </div>
                                <div class="form-group col-md-6 col-12">
                              
                                    <label for="inputEmail4">Start</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="start_pump_domestic2" value="<?php echo $data['start_pump_domestic2']; ?>" class="form-control"  placeholder="Masukkan Data Start" required >
                                </div>

                                <div class="form-group col-md-6 col-12">
                                    <label for="inputEmail4">Stop</label>
                                    <i class="fas fa-clock"></i>
                                    <input type="time" name="stop_pump_domestic2" value="<?php echo $data['stop_pump_domestic2']; ?>" class="form-control"  placeholder="Masukkan Data Stop" required >
                                </div>
                            

                                <div class="col-12 col-sm-4 col-lg-4">
                                <div class="col-12">
                                <label><bold> Pemakaian Bahan Kimia</bold></label>    
                                </div>
                                
                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">Soda</label>
                                        <input type="text" name="soda" value="<?php echo $data['soda']; ?>" class="form-control"  placeholder="Data Soda (Kg)" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">Alum</label>
                                        <input type="text" name="alum" value="<?php echo $data['alum']; ?>" class="form-control"  placeholder="Data alum (Kg)" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">N3273</label>
                                        <input type="text" name="N3273"  value="<?php echo $data['N3273']; ?>" class="form-control"  placeholder="Data N3273 (Kg)" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">N214</label>
                                        <input type="text" name="N214" value="<?php echo $data['N214']; ?>" class="form-control"  placeholder="Data N214 (Kg)" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">N2811</label>
                                        <input type="text" name="N2811" value="<?php echo $data['N2811']; ?>" class="form-control"  placeholder="Data N2811 (Kg)" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">Polymer</label>
                                        <input type="text" name="polymer" value="<?php echo $data['polymer']; ?>" class="form-control"  placeholder=" Data polymer (Kg)" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">NaCL</label>
                                        <input type="text" name="NaCL" value="<?php echo $data['NaCL']; ?>" class="form-control"  placeholder=" Data NaCL (Kg)" required >
                                        </div>

                                </div>


                            <div class="col-12 col-sm-4 col-lg-4">
                            <div class="col-12">
                                <label><bold> Plow Meter</bold></label>    
                                </div>
                  
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Proses Awal</label>
                                <input type="text" name="proses_awal" value="<?php echo $data['proses_awal']; ?>" class="form-control"  placeholder="Data Proses Awal" required >
                                </div>

                               
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Proses Akhir</label>
                                <input type="text" name="proses_akhir" value="<?php echo $data['proses_akhir']; ?>" class="form-control"  placeholder="Data Proses Akhir" required >
                                </div>


                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Boiler Awal</label>
                                <input type="text" name="boiler_awal"  value="<?php echo $data['boiler_awal']; ?>" class="form-control"  placeholder="Data Boiler Awal" required >
                                </div>

                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Boiler Akhir</label>
                                <input type="text" name="boiler_akhir" value="<?php echo $data['boiler_akhir']; ?>" class="form-control"  placeholder="Data Boiler Akhir" required >
                                </div>

                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Domestic Awal</label>
                                <input type="text" name="domestic_awal" value="<?php echo $data['domestic_awal']; ?>" class="form-control"  placeholder="Data Domestic Awal" required >
                                </div>
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Domestic Akhir</label>
                                <input type="text" name="domestic_akhir" value="<?php echo $data['boiler_akhir']; ?>" class="form-control"  placeholder="Data Domestic Akhir" required >
                                </div>

                           </div>

                           <div class="col-12 col-sm-4 col-lg-4">

                                <div class="col-12">
                                <label><bold> Level Air</bold></label>    
                                </div>
                  
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Waduk</label>
                                        <input type="text" name="waduk" value="<?php echo $data['waduk']; ?>" class="form-control"  placeholder="Data Waduk" required >
                                        </div>

                                        <div class="form-group col-md-12">
                                        <label for="inputEmail4">Sungai</label>
                                        <input type="text" name="sungai" value="<?php echo $data['sungai']; ?>" class="form-control"  placeholder="Data Sungai" required >
                                    </div>

                            </div>

                           

                           <div class="col-12 col-sm-12 col-lg-12">
                            
                                <div class="form-group col-md-12">
                                        <label for="inputEmail4">Shift Operator</label>
                                        <select class="form-control select2" name="id_jadwal_shift" required>
                                      
                                                                <?php
                                                                    $query1= mysql_query("SELECT * FROM jadwal_shift
                                                                    INNER JOIN shift on shift.id_shift = jadwal_shift.id_shift            
                                                                    INNER JOIN user on user.id_user = jadwal_shift.id_user
                                                                    INNER JOIN pegawai on pegawai.id_pegawai = user.id_pegawai
                                                                    INNER JOIN jabatan on jabatan.id_jabatan = pegawai.id_jabatan
                                                                    INNER JOIN divisi on divisi.id_divisi = pegawai.id_divisi
                                                                    INNER JOIN bagian on bagian.id_bagian = divisi.id_bagian
                                                                    ORDER BY id_jadwal_shift");
                                                                    while($data1=mysql_fetch_assoc($query1))
                                                                    {
                                                                        $selected = ($data1['id_jadwal_shift']==$id_jadwal_shift) ? "selected" : "";
                                                                        echo "<option value='$data1[id_jadwal_shift]' $selected>$data1[shift] / $data1[nama_lengkap]
                                                                        / $data1[bagian] / $data1[jabatan] / $data1[divisi] </option>";
                                                                                    }
                                                                                ?>
                                                        </select>
                                </div>
                                      
                            </div>

                            </div>

                          


                          

                            
                   

          
            

                  
                  <div class="card-footer">
                  <button type="submit" value="Simpan" name="update" class="btn btn-primary fa fa-dot-circle-o"> Simpan</button>
                                        <button type="submit"  class="btn btn-danger " data-dismiss="modal">Kembali</button>
                  </div>
                  
                   </form>
      </div>