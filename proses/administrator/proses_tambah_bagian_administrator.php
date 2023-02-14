<?php
    if(isset($_POST['update']))
    {
         include("../../includes/defines.php");
        $bagian=$_POST['bagian'];
        $query=mysql_query("SELECT id_bagian FROM bagian ORDER BY id_bagian DESC LIMIT 1");
        $data=mysql_fetch_assoc($query);
        $id_bagian=$data['id_bagian']+1;
        $query=mysql_query("INSERT INTO bagian VALUES($id_bagian,'$bagian')");
        if($query==TRUE)
        {

           echo "<script> window.alert('Data Berhasil Ditambahkan');
                            window.location = '../../data_bagian_administrator.php'; 
                    </script>";
        }
        else{
            echo "<script> window.alert('Data Gagal Ditambahkan');
                            window.location = '../../data_bagian_administrator.php'; 
            </script>";
        }
  }
?>









