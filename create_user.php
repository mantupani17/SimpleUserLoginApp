<?php
include 'Connect_To_DB.php';
$cdb = new Connect_To_DB();
$fname=$_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['mailid'];
if(isset($_POST['subtn'])){
  $sql = 'insert into user_detail(first_name,last_name,mail_id,authorize) values("'.$fname.'","'.$lname.'","'.$email.'","NSB")';
  $cdb->execute($sql);
    ?>
    <script lang="javascript" type="text/javascript">
      window.location.href='register_form.php?uname=<?php echo $email;?>';
    </script>
    <?php
}
else{
  ?>
  <script lang="javascript" type="text/javascript">
    window.location.href='index.php?UnSuccessful';
  </script>
  <?php
}
 ?>
