<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
       
        $id = $_POST['id_inter'];
        $tgl=$_POST['tgl_inter'];
        $unripe=$_POST['unripe'];
        $under=$_POST['under'];
        $ripe=$_POST['ripe'];
        $over_r=$_POST['over_r'];
        $empty_b=$_POST['empty_b'];
        $abnormal=$_POST['abnormal'];
        $long_stalk=$_POST['long_stalk'];
        $ket=$_POST['ket_inter'];

        $query=mysql_query("UPDATE tbs_internal SET unripe='$unripe',under='$under',ripe='$ripe',over_r='$over_r',empty_b='$empty_b',abnormal='$abnormal',long_stalk='$long_stalk',tgl_inter='$tgl',ket_inter='$ket' WHERE id_inter='$id'");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Update');
                            window.location = '../../tbs_internal.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Update');
                               window.location = '../../tbs_internal.php'; 
            </script>";
        }
  
}

?>








