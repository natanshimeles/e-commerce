<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    //header('Location:../login/index.php?login=loginagain');
    //exit();

    header("LOCATION: index.php");
    exit();

}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      alert("thank you for buying product will arrive in three days");
    </script>


  </body>
</html>
<?php

header("LOCATION: user.php");
 ?>
