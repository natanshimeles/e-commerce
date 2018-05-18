<?php
session_start();
if (isset($_POST['set_address'])) {
  require "../includes/dbconn.php";
  $city = strip_tags(mysqli_real_escape_string($Connection,$_POST["city"]));
  $subcity = strip_tags(mysqli_real_escape_string($Connection,$_POST["subcity"]));
  $district = strip_tags(mysqli_real_escape_string($Connection,$_POST["District"]));
  $phonenumber = strip_tags(mysqli_real_escape_string($Connection,$_POST["phonenumber"]));
  $textaddress = strip_tags(mysqli_real_escape_string($Connection,$_POST["specficaddress"]));
  $username = strip_tags(mysqli_real_escape_string($Connection,$_SESSION['name']));

  if(empty($city) || empty($subcity)|| empty($district)|| empty($phonenumber)|| empty($textaddress)){
  header("Location:user.php?address=emptyfieldfound");
  exit();
}
else {
  $sql = "insert into user_address values(?,?,?,?,?,?)";
  $stmt = $Connection->prepare($sql);
  $stmt->bind_param("ssssss",$username,$city,$subcity,$district,$phonenumber,$textaddress);
  $stmt->execute();
    header("Location:user.php?address=submitted");

}
}



else if (isset($_POST['update_address'])) {
  require "../includes/dbconn.php";
  $city = strip_tags(mysqli_real_escape_string($Connection,$_POST["city"]));
  $subcity = strip_tags(mysqli_real_escape_string($Connection,$_POST['subcity']));
  $phonenumber = strip_tags(mysqli_real_escape_string($Connection,$_POST["phonenumber"]));
  $textaddress = strip_tags(mysqli_real_escape_string($Connection,$_POST["specficaddress"]));
  $district = strip_tags(mysqli_real_escape_string($Connection,$_POST["District"]));
  $username = strip_tags(mysqli_real_escape_string($Connection,$_SESSION['name']));

  if( empty($city) || empty($district)  || empty($phonenumber) || empty($textaddress) || empty($subcity) ){
  header("Location:user.php?address=emptyfieldfoundwhenupdate&subcity=$subcity");
  exit();
}
else {
  $sql = "update user_address set city=?, subcity=?,District=?,phone_number = ? , address_in_full_text = ?  where username =?";
  $stmt = $Connection->prepare($sql);
  $stmt->bind_param("ssssss",$city,$subcity,$district,$phonenumber,$textaddress,$username);
  $stmt->execute();
  header("Location:user.php?address=updated");


}
}


 ?>
