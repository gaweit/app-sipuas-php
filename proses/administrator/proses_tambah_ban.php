<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card'];
        $tgl_ban=$_POST['tgl_ban'];
        $ket=$_POST['ket']; 
        $tippler_cap_5ton=$_POST['tippler_cap_5ton']; 
        $sfb_conveyor01=$_POST['sfb_conveyor01']; 
        $sfb_conveyor02=$_POST['sfb_conveyor02']; 
        $threser01=$_POST['threser01']; 
        $threser02=$_POST['threser02']; 
        $threser03=$_POST['threser03']; 
        $discharge_conveyor01=$_POST['discharge_conveyor01']; 
        $discharge_conveyor02=$_POST['discharge_conveyor02']; 
        $discharge_conveyor03=$_POST['discharge_conveyor03']; 
        $eb_conveyor=$_POST['eb_conveyor']; 

    $query=mysql_query("SELECT id_bantingan FROM bantingan ORDER BY id_bantingan DESC LIMIT 1");
    $data=mysql_fetch_assoc($query);
    $id_bantingan=$data['id_bantingan']+1; 
    $query=mysql_query("INSERT INTO bantingan (id_bantingan,tgl_ban,ket,tippler_cap_5ton,sfb_conveyor01,sfb_conveyor02,threser01,threser02,threser03,discharge_conveyor01,discharge_conveyor02,discharge_conveyor03,eb_conveyor) 
        Values ('$id_bantingan','$tgl_ban','$ket','$tippler_cap_5ton','$sfb_conveyor01','$sfb_conveyor02','$threser01','$threser02','$threser03','$discharge_conveyor01','$discharge_conveyor02','$discharge_conveyor03','$eb_conveyor' )");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../bantingan.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../bantingan.php'; 
    </script>";
}

}

?>