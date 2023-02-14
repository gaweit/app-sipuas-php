<?php
 include("../../includes/defines.php");
 if(isset($_POST['simpan']))
    {   
        ini_set("display_errors",0);

//    $id=$_POST['id_card']; 
   $tgl=$_POST['tanggal'];
   $ket=$_POST['ket_reb'];
   

        $query=mysql_query("INSERT INTO rebusan_proses (id_reb,tanggal,ket_reb) 
                Values ('','$tgl','$ket')");
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








