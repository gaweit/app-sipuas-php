

<?php

ini_set("display_errors",0);

 include("../../includes/defines.php");

session_start();



$query=mysql_query("DELETE FROM arsip WHERE id_arsip= '".$_GET['id']."'");

 echo "<script> window.alert('Data Berhasil di Hapus');

                            window.location = '../../data_arsip_administrator.php'; 

                    </script>";

        

?>