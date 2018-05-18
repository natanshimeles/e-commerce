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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Adwa sellers ...</title>
  </head>
  <body >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="row">
            <div class="col-md-6">
              <img class="img-responsive" src="../../images/logo/admin.png">

            </div>
            <div class="col-md-6">


            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-6">
              <br><br>
              <br><br>
              <a class="btn btn-outline-info btn-lg text-center" href="index.php">Post new products</a><br><br>
              <a class="btn btn-outline-info btn-lg  text-center" href="#">Post new Product Type</a><br><br>
              <a class="btn btn-outline-info btn-lg  text-center" href="#">View Orders</a><br><br>
              <a class="btn btn-outline-info btn-lg  text-center" href="#">Reply Messages</a><br><br>
              <a class="btn btn-outline-info btn-lg  text-center" href="#">View New comments</a><br><br>
              <a class="btn btn-outline-info btn-lg  text-center" href="#">View stars</a><br><br>

            </div>
            <div class="col-md-5">

            </div>


          </div>


        </div>
        <div class="col-md-1" style=" border-right: 6px solid black; ">

        </div>
        <div class="col-md-9">

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






  </body>
</html>
