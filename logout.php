<?php

session_start();

unset($_SESSION['username']);

session_destroy();

echo '<script language="javascript">alert("Anda Keluar Dari Sistem!!"); document.location="index.php";</script>';

?>