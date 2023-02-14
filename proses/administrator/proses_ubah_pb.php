<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
       
        $id = $_POST['id_pb'];
        $tgl=$_POST['tgl_pb'];
        $w_1=$_POST['w_1'];
        $w_2=$_POST['w_2'];
        $fc_1=$_POST['fc_1'];
        $fc_2=$_POST['fc_2'];
        $lori=$_POST['lori'];
        $ket=$_POST['ket_pb'];

        $query=mysql_query("UPDATE penerimaan_buah SET w_1='$w_1',w_2='$w_2',fc_1='$fc_1',fc_2='$fc_2',lori='$lori',tgl_pb='$tgl',ket_pb='$ket' WHERE id_pb='$id'");
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Update');
                            window.location = '../../penerimaan_buah.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Update');
                               window.location = '../../penerimaan_buah.php'; 
            </script>";
        }
  
}

?>








