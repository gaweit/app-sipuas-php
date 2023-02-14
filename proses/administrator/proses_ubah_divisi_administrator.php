<?php
 include '../../includes/defines.php';
 if(isset($_POST['update']))
    {       
   $id_divisi=$_POST['id_divisi'];
   $id_bagian=$_POST['id_bagian'];
   $divisi=$_POST['divisi'];
   
        $query=mysql_query("UPDATE divisi SET id_divisi='$id_divisi', id_bagian='$id_bagian',
        divisi='$divisi' WHERE id_divisi=$id_divisi");
          if($query==TRUE)
         {
           echo "<script> window.alert('Data Berhasil Di Ubah');
                            window.location = '../../data_divisi_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Di Ubah');
                            window.location = '../../data_divisi_administrator.php'; 
            </script>";
        }
  }
?>