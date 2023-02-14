

<?php

ini_set("display_errors",0);

 include("../../includes/defines.php");

session_start();



$query=mysql_query("DELETE FROM jadwal_shift WHERE id_jadwal_shift= '".$_GET['id']."'");

 echo "<script> window.alert('Data Berhasil di Hapus');

                            window.location = '../../data_jadwal_shift_administrator.php'; 

                    </script>";

        

?>