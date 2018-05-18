<?php
session_start();

if (isset($_POST['post_new_product'])) {

  require "../../includes/dbconn.php";
  $productname = strip_tags(mysqli_real_escape_string($Connection,$_POST['product_name']));
  $producttype= strip_tags(mysqli_real_escape_string($Connection,$_POST['product_type']));
  $productdescrition = strip_tags(mysqli_real_escape_string($Connection,$_POST['product_description']));
  $realprice = strip_tags(mysqli_real_escape_string($Connection,$_POST['real_price']));
  $salePrice = strip_tags(mysqli_real_escape_string($Connection,$_POST['sale_price']));


  if(empty($productname) || empty($producttype) || empty($productdescrition)){
    header("Location: index.php?posting=emptyfieldsfound");
    exit();
  }
  else {
    $sql = "insert into products(product_type,product_name,product_description,real_price,sale_price) values(?,?,?,?,?) ";
    if(  $stmt = $Connection->prepare($sql)){
      $stmt = $Connection->prepare($sql);
      $stmt->bind_param("sssii", $producttype,$productname,$productdescrition,$realprice,$salePrice);
      $mainname= str_replace(' ', '', $productname.$producttype);
      $mainname= str_replace("''", '',$mainname);
      $mainname= str_replace('""', '',$mainname);
      $name="../products/".$mainname;
      if(!isset($_FILES['product_picture'])){
        header("Location: index.php?posting=unsucessfullyposted");
        exit();

      }

      if(mkdir($name, 0777, true) && $stmt->execute()   ){
        $file_new_name = "product_picture";


        $uploading_dir = "../products/$mainname/";
        $tmp_name = $_FILES["product_picture"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        //$uploading_dir = str_replace(' ', '', $uploading_dir);
        if(move_uploaded_file($tmp_name, $uploading_dir.$file_new_name)&& copy("../../sample_container.php",$uploading_dir."index.php" )){
          header("Location: index.php?posting=sucessfullyposted");
          exit();

        }




      }
      else {
        ///unsucessfully posted
        header("Location: index.php?posting=erroroccered");
        exit();
      }

    }
    else{
      //can't prepare statment
        header("Location: index.php?posting=erroroccered");
        exit();
    }


  }





}


 ?>
