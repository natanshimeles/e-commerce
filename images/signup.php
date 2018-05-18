<?php
session_destroy();

if (isset($_POST['signup']) )  {
  require_once 'dbconn.php';
  $first =  mysqli_real_escape_string($Connection, $_POST['new_firstname']);
  $second = mysqli_real_escape_string($Connection,$_POST['new_lastname']);
  $third = mysqli_real_escape_string($Connection,$_POST['new_email']);
  $fourth =mysqli_real_escape_string($Connection, $_POST['new_username']);
  $fifth = mysqli_real_escape_string($Connection,$_POST['new_password']);

  if(empty($first) || empty($second) || empty($third) || empty($fourth) || empty($fifth)){
    header("Location: ../index.php?signup=empty");
    exit();
  }
  else {
    // check if input chars are valid
    if(!preg_match("/[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $second) ){
      header("Location: ../index.php?signup=invalid");
      exit();

    }
    else {
      //check if email is invalid
      if(!filter_var($third,FILTER_VALIDATE_EMAIL)){
        header('Location: ../index.php?signup=invalidemail');
        exit();

      }
      else{
        $sql = "select * from user_password where username=?";
        $stmt = $Connection->prepare($sql);
        $stmt->bind_param("s", $fourth);
        $stmt->execute();

        if($res = $stmt->fetch()){

          header('Location: ../index.php?signup=userexists');

        }
        else{
          $fifth = password_hash($fifth, PASSWORD_DEFAULT);
          $sql = "insert into user_password(firstname,lastname,Email,username,password) values(?,?,?,?,?)";
          $stmt = $Connection->prepare($sql);
            $stmt->bind_param("sssss", $first,$second,$third,$fourth,$fifth);
            if($stmt->execute()){
                session_start();
                $_SESSION['name']=$fourth;
                $_SESSION['email']=$third;
                $stmt->close();
                $Connection->close();
                header('Location:../../sellersmain/index.php');
                exit();
              }
        }
      }
    }

  }




}
else{
  header("Location: ../login.php");
  exit();
}

 ?>
