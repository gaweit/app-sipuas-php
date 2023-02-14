<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
        ini_set("display_errors",0);

   $id_card=$_POST['id_card'];
   $nama_lengkap=$_POST['nama_lengkap'];
   $id_divisi=$_POST['id_divisi'];
   $id_jabatan=$_POST['id_jabatan'];

        $query=mysql_query("INSERT INTO pegawai (id_card,nama_lengkap,id_divisi,id_jabatan) 
                Values ('$id_card','$nama_lengkap','$id_divisi','$id_jabatan')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../data_pegawai_administrator.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../data_pegawai_administrator.php'; 
            </script>";
        }
  
}

?>








