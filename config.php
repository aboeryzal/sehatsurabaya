<?php
$host_name = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$db_name = 'sehatsurabaya';
	function tulis_error($msg){
		echo '<div class="msg_error">'.$msg.'</div>';
	}
// konek ke database
mysql_connect($host_name,$mysql_user,$mysql_pass) or die(tulis_error('gak bisa konek ke server'));
// select db
mysql_select_db($db_name)or die(tulis_error('database tidak ditemukan'));
?>