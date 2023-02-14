<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
   $id_bagian=$_POST['id_bagian'];
   $divisi=$_POST['divisi'];


        $query=mysql_query("INSERT INTO divisi (id_bagian,divisi) 
                Values ('$id_bagian','$divisi')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../data_divisi_administrator.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../data_divisi_administrator.php'; 
            </script>";
        }
  
}

?>








