<?php
    if(isset($_POST['update']))
    {
         include("../../includes/defines.php");
        $jabatan=$_POST['jabatan'];
        $query=mysql_query("SELECT id_jabatan FROM jabatan ORDER BY id_jabatan DESC LIMIT 1");
        $data=mysql_fetch_assoc($query);
        $id_jabatan=$data['id_jabatan']+1;
        $query=mysql_query("INSERT INTO jabatan VALUES($id_jabatan,'$jabatan')");
        if($query==TRUE)
        {

           echo "<script> window.alert('Data Berhasil Ditambahkan');
                            window.location = '../../data_jabatan_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Ditambahkan');
                            window.location = '../../data_jabatan_administrator.php'; 
            </script>";
        }
  }
?>









