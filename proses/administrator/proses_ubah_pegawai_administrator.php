<?php
 include '../../includes/defines.php';
 if(isset($_POST['update']))
    {       
      ini_set("display_errors",0);
      $id_pegawai=$_POST['id_pegawai'];
      $id_card=$_POST['id_card'];
      $nama_lengkap=$_POST['nama_lengkap'];
      $id_divisi=$_POST['id_divisi'];
      $id_jabatan=$_POST['id_jabatan'];
   
   
        $query=mysql_query("UPDATE pegawai SET id_pegawai='$id_pegawai', id_card='$id_card',
        nama_lengkap='$nama_lengkap', id_divisi='$id_divisi' ,id_jabatan='$id_jabatan' WHERE id_pegawai=$id_pegawai");
          if($query==TRUE)
         {
           echo "<script> window.alert('Data Berhasil Di Ubah');
                            window.location = '../../data_pegawai_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Di Ubah');
                            window.location = '../../data_pegawai_administrator.php'; 
            </script>";
        }
  }
?>