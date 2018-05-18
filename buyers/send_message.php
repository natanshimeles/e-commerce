<?php
session_start();

if(isset($_GET["sendfromme"])){
  if (!empty($_GET["message"])) {
    require "../includes/dbconn.php";
    $message = $_GET["message"];
    $message = strip_tags(mysqli_real_escape_string($Connection, $message));
    $username =  $_SESSION['name'];
    $email = $_SESSION['email'];

    $sql = "insert into customer_message values(?,?,?)";
    $stmt = $Connection->prepare($sql);
    $stmt->bind_param("sss", $username,$email,$message);
    if($stmt->execute()){
      echo "message sent to customer service please wait for our reply through your email";

    }
    else{
      echo "error occured";
    }


  }
  else {
    echo "empty messages cant be send";
  }


}
 ?>
