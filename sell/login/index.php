<?php
if(isset($_GET['signup'])){
  $message = $_GET['signup'];
  echo "<script type='text/javascript'>alert('$message');</script>";
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/loginstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body style="background-color:grey;">

    <form class="loginform" action="verify.php" method="post">
      <span>HOME</span>
      <div class="loginformelement">

        <label>User Name</label>

        <input type="text" name="username" value="">
        <label>Password</label>
        <input type="password" name="password" value="">
        <input type="submit"class="login" name="login" value="login">



      </div>


    </form>
    <br><br><br><br>



  </body>
</html>
