<?php
 include("../../includes/defines.php");
 include("../../includes/fungsi.php");
 if(isset($_POST['update']))
    {   
  ini_set("display_errors",0);


   $nama=$_POST['nama'];
   $komentar=$_POST['komentar'];





        $query=mysql_query("INSERT INTO pengaduan (nama,komentar) 
                Values ('$nama','$komentar')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../laporan.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../laporan.php'; 
            </script>";
        }
  
}

?>
