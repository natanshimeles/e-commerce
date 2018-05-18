<?php
if(isset($_GET['key'])){
  require "../includes/dbconn.php";
  $keyword=strip_tags(mysqli_real_escape_string($Connection,$_GET['key']));

}
if(!empty($keyword)){
  $keyword = "%{$keyword}%";
  $sql = "select product_name,product_type from products where product_type LIKE ? or product_name LIKE ? or product_description LIKE ?";
  $stmt = $Connection->prepare($sql);
  $stmt->bind_param("sss",$keyword, $keyword, $keyword);
  $stmt->execute();

  if($res = $stmt->get_result()){
    $row = $res->fetch_assoc();
    if($row != null){

    foreach ($row as $key => $value) {
      //$link = "../sell/products/".$row['product_name'].$row['product_type'];
      echo "<a href='search.php?key=$value' style='font-size:25px;'>$value</a>"."<br>";
    //  echo "<a href=$link style='font-size:25px;'>$value</a>"."<br>";
    }
  }
  else {
    echo "nothing found";
  }

  //  var_dump($row);



  }


}
else{
  echo "not found";
}

 ?>
