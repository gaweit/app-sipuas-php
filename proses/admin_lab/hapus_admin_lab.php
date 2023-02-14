<?php
ini_set("display_errors",0);
 include("../../includes/defines.php");
session_start();
$query=mysql_query("DELETE FROM wtp_lab WHERE id_wtp= '".$_GET['id']."'");
 echo "<script> window.alert('Data Berhasil di Hapus');
                            window.location = '../../data_wtp_admin_lab.php'; 
                    </script>";
?>