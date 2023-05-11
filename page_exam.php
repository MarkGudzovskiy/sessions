<?php
header('Content-type: text/html; charset=utf-8');

require("connectdb.php");
require("session.php");

$result = mysqli_query($connect, "SELECT * FROM pages WHERE user_id=".$user['user_id']);
//$n = mysqli_query($connect, "SELECT COUNT(*) FROM pages WHERE user_id=".$user['user_id']);

if(!$result){
	echo "В базе данных нет страницы с таким id.";
	exit;
}

$content = mysqli_num_rows($result);
//$tmp = mysqli_fetch_array($n);
//$content = $tmp[0];

require("template.php");

?>