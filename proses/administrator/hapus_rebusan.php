

<?php

ini_set("display_errors",0);

 include("../../includes/defines.php");

session_start();



$query=mysql_query("DELETE FROM rebusan_proses WHERE id_reb= '".$_GET['id_reb']."'");

 echo "<script> window.alert('Data Berhasil di Hapus');

                            window.location = '../../rebusan.php'; 

                    </script>";

        

?>