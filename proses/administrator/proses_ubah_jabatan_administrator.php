<?php
 include '../../includes/defines.php';
 if(isset($_POST['update']))
    {       
        $jabatan=$_POST['jabatan'];
        $id_jabatan=$_POST['id_jabatan'];
        $query=mysql_query("UPDATE jabatan SET jabatan='$jabatan' WHERE id_jabatan=$id_jabatan");
          if($query==TRUE)
         {
           echo "<script> window.alert('Data Berhasil Di Ubah');
                            window.location = '../../data_jabatan_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Di Ubah');
                            window.location = '../../data_jabatan_administrator.php'; 
            </script>";
        }
  }
?>