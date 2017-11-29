<?php
$uname = $_REQUEST['uname'];
 ?>
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
         <form action="set_password.php" method="POST">
             <label for="uname">uname</label>
             <input type="email" name="uname" placeholder="email" value="<?php echo $uname;?>"/>
             <label for="pass1">Password</label>
             <input type="password" name="pass1" placeholder="Password"/>
             <label for="pass2">Email</label>
             <input type="password" name="pass2" placeholder="Confirm"/>
             <button type="submit" name="rebtn" >Resgister</button>
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
             <input type="password" name="upass" placeholder="password"/>
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
