<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
  ini_set("display_errors",0);

   $id_pegawai=$_POST['id_pegawai'];
   $nama=$_POST['nama'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $level=$_POST['level'];
   $status=$_POST['status'];
   $cek=mysql_num_rows(mysql_query("SELECT id_pegawai,nama FROM user WHERE nama='$nama' and id_pegawai='$id_pegawai' "));
   // Kalau username sudah ada yang pakai
   if ($cek > 0){
       echo"
     <script type=\"text/javascript\">
        alert(\"Mohon Maaf!!! cek kembali ID dan Nama Data ini sudah memiliki akun, coba yang lain !!!\")
        window.location = \"../../data_pengguna_administrator.php\"
        ;
        </script>";
   }
   else{


        $query=mysql_query("INSERT INTO user (nama,username,password,level,status,id_pegawai) 
                Values ('$nama','$username','$password','$level','$status','$id_pegawai')");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../data_pengguna_administrator.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../data_pengguna_administrator.php'; 
            </script>";
        }
}
  
}

?>
