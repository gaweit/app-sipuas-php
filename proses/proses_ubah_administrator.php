<?php
 include("../includes/defines.php");
include("../includes/fungsi.php");

   
    if(isset($_POST['update']))
    {
   //   ini_set("display_errors",0);
   session_start();
   $id_user=$_SESSION['id_user'];
       $id_arsip=$_POST['id_arsip'];
      
       $judul=$_POST['judul'];
       

       $ekstensi_diperbolehkan = array('pdf','docx','xlsx');
        
        $file = $_FILES['file']['name']; // salah

        $x = explode('.', $file);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size']; //salah
        $file_tmp = $_FILES['file']['tmp_name']; //salah

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 2044070){
                move_uploaded_file($file_tmp, '../file/'.$file);

                     $simpan=mysql_query("UPDATE arsip SET id_arsip='$id_arsip', id_user='$id_user', judul='$judul', file='$file' 
                      WHERE id_arsip='$id_arsip'");

          if($simpan){
                    echo "<script>alert('FILE BERHASIL DI UPLOAD'); document.location='../data_arsip_administrator.php'</script>";
                }else{
                    echo "<script>alert('GAGAL MENGUPLOAD FILE'); document.location='../data_arsip_administrator.php'</script>";
                }

            }else{

                echo "<script>alert('UKURAN FILE TERLALU BESAR, MAX. 1MB'); document.location='../data_arsip_administrator.php'</script>";
            }
        }else{
            //ektensi file yang di upload tidak sesuai
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN'); document.location='../data_arsip_administrator.php'</script>";
        }


    }


?>
