<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    header('Location:../login/index.php?login=loginagain');
    exit();
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Adwa sellers ...</title>
  </head>
  <body >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="row">
            <div class="col-md-6">
              <a href="manager.php"><img class="img-fluid" src="../../images/logo/admin.png"></a>

            </div>
            <div class="col-md-6">


            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-6">
              <br><br>
              <br><br>
              <a class="btn btn-info pr-4" href="index.php">Post new products</a><br><br>
              <a class="btn btn-info " href="#">Post new Product Type</a><br><br>
              <a class="btn btn-info pr-4 pl-4" href="#">View Orders</a><br><br>
              <a class="btn btn-info  pr-4 pl-4" href="viewMessage.php">View Messages</a><br><br>
              <a class="btn btn-info pr-4 pl-4" href="#">View New comments</a><br><br>
              <a class="btn btn-info pr-4 pl-4" href="#">View stars</a><br><br>

            </div>
            <div class="col-md-5">

            </div>


          </div>


        </div>
        <div class="col-md-1" style=" border-right: 6px solid black; ">

        </div>

        <div class="col-md-9">
          <form  enctype="multipart/form-data" action="postproducts.php" method="POST" >
            <div class="form-group">
              <label for="name">Name of product</label>
              <input type="text" name="product_name" class="form-control" id="name" placeholder="Name of product"  maxlength="30">
            </div>
            <div class="form-group">
              <label for="type">Type of postproducts</label>
              <select  name="product_type" class="form-control" id="type">
                <option value="shoes">shoes</option>
                <option value="jeans">jeans</option>
                <option value="dress">dress</option>
                <option value="shirts">shirts</option>
                <option value="t-shirt">t-shirt</option>
                <option value="jacket">jacket</option>
                <option value="suit">suit</option>
              </select>

            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="product_description" class="form-control" id="description" placeholder="description of product" rows="6"  maxlength="100"></textarea>
            </div>
            <div class="form-group">
              <label for="picture">product picture(<span class="text-primary">*jpg,*png</span>)</label>
              <input name="product_picture" type="file"   accept=".jpg,.png" class="form-control-file" id="picture">
            </div>
            <div class="form-group">
              <label for="realprice">Real price</label>
              <input name="real_price" type="number" class="form-control" id="realprice">

            </div>
            <div class="form-group">
              <label for="description">selling price</label>
              <input name="sale_price" type="number"  class="form-control" id="realprice">
            </div>
            <button type="submit" class="btn btn-primary" name="post_new_product">Post</button>


          </form>

        </div>

      </div>

    </div>
    <footer id="contact-us" class="fixed-bottom text-light bg-dark p-4 mt-0">

          <!-- Copyright-->
          <div class="container ">
            <div class="row">
              <div class="col-md-12">
            <p class="text-center">© 2018 Copyright</p>

          </div>

          </div>

          <a href="#" class="go-top"><i class="fa fa-angle-up  fa-2x cyan-text" aria-hidden="true"></i></a>
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


    <!--
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <p class="h5 text-primary">welcome <?php echo $_SESSION['name']; ?></p>

        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>
      </div>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <form  enctype="multipart/form-data" action="postproducts.php" method="POST" >
            <div class="form-group">
              <label for="name">Name of product</label>
              <input type="text" name="product_name" class="form-control" id="name" placeholder="Name of product"  maxlength="30">
            </div>
            <div class="form-group">
              <label for="type">Type of postproducts</label>
              <select  name="product_type" class="form-control" id="type">
                <option value="food">food</option>
                <option value="electronics">electronics</option>
                <option value="cloth">cloth</option>
                <option value="furniture">furniture</option>
                <option value="body care">body care</option>
              </select>

            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="product_description" class="form-control" id="description" placeholder="description of product" rows="6"  maxlength="100"></textarea>
            </div>
            <div class="form-group">
              <label for="picture">product picture(<span class="text-primary">*jpg,*png</span>)</label>
              <input name="product_picture" type="file"   accept=".jpg,.png" class="form-control-file" id="picture">
            </div>
            <button type="submit" class="btn btn-primary" name="post_new_product">Post</button>


          </form>

        </div>
        <div class="col-md-4">

        </div>

      </div>

    </div>

-->


  </body>
</html>
