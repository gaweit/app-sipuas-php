<?php
 include("../../includes/defines.php");
 if(isset($_POST['simpan']))
    {   
        ini_set("display_errors",0);

//    $id=$_POST['id_card'];
   $tgl=$_POST['tgl_ls'];
   $total_oiloss=$_POST['total_oiloss'];
   $olebp=$_POST['olebp'];
   $olfp=$_POST['olfp'];
   $ols=$_POST['ols'];
   $olfe=$_POST['olfe'];
   $tkl=$_POST['tkl'];
   $kle=$_POST['kle'];
   $klfc=$_POST['klfc'];
   $kll_1=$_POST['kll_1'];
   $kll_2=$_POST['kll_2'];
   $klh=$_POST['klh'];
   $ket=$_POST['ket_ls'];

        $query=mysql_query("INSERT INTO losses (id_ls,total_oiloss,olebp,olfp,ols,olfe,tkl,kle,klfc,kll_1,kll_2,klh,tgl_ls,ket_ls) 
                Values ('','$total_oiloss','$olebp','$olfp','$ols','$olfe','$tkl','$kle','$klfc','$kll_1','$kll_2','$klh','$tgl','$ket')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../losses.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../losses.php'; 
            </script>";
        }
  
}

?>








