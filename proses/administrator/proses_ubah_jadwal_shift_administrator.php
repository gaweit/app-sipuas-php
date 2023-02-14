<?php
 include '../../includes/defines.php';
 if(isset($_POST['update']))
    {       
   $id_jadwal_shift=$_POST['id_jadwal_shift'];
   $id_user=$_POST['id_user'];
   $id_shift=$_POST['id_shift'];
   
        $query=mysql_query("UPDATE jadwal_shift SET id_jadwal_shift='$id_jadwal_shift', id_user='$id_user',
        id_shift='$id_shift' WHERE id_jadwal_shift=$id_jadwal_shift");
          if($query==TRUE)
         {
           echo "<script> window.alert('Data Berhasil Di Ubah');
                            window.location = '../../data_jadwal_shift_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Di Ubah');
                            window.location = '../../data_jadwal_shift_administrator.php'; 
            </script>";
        }
  }
?>