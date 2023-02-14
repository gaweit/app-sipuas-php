

<?php

ini_set("display_errors",0);

 include("../../includes/defines.php");

session_start();



$query=mysql_query("DELETE FROM breakdown_maintenance WHERE id_bt= '".$_GET['id']."'");

 echo "<script> window.alert('Data Berhasil di Hapus');

                            window.location = '../../data_breakdown_admin_maintenance.php'; 

                    </script>";

        

?>