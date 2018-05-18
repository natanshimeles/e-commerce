<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    //header('Location:../login/index.php?login=loginagain');
    //exit();
    $login = false;
}
else {
  $login = true;
  $name_cart = $_SESSION['name'];
}

if (!isset($_GET['productid'])) {
  echo "<center><h1 style='postion:fixed;top:150;'>nothing to show</h1></center>";
  die();
}



 ?>
 <?php require "../../../includes/dbconn.php";
 $sql = "select * from products where product_id = ?";
 $result = $Connection->prepare($sql);
 $product_id = $_GET['productid'];
 $result->bind_param("s", $product_id);
 $result->execute();
 if($res = $result->get_result()){
   $row = $res->fetch_assoc();
   $product_name = $row['product_name'];
   $product_desc = $row['product_description'];
   //$product_type = $row['product_type'];
   $realprice =  $row['real_price'];
   $sellprice =  $row['sale_price'];

 } ?>
 <!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php echo "$product_desc";  ?></title>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row bg-light fixed-top">
        <div class="col-md-1">

        </div>
        <div class="col-md-2">
          <img class="img-fluid" src="../../../images/logo/log2.png" alt="logo">


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
          <a href="../../../buyers/cart.php"><i class="fa fa-shopping-cart" style="font-size:36px"></i></a>

        </div>
        <div class="col-md-1 pt-4">
        <?php
        //if($login)
           //echo  "<a href='#' onclick='return userhideshow();'><i class='fa fa-user' style='font-size:36px'></i></a>";
           ?>
        </div>
        <div class="col-md-1 mt-4">
          <?php

          if($login){
            echo "<a href='../../../buyers/index.php'><Button class='btn btn-info' >logout</Button></a>";
          }
          else {
            echo "<a href='../../../buyers/index.php'><button class='btn btn-info'>login</Button></a>";
          }

           ?>

        </div>

      </div>

    </div>
    <br><br><br><br><br><br><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">

        </div>

        <div class="col-md-4 mt-4">
          <img class="img-fluid" src="product_picture" alt="">


        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-4 mt-4">
          <div class="h4">
            <?php

            echo "<b>".$product_name.": </b>";
            echo $product_desc."<br>";


             ?>

             <div class="bg-dark text-primary" style="opacity:0.7;margin-top:40px;">
               <del style="margin-left:300px;padding-top:30px;padding-bottom:30px;">birr <?php echo "$realprice"; ?></del><br><br>
               <p style="margin-left:300px;padding-top:30px;padding-bottom:30px;">birr <?php echo $sellprice; ?></p>

             </div>


          </div>
          <br><br><br>
          <div class="row">
            <div class="col-md-5">

             <?php
             if ($login) {
               $name_cart = $_SESSION['name'];
               $id_cart = $_GET['productid'];
               $onclick= "return addedtocart();";
               echo "<script>
                    var product = '$id_cart';
                    var person = '$name_cart';
                    </script>";

  //onclick='$onclick'
               echo "<a  href='../../../buyers/addedtocart.php?product=$id_cart&person=$name_cart'
                class='btn btn-block btn-info' type='button'
                     name='button'><i class='fa fa-cart-arrow-down' style='font-size:36px'></i> Add to cart</a>";
             }
             else{
               echo '<a href="../../../buyers/index.php"  class="btn btn-block btn-info" >login first</a>';


             }
              ?>

            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
              <?php
              if($login)
              {

              $product_id_name = $_GET['productid'];
              $person_name = $_SESSION['name'];
              echo '<a href="../../../buyers/bought.php" class="btn btn-block btn-danger pt-4 pb-1"  type="button" name="button" ><b>pay</b></a>';

            }
            ?>


            </div>
            <div class="col-md-1">

            </div>

          </div>


        </div>

        <div class="col-md-2">

        </div>

      </div>


      <footer id="contact-us" class="fixed-bottom text-light bg-dark">
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
              $customerser='<form class=""  method="post" onclick="return send_customer_service_message();" id="customer_service">
                <div class="form-group">
                    <label for="message">Customer service:</label>
                    <textarea class="form-control"name="name" id="customer_service_message" name="customer_service_message" rows="3">Customer service</textarea>
                  </div>
                  <button class="btn btn-info mb-4" type="submit" name="send_message" onclick="return send_customer_service_message();">send</button>

              </form>';
              if ($login) {
                echo $customerser;
              }
              else {
                echo "<a href='../../../buyers/index.php'>create</a> an account to use customer service";
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
    <script type="text/javascript" >
    var placetoshow = document.getElementById('show_searched');


    function showHint(str) {
      if (str.length == 0) {
            placetoshow.innerHTML = "";

            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    placetoshow.innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../../../buyers/searchforkeywordspecific.php?key=" + str, true);
            xmlhttp.send();
        }





    }


    </script>

    <script type="text/javascript">

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });



    </script>
    <script type="text/javascript" src="../../../buyers/scripts/payandadd.js">


    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
