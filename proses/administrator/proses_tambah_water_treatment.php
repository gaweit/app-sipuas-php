<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card'];   
        $fsc=$_POST['fsc'];
        $bfdc=$_POST['bfdc'];
        $mfs=$_POST['mfs'];
        $mfdc=$_POST['mfdc'];
        $bfrc=$_POST['bfrc'];
        $steam_b01=$_POST['steam_b01'];
        $dust_ca__l01=$_POST['dust_ca__l01'];
        $dust_ca__l02=$_POST['dust_ca__l02'];
        $ash_c_01=$_POST['ash_c_01'];
        $ash_c_02=$_POST['ash_c_02'];
        $ash_c_03=$_POST['ash_c_03'];
        $ash_c_04=$_POST['ash_c_04'];
        $id_fan01=$_POST['id_fan01'];
        $fd_fan01=$_POST['fd_fan01'];
        $sa_fan01=$_POST['sa_fan01'];
        $ff_fan01=$_POST['ff_fan01'];
        $fac_01=$_POST['fac_01'];
        $fac_02=$_POST['fac_02'];
        $fac_03=$_POST['fac_03'];
        $compresor_01=$_POST['compresor_01'];
        $boiler_fp01=$_POST['boiler_fp01'];
        $boiler_fp02=$_POST['boiler_fp02'];
        $thermal_dearator=$_POST['thermal_dearator'];
        $daeratorpump_01=$_POST['daeratorpump_01'];
        $dearatorpump_02=$_POST['dearatorpump_02'];
        $cd_pump01=$_POST['cd_pump01'];
        $cd_pump02=$_POST['cd_pump02'];
        $tanggal=$_POST['tanggal'];
        $ket=$_POST['ket'];

    $query=mysql_query("SELECT id_boiler FROM boiler ORDER BY id_boiler DESC LIMIT 1");
    $data=mysql_fetch_assoc($query);
    $id_boiler=$data['id_boiler']+1; 
    $query=mysql_query("INSERT INTO boiler (id_boiler,fsc,bfdc,mfs,mfdc,bfrc,steam_b01,dust_ca__l01,dust_ca__l02,ash_c_01,ash_c_02,ash_c_03,ash_c_04,id_fan01,fd_fan01,sa_fan01,ff_fan01,fac_01,fac_02,fac_03,compresor_01,boiler_fp01,boiler_fp02,thermal_dearator,daeratorpump_01,dearatorpump_02,cd_pump01,cd_pump02,tanggal,ket) 
        Values ('$id_boiler','$fsc','$bfdc','$mfs','$mfdc','$bfrc','$steam_b01','$dust_ca__l01','$dust_ca__l02','$ash_c_01','$ash_c_02','$ash_c_03','$ash_c_04','$id_fan01','$fd_fan01','$sa_fan01','$ff_fan01','$fac_01','$fac_02','$fac_03','$compresor_01','$boiler_fp01','$boiler_fp02','$thermal_dearator','$daeratorpump_01','$dearatorpump_02','$cd_pump01','$cd_pump02','$tanggal','$ket')");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../boiler.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../boiler.php'; 
    </script>";
}

}

?>