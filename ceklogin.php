
<?php
ini_set("display_errors",0);
include("includes/defines.php");
include("includes/functions.php");
//$username = $_POST['username'];
//$password = $_POST['password'];
$username = mysql_real_escape_string(htmlentities($_POST['username']));
$password = mysql_real_escape_string(htmlentities($_POST['password']));
$sql=mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."' AND status='aktif'") or die(mysql_error());
$i=1;
while ($data = mysql_fetch_array($sql)){
$id_user = $data['id_user'];
$user = $data['username'];
$pass = $data['password'];
$level = $data['level'];

$i++;
}

if (($username ==$user ) && ($password ==$pass )){
session_start();
    $_SESSION['id_user'] = $id_user;
	$_SESSION['username']= $username;
	$_SESSION['password'] = $password;
	$_SESSION['level'] = $level;	
echo "<script>
	  alert('Login Sukses');
	  window.location = 'halaman.php';
	  </script>
	  ";
}
else{
echo "<script>
	  alert('Login Gagal');
	  window.location = 'index.php';
	  </script>
	  ";
}
?>