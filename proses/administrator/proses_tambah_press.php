<?php
include("../../includes/defines.php");
if(isset($_POST['simpan']))
{   
    ini_set("display_errors",0);

//    $id=$_POST['id_card'];
        $bottom_cross_conveyor=$_POST['bottom_cross_conveyor'];
        $fruit_evalator01=$_POST['fruit_evalator01'];
        $fruit_evalator02=$_POST['fruit_evalator02'];
        $fruit_evalator03=$_POST['fruit_evalator03'];
        $top_fdc=$_POST['top_fdc'];
        $digester01=$_POST['digester01'];
        $digester02=$_POST['digester02'];
        $digester03=$_POST['digester03'];
        $digester04=$_POST['digester04'];
        $digester05=$_POST['digester05'];
        $press01=$_POST['press01'];
        $press02=$_POST['press02'];
        $press03=$_POST['press03'];
        $press04=$_POST['press04'];
        $press05=$_POST['press05'];
        $sand_trap_tank=$_POST['sand_trap_tank'];
        $screen_waste_conveyor01=$_POST['screen_waste_conveyor01'];
        $screen_waste_conveyor02=$_POST['screen_waste_conveyor02'];
        $keterangan=$_POST['keterangan'];
        $tanggal=$_POST['tanggal'];

    $query=mysql_query("SELECT id_press FROM press ORDER BY id_press DESC LIMIT 1");
    $data=mysql_fetch_assoc($query);
    $id_press=$data['id_press']+1; 
    $query=mysql_query("INSERT INTO press (id_press,bottom_cross_conveyor,fruit_evalator01,fruit_evalator02,fruit_evalator03,top_fdc,digester01,digester02,digester03,digester04,digester05,press01,press02,press03,press04,press05,sand_trap_tank,screen_waste_conveyor01,screen_waste_conveyor02,keterangan,tanggal) 
        Values ('$id_press','$bottom_cross_conveyor', '$fruit_evalator01', '$fruit_evalator02', '$fruit_evalator03', '$top_fdc', '$digester01', '$digester02', '$digester03', '$digester04', '$digester05', '$press01', '$press02', '$press03', '$press04', '$press05', '$sand_trap_tank', '$screen_waste_conveyor01', '$screen_waste_conveyor02', '$keterangan', '$tanggal')");
    if($query==TRUE)
    {
     echo "<script> window.alert('Data Berhasil Di Tambahkan');
     window.location = '../../press.php'; 
     </script>";
 }
 else{

    echo "<script> window.alert('Data Gagal Di Tambahkan');
    window.location = '../../press.php'; 
    </script>";
}

}

?>