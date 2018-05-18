<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    //header('Location:../login/index.php?login=loginagain');
    //exit();
    $login = false;
}
else {
  $login = true;
}


 ?>

 <?php


if (isset($_GET['key'])) {
  if (!empty(($_GET['key']))) {
    require "../includes/dbconn.php";
    $key_word = $_GET['key'];
    $key_word = substr($key_word, 0, 1);
    $sql = "select product_name,product_type,product_id from products where product_name LIKE ? or product_type LIKE ? or product_description like ? limit 12";
    $stmt = $Connection->prepare($sql);
    $key_word='%'.$key_word.'%';
    $stmt->bind_param("sss", $key_word, $key_word,$key_word);
    $stmt->execute();

    if($reslts_2 = $stmt->get_result()){
      $id = 0;

    }
    }


}
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/table.css">
    <link rel="stylesheet" href="style/slide.css">
    <link rel="stylesheet" href="style/loader.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" href="../images/logo/log3.jpg">


    <title>welcome to Adwa  ...</title>
  </head>
  <body  onload="myFunction()" style="background-color:#d0d6e2;">
    <center class="mt-4" id="mylogologo">
      <img   src="../images/logo/log2.png" alt="">

    </center>
    <div id="loader">


    </div>
    <div class="animate-bottom"  id="myDiv" style="display:none;">



    <div class="container-fluid">
      <div class="row bg-light fixed-top">
        <div class="col-md-1">

        </div>
        <div class="col-md-2">
          <a href='user.php'><img class="img-fluid" src="../images/logo/log2.png" alt="logo"></a>

        </div>
        <div class="col-md-1 pt-4 pb-4">
          <select class="form-control" name="selected_type" style="radius:40px;">
            <option selected value="food">food</option>
            <option value="electronics">electronics</option>
            <option value="clothes">clothes</option>
            <option value="body care">body care</option>
          </select>

        </div>

        <div class="col-md-4 pt-4 ">


          <input class="form-control" id="searched_s" name='searched_s'  onkeyup="showHint(this.value)" type="search"  placeholder="Search" aria-label="Search" style="display:inline-block;">

           <br>

          <div class="ml-4 p-4" id="show_searched" style="radius:30px;">
          </div>





        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-1 pt-4">
          <a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:36px"></i></a>

        </div>
        <div class="col-md-1 pt-4">
        <?php
        if($login)
           echo  "<a href='cart.php' onclick='return userhideshow();'><i class='fa fa-user' style='font-size:36px'></i></a>";
           ?>
        </div>
        <div class="col-md-1 mt-4">
          <?php

          if($login){
            echo "<a href='index.php'><Button class='btn btn-info' >logout</Button></a>";
          }
          else {
            echo "<a href='index.php'><button class='btn btn-info'>login</Button></a>";
          }

           ?>

        </div>

      </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<div class= "text-light" id="user" style="display:none;margin-bottom: 20px;opacity:0.7;z-index:20;">

  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4 bg-dark img-rounded pb-4">

      <?php if($login)
       require 'settinganduserinfo.php'; ?>

    </div>
    <div class="col-md-4">

    </div>

  </div>

</div>



    <div class="container-fluid"  >
      <div class="row">


        <div class="col-md-8">
          <div class="row" id="blockofimages">

              <?php
              $table_row = "<div class='col-md-4'>";

              $table_row_close = "</div>";
              $no=0;
              while($found_products = $reslts_2->fetch_assoc()) {
                $mainname=  str_replace(' ', '',$found_products['product_name'].$found_products['product_type']);
                $image = "<img class='img-responsive img-rounded' src='../sell/products/$mainname/product_picture' style=' width:400px; height: 300px;'>";
                $link= 'href=../sell/products/'.$mainname."?productid=".$found_products['product_id'];
                $key="<div class='text-center pr-4 mr-4'><a style='font-size:25px;'".$link." class='text-dark pr-4 mr-4'/>".$found_products['product_name']."</a></div>"."<br><br>";
                echo $table_row.$image."<br>"."$key";
                echo $table_row_close;
                $no++;
              }



               ?>





          </div>



        </div>
        <div class="col-md-1 vl">
          <!-- empty part dividor-->

        </div>
        <div class="col-md-3"  id="blockofads">



          <div class="row">
            <div class="col-md-12">
              <img src="my.gif" alt="">

            </div>

          </div>
          <br><br><br>


          <!-- ads new products-->
          <div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->


  <!-- Next and previous buttons -->

  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->


        </div>

      </div>

    </div>

    <div class="row">
      <div class="col-md-4">


      </div>
      <div class="col-md-8">

      </div>

    </div>


    <footer id="contact-us" class="sticky-bottom text-light bg-dark p-4 mt-0">
      <center><a href="#" class="go-top"><i class="fa fa-angle-up  fa-2x cyan-text" aria-hidden="true"></i></a></center>

          <!-- Copyright-->
          <div class="container-fluid ">
            <div class="row">
              <div class="col-md-4 " style="font-size:25px;">
                <div class="row ">
                  <div class="col-md-3 mb-4">
                    <a href="#" class="text-light">FAQS</a>

                  </div>
                  <div class="col-md-1 ">

                  </div>
                  <div class="col-md-3 mb-4">
                      <a href="#" class="text-light">Fans Blog</a>

                  </div>
                  <div class="col-md-1">

                  </div>
                  <div class="col-md-3 mb-4">
                      <a href="#" class="text-light">About-us</a>

                  </div>
                  <div class="col-md-1">

                  </div>

                </div>

                <div class="row">
                  <div class="col-md-3">
                    <a href="#" class="text-light">make money with us</a>

                  </div>
                  <div class="col-md-1">

                  </div>
                  <div class="col-md-3">
                      <a href="#" class="text-light">sell your products on our webiste</a>

                  </div>
                  <div class="col-md-1">

                  </div>
                  <div class="col-md-3">
                      <a href="#" class="text-light">Help</a>

                  </div>
                  <div class="col-md-1">

                  </div>

                </div>





          </div>
          <div class="col-md-4">

            <div class="row mb-4">
              <div class="col-md-12">
                <div class="h4">Follow us:</div>

              </div>

            </div>
            <div class="row mb-4">
              <div class="col-md-5">

              </div>
              <div class="col-md-1">
                <i class="fa fa-facebook" style="font-size:28px;color:blue"></i>

              </div>
              <div class="col-md-1">
                <i class="fa fa-twitter" style="font-size:28px;color:blue;"></i>
              </div>
              <div class="col-md-1">
                <i class="fa fa-weixin" style="font-size:28px;color:green;"></i>
              </div>
              <div class="col-md-4">

              </div>

            </div>
            <div class="row">
              <div class="col-md-12">


              </div>

            </div>



          </div>
          <div class="col-md-1">
          </div>

          <div class="col-md-3">
            <?php
            $customerser='<form class=""  method="post"  id="customer_service">
              <div class="form-group">
                  <label for="message">Customer service:</label>
                  <textarea class="form-control"name="name" id="customer_service_message" name="customer_service_message" rows="3">Customer service</textarea>
                </div>
                <button class="btn btn-info mb-4" type="submit" name="send_message" onclick="return send_customer_service_message();">send</button>

            </form>';
            if ($login) {
              echo $customerser;
            }
            else{
              echo "<a href='index.php'>create</a> an account to use customer service";
            }
            ?>


          </div>







          </div>

          <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-2">
              <p class="sticky-bottom" style="position:fixed;bottom:0;font-size:20px;">© 2018 Copyright adwa.com</p>

            </div>

            <div class="col-md-5">

            </div>


          </div>



          <!---==============================Javascript=========================================================-->
          <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              //Show or hide Go-Top button
              $(window).scroll(function() {
                if ($(this).scrollTop() > 700) {
                  $('.go-top').fadeIn(200);
                } else {
                  $('.go-top').fadeOut(200);
                }

              })

              //Animate the scroll to top
              $('.go-top').click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                  scrollTop: 0
                }, 300);

              })

            })
          </script>
          <!--/.Copyright -->


          <script type="text/javascript">
          var slideIndex = 0;
          showSlides();
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
              slideIndex = 1;
            }
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }


          </script>

          <script type="text/javascript">
          var myVar;
          function myFunction() {
            myVar = setTimeout(showPage, 3000);
          }

          function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("mylogologo").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
          }

          </script>

        </footer>
        <!--/.Footer-->
</div>



    <script type="text/javascript" src="scripts/search.js">

    </script>

    <script type="text/javascript">
    var user = document.getElementById('user');
    var images= document.getElementById('blockofimages');
    var ads= document.getElementById('blockofads');

    function userhideshow(){
      if(user.style.display=="none"){
      user.style.display="inline";
      images.style.display ="none"
      ads.style.display ="none";

    }
      else {
        //i
        user.style.display="none";
        images.style.display ="inline-flex";
          ads.style.display ="block";
      }
      return false;

    }

    </script>
    <script type="text/javascript" src="scripts/send_message.js">

    </script>



  </body>
</html>
