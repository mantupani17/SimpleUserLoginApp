<?php
include 'Connect_To_DB.php';
$obj = new Connect_To_DB();
$uid = $_REQUEST['uid'];
$res= 'SUB';
if(isset($uid)){
$sql = 'UPDATE user_detail SET authorize = "'.$res.'" WHERE mail_id LIKE "'.$uid.'"';
  $obj->execute($sql);
  echo $res;
  ?>
  <script lang="javascript" type="text/javascript">
    window.location.href='admin_dashboard.html?success';
  </script>
  <?php
  }
  else{
    ?>
    <script lang="javascript" type="text/javascript">
      window.location.href='admin_dashboard.html?unsuccess';
    </script>
    <?php
  }
?>
