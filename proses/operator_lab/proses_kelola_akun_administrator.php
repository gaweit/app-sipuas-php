<?php

include '../../includes/defines.php';
if(isset($_POST['update']))
   {       
    $id_user=$_POST['id_user'];
   
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];


       $query=mysql_query("UPDATE user SET id_user='$id_user', nama='$nama', username='$username', password='$password' WHERE id_user=$id_user");


         if($query==TRUE)
        {
          echo "<script> window.alert('Data Berhasil Di Ubah');
                           window.location = '../../halaman.php'; 
                   </script>";
       }
       else{
           echo "<script> window.alert('Data Gagal Di Ubah');
                           window.location = '../../halaman.php'; 
           </script>";
       }
 }
?>