<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
       

   $id=$_POST['id_pm'];
   $tgl=$_POST['tgl_pm'];
   $oer=$_POST['oil_extract'];
   $ffa=$_POST['ffa'];
   $mcpo=$_POST['moisture_cpo'];
   $dcpo=$_POST['dirt_cpo'];
   $ker=$_POST['kernel_extract'];
   $mk=$_POST['moisture_kernel'];
   $dk=$_POST['dirt_kernel'];
   $ket=$_POST['ket_pm'];

        $query=mysql_query("UPDATE performance_mill SET oil_extract='$oer',ffa='$ffa',moisture_cpo='$mcpo',dirt_cpo='$dcpo',kernel_extract='$ker',moisture_kernel='$mk',dirt_kernel='$dk',tgl_pm='$tgl',ket_pm='$ket' WHERE id_pm='$id'");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Update');
                            window.location = '../../performance_mill.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Update');
                               window.location = '../../performance_mill.php'; 
            </script>";
        }
  
}

?>








