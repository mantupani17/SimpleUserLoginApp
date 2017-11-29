<?php?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css" >
  header{
    background-color: black;
    height: 60px;
    background-position: top;
    }
  footer{
    background-color: black;
    height: 60px;
    background-position: bottom;
    margin-top: 560px;
  }
  .right-part{
    float: right;
    border: 2px;
    border-color: blue;
    width: 50%;

  }
  .left-part{
    float: left;
    border: 2px;
    border-color: blue;
    width: 50%;

}
.card{
  width:200px;
  height: auto;
  background-color: white;
  margin-left: 200px;
  margin-top: 10px;
}
  .panel-header{
      background-color: black;
      width: 200px;
      height: 50px;
      margin-left: 200px;
      margin-top: 100px;
      color:white;
      text-align: center;
  }
  .panel-footer{
    background-color: black;
    width: 200px;
    height: 50px;
    margin-left: 200px;
    margin-top: 10px;
    color: white;

  }
  .text-data{
    color:white;
    text-align: center;
    padding-top: 15px;
  }
  </style>
</head>
<body>
  <header>
  </header>
  <div class="">
    <div class="left-part">
      <div class="panel-header"><div class="text-data">User Detail</div></div>
      <div class="card">
        <form action="create_user.php" method="POST">
            <label for="fname">First name</label>
            <input type="text" name="fname" placeholder="first name"/>
            <label for="lname">Last name</label>
            <input type="text" name="lname" placeholder="last name"/>
            <label for="mailid">Email</label>
            <input type="email" name="mailid" placeholder="email"/>
            <button type="submit" name="subtn" >Resgister</button>
          </form>
        </div>
        <div class="panel-footer"><div class="text-data">hi</div></div>
      </div>
    </div>
    <div class="right-part">
        <div class="panel-header"><div class="text-data">Login Here!</div></div>
        <div class="card">
            <form action="login_user.php" method="POST">
              <label for="uid">Email</label>
              <input type="text" name="uid" placeholder="Email"/>
              <label for="upass">Password</label>
              <input type="password" name="pass" placeholder="password"/>
              <button type="submit" name="logbtn" >Login</button>
            </form>
        </div>
        <div class="panel-footer"><div class="text-data">Thankyou</div></div>
    </div>
  </div>
  <footer>
  </footer>
</body>
</html>
