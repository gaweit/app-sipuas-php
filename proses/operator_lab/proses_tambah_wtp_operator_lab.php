<?php
 include("../../includes/defines.php");
 if(isset($_POST['update']))
    {   
        ini_set("display_errors",0);
        session_start();
        $id_user=$_SESSION['id_user'];
        $tanggal=$_POST['tanggal'];
        $start_water_intake=$_POST['start_water_intake'];
        $stop_water_intake=$_POST['stop_water_intake'];
        $start_raw_water=$_POST['start_raw_water'];
        $stop_raw_water=$_POST['stop_raw_water'];
        $start_sand_filter1=$_POST['stop_sand_filter1'];
        $stop_sand_filter1=$_POST['stop_sand_filter1'];
        $start_sand_filter2=$_POST['start_sand_filter2'];
        $stop_sand_filter2=$_POST['stop_sand_filter2'];
        $start_softener1=$_POST['start_softener1'];
        $stop_softener1=$_POST['stop_softener1'];
        $start_softener2=$_POST['start_softener2'];
        $stop_softener2=$_POST['stop_softener2'];
        $start_pump_domestic1=$_POST['start_pump_domestic1'];
        $stop_pump_domestic1=$_POST['stop_pump_domestic1'];

        $start_pump_domestic2=$_POST['start_pump_domestic2'];
        $stop_pump_domestic2=$_POST['stop_pump_domestic2'];
        $soda=$_POST['soda'];
        $alum=$_POST['alum'];
        $N3273=$_POST['N3273'];
        $N214=$_POST['N214'];

        $N2811=$_POST['N2811'];
        $polymer=$_POST['polymer'];
        $NaCL=$_POST['NaCL'];
        $proses_awal=$_POST['proses_awal'];
        $proses_akhir=$_POST['proses_akhir'];
        $boiler_awal=$_POST['boiler_awal'];

        $boiler_akhir=$_POST['boiler_akhir'];
        $domestic_awal=$_POST['domestic_awal'];
        $domestic_akhir=$_POST['domestic_akhir'];
        $waduk=$_POST['waduk'];
        $sungai=$_POST['sungai'];
        $id_jadwal_shift=$_POST['id_jadwal_shift'];

        $status_operator=$_POST['status_operator'];

        $query=mysql_query("INSERT INTO wtp_lab (id_user,
        tanggal,
        start_water_intake,
        stop_water_intake,
        start_raw_water,
        stop_raw_water,
        start_sand_filter1,
        stop_sand_filter1,
        start_sand_filter2,
        stop_sand_filter2,
        start_softener1,
        stop_softener1,
        start_softener2,
        stop_softener2,
        start_pump_domestic1,
        stop_pump_domestic1,
        start_pump_domestic2,
        stop_pump_domestic2,
        soda,
        alum,
        N3273,
        N214,
        N2811,
        polymer,
        NaCL,
        proses_awal,
        proses_akhir,
        boiler_awal,
        boiler_akhir,
        domestic_awal,
        domestic_akhir,
        waduk,
        sungai,
        id_jadwal_shift,status_operator,status_admin,status_ass) 
        Values (
                '$id_user',
                '$tanggal',
                '$start_water_intake',
                '$stop_water_intake',
                '$start_raw_water',
                '$stop_raw_water',
                '$start_sand_filter1',
                '$stop_sand_filter1',
                '$start_sand_filter2',
                '$stop_sand_filter2',
                '$start_softener1',
                '$stop_softener1',
                '$start_softener2',
                '$stop_softener2',
                '$start_pump_domestic1',
                '$stop_pump_domestic1',
                '$start_pump_domestic2',
                '$stop_pump_domestic2',
                '$soda',
                '$alum',
                '$N3273',
                '$N214',
                '$N2811',
                '$polymer',
                '$NaCL',
                '$proses_awal',
                '$proses_akhir',
                '$boiler_awal',
                '$boiler_akhir',
                '$domestic_awal',
                '$domestic_akhir',
                '$waduk',
                '$sungai',
                '$id_jadwal_shift',
                'Menunggu',
                'Menunggu',
                'Menunggu')");        
        if($query==TRUE)
        {
           echo "<script> window.alert('Data Berhasil Di Tambahkan');
                            window.location = '../../data_wtp_operator_lab.php'; 
                    </script>";
        }
        else{

            echo "<script> window.alert('Data Gagal Di Tambahkan');
                               window.location = '../../data_wtp_operator_lab.php'; 
            </script>";
        }
  
}

?>








