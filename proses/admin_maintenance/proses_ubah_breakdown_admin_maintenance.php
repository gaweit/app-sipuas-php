<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
       
        $id = $_POST['id_bt'];
        $tgl=$_POST['tgl_bt'];
        $nilai=$_POST['nilai'];
        $ket=$_POST['ket_bt'];

        $query=mysql_query("UPDATE breakdown SET tgl_bt='$tgl',nilai='$nilai',ket_bt='$ket' WHERE id_bt='$id'");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Update');
                            window.location = '../../data_breakdown_admin_maintenance.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Update');
                               window.location = '../../data_breakdown_admin_maintenance.php'; 
            </script>";
        }
  
}

?>








