<?php
ini_set("display_errors",0);
include("includes/defines.php");
include("includes/fungsi.php");
session_start();

	if(isset($_GET['id_wtp'])) {	
		$query=mysql_query("UPDATE wtp_lab SET status_operator='Hilang', status_admin='Selesai'");
		echo "<script>
		window.location = 'data_wtp_operator_lab.php';
		</script>";
	}

?>