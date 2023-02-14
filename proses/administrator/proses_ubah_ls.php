<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
       

   $id=$_POST['id_ls'];
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

        $query=mysql_query("UPDATE losses SET total_oiloss='$total_oiloss',olebp='$olebp',olfp='$olfp',ols='$ols',olfe='$olfe',tkl='$tkl',kle='$kle',klfc='$klfc',kll_1='$kll_1',kll_2='$kll_2',klh='$klh',tgl_ls='$tgl',ket_ls='$ket' WHERE id_ls='$id'");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Update');
                            window.location = '../../losses.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Update');
                               window.location = '../../losses.php'; 
            </script>";
        }
  
}

?>








