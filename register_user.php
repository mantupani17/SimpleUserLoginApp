<?php
/* register the new user */

include 'Connect_To_DB.php';
$cobj = new Connect_To_DB();

$user = 'mantupani17@gmail.com';
$pass = md5('m@ntup@ni');

$sql = 'INSERT INTO user(user_name,pass) VALUES("'.$user.'","'.$pass.'")';
$cobj -> execute($sql);

echo 'insert successfully';

 ?>
