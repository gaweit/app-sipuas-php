<?php
 include("../includes/defines.php");
include("../includes/fungsi.php");

   
    if(isset($_POST['update']))
    {
   //   ini_set("display_errors",0);

       $id_shift=$_POST['id_shift'];
       $shift=$_POST['shift'];
       

           $ekstensi_diperbolehkan = array('jpg','png','jpeg');
        
        $keterangan = $_FILES['file']['name']; // salah

        $x = explode('.', $keterangan);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size']; //salah
        $file_tmp = $_FILES['file']['tmp_name']; //salah

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 2044070){
                move_uploaded_file($file_tmp, '../assets2/'.$keterangan);

                     $simpan=mysql_query("UPDATE shift SET id_shift='$id_shift', keterangan='$keterangan' WHERE id_shift='$id_shift'");

          if($simpan){
                    echo "<script>alert('FILE BERHASIL DI UPLOAD'); document.location='../data_shift_administrator.php'</script>";
                }else{
                    echo "<script>alert('GAGAL MENGUPLOAD FILE'); document.location='../data_shift_administrator.php'</script>";
                }

            }else{

                echo "<script>alert('UKURAN FILE TERLALU BESAR, MAX. 1MB'); document.location='../data_shift_administrator.php'</script>";
            }
        }else{
            //ektensi file yang di upload tidak sesuai
            echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN'); document.location='../data_shift_administrator.php'</script>";
        }


    }


?>
