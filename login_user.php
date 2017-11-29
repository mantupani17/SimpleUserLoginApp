<?php
include 'Connect_To_DB.php';
$cobj = new Connect_To_DB();

$user = $_POST['uid'];
$pass = md5($_POST['upass']);
//here it identify the user is valid if valid then it allowes to check the password is valid or not
$sql = 'SELECT * FROM user_detail WHERE mail_id LIKE "'.$user.'"';
$res = $cobj->getOne($sql);
if($res!=null){
  $uname = $res['mail_id'];
  // here it identifies the user is valid or not by using his/her password
  $sql1 = 'SELECT * FROM user WHERE user_name LIKE "'.$uname.'" AND pass LIKE "'.$pass.'"';
  $res1 = $cobj->getOne($sql1);
        if($res1!=null){
              echo '<h1>'.$res['first_name'].' '.$res['last_name'].'</h1>loggin successfuly!';
              }
        else{
            echo 'Password invalid!!';
            }
}
else{
  echo 'user not valid!!';
}

 ?>
