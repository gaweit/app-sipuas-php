<?php
 include("../includes/defines.php");
include("../includes/fungsi.php");

   
    if(isset($_POST['update']))
    {
   //   ini_set("display_errors",0);

       $id_user=$_POST['id_user'];
        //$surat=$_POST['surat'];

           $ekstensi_diperbolehkan = array('jpg','png','jpeg');
        
        $foto = $_FILES['file']['name']; // salah

        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size']; //salah
        $file_tmp = $_FILES['file']['tmp_name']; //salah

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 2044070){
                move_uploaded_file($file_tmp, '../foto/'.$foto);

                     $simpan=mysql_query("UPDATE user SET id_user='$id_user', foto='$foto' WHERE id_user='$id_user'");

          if($simpan){
                    echo "<script>alert('FILE BERHASIL DI UPLOAD'); document.location='../halaman.php'</script>";
                }else{
                    echo "<script>alert('GAGAL MENGUPLOAD FILE'); document.location='../halaman.php'</script>";
                }

            }else{

                echo "<script>alert('UKURAN FILE TERLALU BESAR, MAX. 1MB'); document.location='../halaman.php'</script>";
            }
        }else{
            //ektensi file yang di upload tidak sesuai
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN'); document.location='../halaman.php'</script>";
        }


    }


?>
