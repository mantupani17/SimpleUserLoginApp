<?php
/* this file is to provide authentication to a particular user */
include 'Connect_To_DB.php';
$cobj = new Connect_To_DB();

$sql = 'UPDATE user_detail set authorize="SUB" WHERE mail_id LIKE "mantupani17@gmail.com"';
$cobj->execute($sql);
echo 'Subcribe Successfully';
 ?>
