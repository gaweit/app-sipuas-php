<?php
 include("../../includes/defines.php");
 if(isset($_POST['simpan']))
    {   
        ini_set("display_errors",0);

//    $id=$_POST['id_card'];
   $tgl=$_POST['tgl_bt'];
   $nilai=$_POST['nilai'];
   $ket=$_POST['ket_bt'];

        $query=mysql_query("INSERT INTO breakdown (id_bt,tgl_bt,nilai,ket_bt) 
                Values ('','$tgl','$nilai','$ket')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../breakdown_time.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../breakdown_time.php'; 
            </script>";
        }
  
}

?>








