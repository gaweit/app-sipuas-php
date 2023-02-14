<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
       
        $id = $_POST['id_kb'];
        $tgl=$_POST['tgl_kb'];
        $to_tbs=$_POST['to_tbs'];
        $segar=$_POST['segar'];
        $busuk=$_POST['busuk'];
        $sampah=$_POST['sampah'];
        $ket=$_POST['ket_kb'];

        $query=mysql_query("UPDATE kualitas_brondolan SET to_tbs='$to_tbs',segar='$segar',busuk='$busuk',sampah='$sampah',tgl_kb='$tgl',ket_kb='$ket' WHERE id_kb='$id'");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Update');
                            window.location = '../../kualitas_brondolan.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Update');
                               window.location = '../../kualitas_brondolan.php'; 
            </script>";
        }
  
}

?>








