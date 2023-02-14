<?php

    function tanggal_indo($tanggal)
    {
        $tgl = substr($tanggal,8,2);
        $bulan = getbulan(substr($tanggal,5,2));
        $tahun = substr($tanggal,0,4);
        return $tgl.' '.$bulan.' '.$tahun;
    }
    function getbulan($bln)
    {
        switch ($bln) {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;                
        }
    }
?>