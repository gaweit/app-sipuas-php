<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card'];
    $tgl=$_POST['tanggal'];
    $ket=$_POST['ket_reb'];
    $fruit_tc01=$_POST['fruit_tc01'];
    $fruit_tc02=$_POST['fruit_tc02'];
    $sterilizer01=$_POST['sterilizer01'];
    $sterilizer02=$_POST['sterilizer02'];
    $sterilizer03=$_POST['sterilizer03'];
    $drawbrige01=$_POST['drawbrige01'];
    $drawbrige02=$_POST['drawbrige02'];
    $drawbrige03=$_POST['drawbrige03'];
    $power_pack1=$_POST['power_pack1'];
    $power_pack2=$_POST['power_pack2'];
    $power_pack3=$_POST['power_pack3'];
    $hut01=$_POST['hut01'];
    $hut02=$_POST['hut02'];
    $hut03=$_POST['hut03'];
    $hut04=$_POST['hut04'];
    $hut05=$_POST['hut05'];
    $hut06=$_POST['hut06'];
    $hut07=$_POST['hut07'];
    $blowdown_chambers=$_POST['blowdown_chambers'];

    $query=mysql_query("SELECT id_reb FROM rebusan_proses ORDER BY id_reb DESC LIMIT 1");
    $data=mysql_fetch_assoc($query);
    $id_reb=$data['id_reb']+1; 
    $query=mysql_query("INSERT INTO rebusan_proses (id_reb,tanggal,ket_reb,fruit_tc01 ,fruit_tc02 ,sterilizer01 ,sterilizer02 ,sterilizer03 ,drawbrige01 ,drawbrige02 ,drawbrige03 ,power_pack1 ,power_pack2 ,power_pack3 ,hut01 ,hut02 ,hut03 ,hut04 ,hut05 ,hut06 ,hut07 ,blowdown_chambers ) 
        Values ('$id_reb','$tgl','$ket','$fruit_tc01','$fruit_tc02','$sterilizer01','$sterilizer02','$sterilizer03','$drawbrige01','$drawbrige02','$drawbrige03','$power_pack1','$power_pack2','$power_pack3','$hut01','$hut02','$hut03','$hut04','$hut05','$hut06','$hut07','$blowdown_chambers')");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../rebusan.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../rebusan.php'; 
    </script>";
}

}

?>