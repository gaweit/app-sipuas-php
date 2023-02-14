

<?php

ini_set("display_errors",0);

 include("../../includes/defines.php");

session_start();



$query=mysql_query("DELETE FROM breakdown WHERE id_bt= '".$_GET['id']."'");

 echo "<script> window.alert('Data Berhasil di Hapus');

                            window.location = '../../breakdown_time.php'; 

                    </script>";

        

?>