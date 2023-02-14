<?php

include '../../includes/defines.php';
if(isset($_POST['update']))
   {       
    $id_user=$_POST['id_user'];
    $id_pegawai=$_POST['id_pegawai'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    $status=$_POST['status'];

       $query=mysql_query("UPDATE user SET id_user='$id_user', nama='$nama', username='$username', password='$password', 
       level='$level', status='$status', id_pegawai='$id_pegawai' WHERE id_user=$id_user");


         if($query==TRUE)
        {
          echo "<script> window.alert('Data Berhasil Di Ubah');
                           window.location = '../../data_pengguna_administrator.php'; 
                   </script>";
       }
       else{
           echo "<script> window.alert('Data Gagal Di Ubah');
                           window.location = '../../data_pengguna_administrator.php'; 
           </script>";
       }
 }
?>