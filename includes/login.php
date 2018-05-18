<?php
session_start();
session_destroy();

if(isset($_POST["login"])){
  require "dbconn.php";
  $username = strip_tags(mysqli_real_escape_string($Connection,$_POST["username"]));
  $password = strip_tags(mysqli_real_escape_string($Connection,$_POST["password"]));


  if(empty($username) || empty($password)){
    header("Location: ../index.php?login=empty");
    exit();
  }
  else {
    //if(!preg_match() || !preg_match()){

    //}
    $sql = "select password,Email from user_password where username=?";
    $stmt = $Connection->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();


    if($res = $stmt->get_result()){
      $row = $res->fetch_assoc();
      $fetchedpassword = $row['password'];
      //echo $fetchedpassword;
      if(password_verify($password,$fetchedpassword) ){
        session_start();
        $_SESSION['name']=$username;
        $_SESSION['email'] = $row['Email'];
        $stmt->close();
        $Connection->close();

         header('Location:../../sellersmain/index.php');

      }
      else{


        header('Location: ../index.php?login=wrongusername');

      }



    }
    else{
       echo "hello";
      //header('Location: ../index.php?login=wrongusername');

    }




  }

}


 ?>
