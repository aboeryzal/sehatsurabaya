<?php

include('config.php');

session_start();

if (isset($_POST['namaadmin']) && isset($_POST['passadmin'])) {

$sql="Select * from useradmin where namaadmin='" . $user . "' and passadmin='". $pass ."'";
$result = mysql_query($sql, $conn);
$num=mysql_num_rows($result);

if ($num == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:index.html');
} else {
	echo '<h3>admin tak terdaftar</h3>';
    //kalau username ataupun password tidak terdaftar di database
    //header('location:admin.php?error=4');
}
}
else{}
?>