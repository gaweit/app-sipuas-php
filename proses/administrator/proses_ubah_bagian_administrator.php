<?php
 include '../../includes/defines.php';
 if(isset($_POST['update']))
    {       
        $bagian=$_POST['bagian'];
        $id_bagian=$_POST['id_bagian'];
        $query=mysql_query("UPDATE bagian SET bagian='$bagian' WHERE id_bagian=$id_bagian");
          if($query==TRUE)
         {
           echo "<script> window.alert('Data Berhasil Di Ubah');
                            window.location = '../../data_bagian_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Di Ubah');
                            window.location = '../../data_bagian_administrator.php'; 
            </script>";
        }
  }
?>