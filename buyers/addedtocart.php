<?php
if (isset($_GET['product']) &&  isset( $_GET['person'])) {
require "../includes/dbconn.php";
strip_tags(mysqli_real_escape_string($Connection,$_GET['person']));
strip_tags(mysqli_real_escape_string($Connection, $_GET['product']));
$product_id = $_GET['product'];
$username = $_GET['person'];
if (!empty($product_id) && !empty($username)) {
  $sql= "insert into customer_cart values(?,?)";
  $stmt =$Connection->prepare($sql);
  $stmt->bind_param("si",$username, $product_id );
  $stmt->execute();
  header("Location:cart.php");



}

else {
  header("Location:user.php");
}


}
else{
  header("Location:user.php");

}






 ?>
