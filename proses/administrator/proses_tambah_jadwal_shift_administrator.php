<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
        ini_set("display_errors",0);
  
   $id_user=$_POST['id_user'];
   $id_shift=$_POST['id_shift'];

   $cek=mysql_num_rows(mysql_query("SELECT id_user,id_shift FROM jadwal_shift WHERE id_user='$id_user' or id_shift='$id_shift' "));
   // Kalau username sudah ada yang pakai
   if ($cek > 0){
       echo"
     <script type=\"text/javascript\">
        alert(\"Mohon Maaf!!! cek kembali Nama dan Shift Data ini sudah terinput (Tidak boleh 1 orang 2 shift) coba yang lain !!!\")
        window.location = \"../../data_jadwal_shift_administrator.php\"
        ;
        </script>";
   }
   else{

        $query=mysql_query("INSERT INTO jadwal_shift (id_user,id_shift) 
                Values ('$id_user','$id_shift')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../data_jadwal_shift_administrator.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../data_jadwal_shift_administrator.php'; 
            </script>";
        }
}
  
}

?>








