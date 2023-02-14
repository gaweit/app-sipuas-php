<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card'];
    $tgl=$_POST['tgl_pb'];
    $w_1=$_POST['w_1'];
    $w_2=$_POST['w_2'];
    $fc_1=$_POST['fc_1'];
    $fc_2=$_POST['fc_2'];
    $lori=$_POST['lori'];
    $ket=$_POST['ket_pb'];

    $query=mysql_query("INSERT INTO penerimaan_buah (id_pb,tgl_pb,w_1,w_2,fc_1,fc_2,lori,ket_pb) 
        Values ('','$tgl','$w_1','$w_2','$fc_1','$fc_2','$lori','$ket')");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../penerimaan_buah.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../penerimaan_buah.php'; 
    </script>";
}

}

?> 