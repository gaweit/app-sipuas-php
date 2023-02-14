<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card'];   
        $hcbc=$_POST['hcbc'];
        $fcf_a__l_01=$_POST['fcf_a__l_01'];
        $fcf_a__l_02=$_POST['fcf_a__l_02'];
        $npd_01=$_POST['npd_01'];
        $npd_02=$_POST['npd_02'];
        $inclened_wnc_01=$_POST['inclened_wnc_01'];
        $inclened_wnc_02=$_POST['inclened_wnc_02'];
        $wet_ne_01=$_POST['wet_ne_01'];
        $wet_ne_02=$_POST['wet_ne_02'];
        $nut_df_a__l01=$_POST['nut_df_a__l01'];
        $primari_wf_a__l01=$_POST['primari_wf_a__l01'];
        $primari_wf_a__l02=$_POST['primari_wf_a__l02'];
        $scondary_wf_a__l01=$_POST['scondary_wf_a__l01'];
        $scondary_wf_a__l02=$_POST['scondary_wf_a__l02'];
        $nut_hopper=$_POST['nut_hopper'];
        $rm_01=$_POST['rm_01'];
        $rm_02=$_POST['rm_02'];
        $rm_03=$_POST['rm_03'];
        $rm_04=$_POST['rm_04'];
        $cmc_01=$_POST['cmc_01'];
        $cmc_02=$_POST['cmc_02'];
        $cms=$_POST['cms'];
        $hp01_line1=$_POST['hp01_line1'];
        $hp02_line1=$_POST['hp02_line1'];
        $hp03_line1=$_POST['hp03_line1'];
        $hp01_line2=$_POST['hp01_line2'];
        $hp02_line2=$_POST['hp02_line2'];
        $hp03_line2=$_POST['hp03_line2'];
        $wetshell_c=$_POST['wetshell_c'];
        $wetshell_tf=$_POST['wetshell_tf'];
        $wkc_01=$_POST['wkc_01'];
        $wkc_02=$_POST['wkc_02'];
        $wkc_03=$_POST['wkc_03'];
        $wke_01=$_POST['wke_01'];
        $wke_02=$_POST['wke_02'];
        $wkdc=$_POST['wkdc'];
        $kds_hf01=$_POST['kds_hf01'];
        $kds_hf02=$_POST['kds_hf02'];
        $kds_hf03=$_POST['kds_hf03'];
        $bottom_kc=$_POST['bottom_kc'];
        $dry_ktf=$_POST['dry_ktf'];
        $kbs_01=$_POST['kbs_01'];
        $ltds_al1=$_POST['ltds_al1'];
        $ltds_al2=$_POST['ltds_al2'];
        $kernel_silo1=$_POST['kernel_silo1'];
        $kernel_silo2=$_POST['kernel_silo2'];
        $kernel_silo3=$_POST['kernel_silo3'];
        $tanggal=$_POST['tanggal'];
        $ket =$_POST['ket'];

    $query=mysql_query("SELECT id_nutkernel FROM nut_kernel ORDER BY id_nutkernel DESC LIMIT 1");
    $data=mysql_fetch_assoc($query);
    $id_nutkernel=$data['id_nutkernel']+1; 
    $query=mysql_query("INSERT INTO nut_kernel (id_nutkernel,hcbc,fcf_a__l_01,fcf_a__l_02,npd_01,npd_02,inclened_wnc_01,inclened_wnc_02,wet_ne_01,wet_ne_02,nut_df_a__l01,primari_wf_a__l01,primari_wf_a__l02,scondary_wf_a__l01,scondary_wf_a__l02,nut_hopper,rm_01,rm_02,rm_03,rm_04,cmc_01,cmc_02,cms,hp01_line1,hp02_line1,hp03_line1,hp01_line2,hp02_line2,hp03_line2,wetshell_c,wetshell_tf,wkc_01,wkc_02,wkc_03,wke_01,wke_02,wkdc,kds_hf01,kds_hf02,kds_hf03,bottom_kc,dry_ktf,kbs_01,ltds_al1,ltds_al2,kernel_silo1,kernel_silo2,kernel_silo3,tanggal,ket) 
        Values ('$id_nutkernel','$hcbc', '$fcf_a__l_01', '$fcf_a__l_02', '$npd_01', '$npd_02', '$inclened_wnc_01', '$inclened_wnc_02', '$wet_ne_01', '$wet_ne_02', '$nut_df_a__l01', '$primari_wf_a__l01', '$primari_wf_a__l02', '$scondary_wf_a__l01', '$scondary_wf_a__l02', '$nut_hopper', '$rm_01', '$rm_02', '$rm_03', '$rm_04', '$cmc_01', '$cmc_02', '$cms', '$hp01_line1', '$hp02_line1', '$hp03_line1', '$hp01_line2', '$hp02_line2', '$hp03_line2', '$wetshell_c', '$wetshell_tf', '$wkc_01', '$wkc_02', '$wkc_03', '$wke_01', '$wke_02', '$wkdc', '$kds_hf01', '$kds_hf02', '$kds_hf03', '$bottom_kc', '$dry_ktf', '$kbs_01', '$ltds_al1', '$ltds_al2', '$kernel_silo1', '$kernel_silo2', '$kernel_silo3', '$tanggal', '$ket' )");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../nut_kernel.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../nut_kernel.php'; 
    </script>";
}

}

?>