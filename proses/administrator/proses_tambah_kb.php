<?php
 include("../../includes/defines.php");
 if(isset($_POST['simpan']))
    {   
        ini_set("display_errors",0);

//    $id=$_POST['id_card'];
   $tgl=$_POST['tgl_kb'];
   $to_tbs=$_POST['to_tbs'];
   $segar=$_POST['segar'];
   $busuk=$_POST['busuk'];
   $sampah=$_POST['sampah'];
   $ket=$_POST['ket_kb'];

        $query=mysql_query("INSERT INTO kualitas_brondolan (id_kb,to_tbs,segar,busuk,sampah,tgl_kb,ket_kb) 
                Values ('','$to_tbs','$segar','$busuk','$sampah','$tgl','$ket')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../kualitas_brondolan.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../kualitas_brondolan.php'; 
            </script>";
        }
  
}

?>








