<?php
 include("../../includes/defines.php");
 if(isset($_POST['simpan']))
    {   
        ini_set("display_errors",0);

//    $id=$_POST['id_card'];
   $tgl=$_POST['tgl_inter'];
   $unripe=$_POST['unripe'];
   $under=$_POST['under'];
   $ripe=$_POST['ripe'];
   $over_r=$_POST['over_r'];
   $empty_b=$_POST['empty_b'];
   $abnormal=$_POST['abnormal'];
   $long_stalk=$_POST['long_stalk'];
   $ket=$_POST['ket_inter'];

        $query=mysql_query("INSERT INTO tbs_internal (id_inter,unripe,under,ripe,over_r,empty_b,abnormal,long_stalk,tgl_inter,ket_inter) 
                Values ('','$unripe','$under','$ripe','$over_r','$empty_b','$abnormal','$long_stalk','$tgl','$ket')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../tbs_internal.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../tbs_internal.php'; 
            </script>";
        }
  
}

?>








