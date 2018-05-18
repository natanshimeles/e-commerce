<?php

$address_username = $_SESSION['name'];
$address_username=strip_tags(mysqli_real_escape_string($Connection,$address_username) );
//use prepared statment
$search_statment = "select * from user_address where username = '$address_username'" ;
//update to prepared statment
$search = $Connection->query($search_statment);

     if($search->num_rows > 0){
      $got= true;
      while($row = $search->fetch_assoc()) {

        $city = $row['City'];
        $subcity  = $row['subcity'];
        $district  = $row['District'];
        $phonenumber = $row['phone_number'];
        $textaddress = $row['address_in_full_text'];
      }
    }
    else{
      $got= false;

    }





if(!$got){
  $addresshaventsubmiited = '<form  action="submitaddress.php" method="post">
    <div class="form-group">
      <label for="city">City</label>
      <input class="form-control" type="text" id="city" required name="city" value="">

    </div>
    <div class="form-group">
      <label for="subcity">Sub-City</label>
      <input class="form-control" type="text" id="subcity" required name="subcity" value="">

    </div>
    <div class="form-group">
      <label for="District">District </label>
      <input class="form-control" type="text" id="District " required name="District" value="">

    </div>
    <div class="form-group">
      <label for="phonenumber">Phone number </label>
      <input class="form-control" type="number" id="phonenumber " required name="phonenumber" value="">

    </div>
    <div class="form-group">
      <label for="specficaddress">specific address</label>
      <TextArea row="3" class="form-control" name="specficaddress" required id="specficaddress"></TextArea>


    </div>
    <button type="submit" class="btn btn-info" name="set_address">submit</button>

  </form>';
echo "$addresshaventsubmiited";
}
else {
  $addresssubmiited = "<form  action='submitaddress.php' method='post'>
    <div class='form-group'>
      <label for='city'>City</label>
      <input class='form-control' type='text' id='city' required name='city' value='$city'>

    </div>
    <div class='form-group'>
    <label for='subcity'>Sub-City</label>
    <input class='form-control' name='subcity' id='subcity' value='$subcity' required>
    </div>
    <div class='form-group'>
      <label for='District'>District </label>
      <input class='form-control' type='text' id='District' required name='District' value='$district'>

    </div>
    <div class='form-group'>
      <label for='phonenumber'>Phone number </label>
      <input class='form-control' type='number' id='phonenumber' required name='phonenumber' value='$phonenumber'>

    </div>
    <div class='form-group'>
      <label for='specficaddress'>specific address</label>
      <TextArea row='3' class='form-control' name='specficaddress' required id='specficaddress' value='$textaddress'>$textaddress</TextArea>


    </div>
    <button type='submit' class='btn btn-info' name='update_address'>Update</button>

  </form>";
  echo "$addresssubmiited";
}



 ?>
