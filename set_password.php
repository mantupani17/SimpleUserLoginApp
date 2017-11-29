<?php
include 'Connect_To_DB.php';
$obj = new Connect_To_DB();

$uname = $_POST['uname'];
$pass = $_POST['pass1'];
$pass1 = $_POST['pass2'];



if(isset($_POST['rebtn'])){
  if($pass==$pass1){
    $sql = 'INSERT INTO user(user_name,pass) VALUES ("'.$uname.'","'.md5($pass).'")';
   $obj->execute($sql);
   ?>
   <script>window.location.href="create_user.php?success"; </script>
   <?php
}
else{
  ?>
  <script>window.location.href="register_form.php?success";</script>
  <?php
}
}
else{
  ?>
  <script>window.location.href="register_form.php?unsuccess";</script>
  <?php
}

 ?>
