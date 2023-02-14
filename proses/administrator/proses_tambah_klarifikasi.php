<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card']; 
        $vibrating_screen01=$_POST['vibrating_screen01'];
        $vibrating_screen02=$_POST['vibrating_screen02'];
        $vibrating_screen03=$_POST['vibrating_screen03'];
        $vibrating_screen04=$_POST['vibrating_screen04'];
        $cop_ssc_01=$_POST['cop_ssc_01'];
        $cop_ssc_02=$_POST['cop_ssc_02'];
        $cop_ssc_03=$_POST['cop_ssc_03'];
        $cop_ssc_04=$_POST['cop_ssc_04'];
        $sand_cyclone_ssc01=$_POST['sand_cyclone_ssc01'];
        $sand_cyclone_ssc02=$_POST['sand_cyclone_ssc02'];
        $vacum_dryer_w__c_pump_01=$_POST['vacum_dryer_w__c_pump_01'];
        $pop_01=$_POST['pop_01'];
        $pop_02=$_POST['pop_02'];
        $dotp_01=$_POST['dotp_01'];
        $dotp_02=$_POST['dotp_02'];
        $flow_meter=$_POST['flow_meter'];
        $orp_01=$_POST['orp_01'];
        $orp_02=$_POST['orp_02'];
        $slugepump_01=$_POST['slugepump_01'];
        $slugedump_02=$_POST['slugedump_02'];
        $decanter_01=$_POST['decanter_01'];
        $decanter_02=$_POST['decanter_02'];
        $dcc=$_POST['dcc'];
        $heavyphase_p01=$_POST['heavyphase_p01'];
        $heavyphase_p02=$_POST['heavyphase_p02'];
        $lighphase_p01=$_POST['lighphase_p01'];
        $lighphase_p02=$_POST['lighphase_p02'];
        $sluge_s01=$_POST['sluge_s01'];
        $sluge_s02=$_POST['sluge_s02'];
        $sluge_s03=$_POST['sluge_s03'];
        $rsp_01_tfp_2=$_POST['rsp_01_tfp_2'];
        $rsp_02_tfp_2=$_POST['rsp_02_tfp_2'];
        $sop_01=$_POST['sop_01'];
        $sop_02=$_POST['sop_02'];
        $hwp_01=$_POST['hwp_01'];
        $hwp_02=$_POST['hwp_02'];
        $compresor=$_POST['compresor'];
        $fat_pit=$_POST['fat_pit'];
        $oiltank_1=$_POST['oiltank_1'];
        $oiltank_2=$_POST['oiltank_2'];
        $buffertank_decanter=$_POST['buffertank_decanter'];
        $bt_ss=$_POST['bt_ss'];
        $recovery_tank=$_POST['recovery_tank'];
        $sluge_tank=$_POST['sluge_tank'];
        $ket=$_POST['ket'];
        $tanggal=$_POST['tanggal'];

    $query=mysql_query("SELECT id_klarifikasi FROM klarifikasi ORDER BY id_klarifikasi DESC LIMIT 1");
    $data=mysql_fetch_assoc($query);
    $id_klarifikasi=$data['id_klarifikasi']+1; 
    $query=mysql_query("INSERT INTO klarifikasi (id_klarifikasi,vibrating_screen01,vibrating_screen02,vibrating_screen03,vibrating_screen04,cop_ssc_01,cop_ssc_02,cop_ssc_03,cop_ssc_04,sand_cyclone_ssc01,sand_cyclone_ssc02,vacum_dryer_w__c_pump_01,pop_01,pop_02,dotp_01,dotp_02,flow_meter,orp_01,orp_02,slugepump_01,slugedump_02,decanter_01,decanter_02,dcc,heavyphase_p01,heavyphase_p02,lighphase_p01,lighphase_p02,sluge_s01,sluge_s02,sluge_s03,rsp_01_tfp_2,rsp_02_tfp_2,sop_01,sop_02,hwp_01,hwp_02,compresor,fat_pit,oiltank_1,oiltank_2,buffertank_decanter,bt_ss,recovery_tank,sluge_tank,ket,tanggal) 
        Values ('$id_klarifikasi','$vibrating_screen01','$vibrating_screen02','$vibrating_screen03','$vibrating_screen04','$cop_ssc_01','$cop_ssc_02','$cop_ssc_03','$cop_ssc_04','$sand_cyclone_ssc01','$sand_cyclone_ssc02','$vacum_dryer_w__c_pump_01','$pop_01','$pop_02','$dotp_01','$dotp_02','$flow_meter','$orp_01','$orp_02','$slugepump_01','$slugedump_02','$decanter_01','$decanter_02','$dcc','$heavyphase_p01','$heavyphase_p02','$lighphase_p01','$lighphase_p02','$sluge_s01','$sluge_s02','$sluge_s03','$rsp_01_tfp_2','$rsp_02_tfp_2','$sop_01','$sop_02','$hwp_01','$hwp_02','$compresor','$fat_pit','$oiltank_1','$oiltank_2','$buffertank_decanter','$bt_ss','$recovery_tank','$sluge_tank','$ket','$tanggal' )");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../klarifikasi.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../klarifikasi.php'; 
    </script>";
}

}

?>