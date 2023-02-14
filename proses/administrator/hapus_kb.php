

<?php

ini_set("display_errors",0);

 include("../../includes/defines.php");

session_start();



$query=mysql_query("DELETE FROM kualitas_brondolan WHERE id_kb= '".$_GET['id']."'");

 echo "<script> window.alert('Data Berhasil di Hapus');

                            window.location = '../../kualitas_brondolan.php'; 

                    </script>";

        

?>