<?php
header("Content-Type : application/json");

include 'Connect_To_DB.php';
$obj = new Connect_To_DB();

$rows = $obj->getAll('SELECT * FROM user_detail WHERE authorize LIKE "NSB"');
$jsondata = '';
$rowdata = '';
foreach ($rows as $row) {
  # code...
  $rowdata .= '{
            "fname":"'.$row['first_name'].'",
            "lname":"'.$row['last_name'].'",
            "mail":"'.$row['mail_id'].'",
            "auth":"'.$row['authorize'].'"
          },';
          //echo $row['first_name'];

}
$jsondata = '['.rtrim($rowdata,",").']';
echo $jsondata;
 ?>
