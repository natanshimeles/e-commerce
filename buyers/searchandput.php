<?php

require "../includes/dbconn.php";

$sql = "select product_name,product_type,product_id from products  limit 20";
$stmt = $Connection->prepare($sql);
$stmt->execute();

if($res = $stmt->get_result()){
  $id = 0;

}



 ?>
