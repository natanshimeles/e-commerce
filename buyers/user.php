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

require "searchandput.php";



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
  <body  onload="myFunction()" style="background-color:#d0d6e2;font-family:Calibri;">
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

        </div>
        <div class="col-md-1 mt-4">

        </div>

      </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container-fluid">
      <div class="row text-light bg-dark pt-4 pb-4">
        <div class="col-md-2">
        <b>Home</b>

        </div>
        <div class="col-md-2">
          <b>cart</b>

        </div>
        <div class="col-md-2">
          <b>my account</b>

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">
          <?php
          if($login)
             echo  "<a href='cart.php' onclick='return userhideshow();'><i class='fa fa-user' style='font-size:24px; color:white;'></i></a>";
             ?>


        </div>
        <div class="col-md-2">
          <?php

          if($login){
            echo "<a href='index.php'  class='btn btn-light'>  logout</a>";
          }
          else {
            echo "<a href='index.php'  class='btn btn-light'>login</a>";
          }

           ?>


        </div>

      </div>


    </div>

    <div class="container-fluid bg-light">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <!-- Slideshow container -->
          <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="../images/comb1.jpg" style="width:100%">

            </div>
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="../images/comb2.jpg" style="width:100%">

            </div>
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="../images/comb3.jpg" style="width:100%">

            </div>
            <!-- Next and previous buttons -->

          </div>
          <br>
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        </div>
        <div class="col-md-2">

        </div>

      </div>


    </div>

<div class= "text-light pt-4 pb-4" id="user" style="display:none;margin-bottom: 20px;opacity:0.7;z-index:20;">

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



    <div class="container-fluid pb-4 pt-4"  >
      <div class="row">
        <div class="col-md-1">

        </div>

        <div class="col-md-1"  id="blockofads">
          <div class="row">
            <p class="h3 text-secondry b">Features</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">shoes</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">jeans</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">dresses</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">shirts</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">t-shirt</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">jacket</p><br><br><br>

          </div>
          <div class="row">
            <p class="h3 text-danger">suit</p><br><br><br>

          </div>
        </div>




        <div class="col-md-8">
          <div class="row" id="blockofimages">

              <?php
              $table_row = "<div class='col-md-4'>";

              $table_row_close = "</div>";
              $no=0;
              while($found_products = $res->fetch_assoc()) {
                $mainname=  str_replace(' ', '',$found_products['product_name'].$found_products['product_type']);
                $image = "<img class='img-responsive rounded-circle' src='../sell/products/$mainname/product_picture' style=' width:200px; height: 150px;'>";
                $image1[$no]="<img class='img-responsive img-thumbnail' src='../sell/products/$mainname/product_picture' style=' width:200px; height: 150px;'>";;
                $link= 'href=../sell/products/'.$mainname."?productid=".$found_products['product_id'];
                $key="<div class='text-center pr-4 mr-4'><a style='font-size:25px;'".$link." class='text-dark pr-4 mr-4'/>".$found_products['product_name']."</a></div>"."<br><br>";
                echo $table_row.$image."<br>"."$key";
                echo $table_row_close;
                $no++;
                if($no > 10){
                  break;
                }
              }



               ?>





          </div>



        </div>


      </div>

    </div>

    <div class="row">
      <div class="col-md-4">


      </div>
      <div class="col-md-8">

      </div>

    </div>
    <div class="container-fluid bg-light pt-4">
      <div class="row ">
        <div class="col-md-1 text-danger h5">



        </div>
        <div class="col-md-2 text-danger h5">
          New items


        </div>
        <div class="col-md-1 ">


        </div>
        <div class="col-md-8">

        </div>

      </div>
      <br>
      <div class="row ">
        <?php
        $table_row = "<div class='col-md-2'>";

        $table_row_close = "</div>";

        while($found_products = $res->fetch_assoc()) {
          $mainname=  str_replace(' ', '',$found_products['product_name'].$found_products['product_type']);
          $image = "<img class='img-responsive rounded' src='../sell/products/$mainname/product_picture' style=' width:200px; height: 150px;'>";
          $image1[$no]=$image;
          $link= 'href=../sell/products/'.$mainname."?productid=".$found_products['product_id'];
          $key="<div class='text-center pr-4 mr-4'><a style='font-size:25px;'".$link." class='text-dark pr-4 mr-4'/>".$found_products['product_name']."</a></div>"."<br><br>";
          echo $table_row.$image."<br>"."$key";
          echo $table_row_close;
          $no++;

        }



         ?>

      </div>

    </div>
    <div class="container-fluid bg-light pb-4">
      <div class="row">
        <div class="col-md-1 text-danger h5">



        </div>
        <div class="col-md-2 text-danger h5">
          special offer
          <br>


        </div>
        <div class="col-md-1 ">


        </div>
        <div class="col-md-8">

        </div>

      </div>
      <br><br>
      <div class="row ">
        <?php
        $table_row = "<div class='col-md-2'>";

        $table_row_close = "</div>";
        $no =0;

        while($no <6) {
          $mainname=  str_replace(' ', '',$found_products['product_name'].$found_products['product_type']);
          //$link= 'href=../sell/products/'.$mainname."?productid=".$found_products['product_id'];
          //$key="<div class='text-center pr-4 mr-4'><a style='font-size:25px;'".$link." class='text-dark pr-4 mr-4'/>".$found_products['product_name']."</a></div>"."<br><br>";
          echo $table_row.$image1[$no]."<br>";
          echo $table_row_close;
          $no++;

        }



         ?>

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
            $customerser='<form  id="customer_service" method="post"  >
              <div class="form-group">
                  <label for="message">Customer service:</label>
                  <textarea class="form-control" id="customer_service_message" name="customer_service_message" rows="3">Customer service</textarea>
                </div>
                <button class="btn btn-info mb-4" type="submit" name="send_message" onclick="return send_customer_service_message();">send</button>

            </form>';
            if ($login) {
              echo $customerser;
            }
            else {
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
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 2 seconds
}


          </script>



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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>
