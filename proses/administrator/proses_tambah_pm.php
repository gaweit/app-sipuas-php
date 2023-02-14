<?php
 include("../../includes/defines.php");
 if(isset($_POST['simpan']))
    {   
        ini_set("display_errors",0);

//    $id=$_POST['id_card'];
   $tgl=$_POST['tgl_pm'];
   $oer=$_POST['oil_extract'];
   $ffa=$_POST['ffa'];
   $mcpo=$_POST['moisture_cpo'];
   $dcpo=$_POST['dirt_cpo'];
   $ker=$_POST['kernel_extract'];
   $mk=$_POST['moisture_kernel'];
   $dk=$_POST['dirt_kernel'];
   $ket=$_POST['ket_pm'];

        $query=mysql_query("INSERT INTO performance_mill (id_pm,oil_extract,ffa,moisture_cpo,dirt_cpo,kernel_extract,moisture_kernel,dirt_kernel,breakdown,tgl_pm,ket_pm) 
                Values ('','$oer','$ffa','$mcpo','$dcpo','$ker','$mk','$dk',NULL,'$tgl','$ket')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../performance_mill.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../performance_mill.php'; 
            </script>";
        }
  
}

?>








