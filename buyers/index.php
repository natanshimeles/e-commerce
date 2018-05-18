<?php
session_start();
session_destroy();
if(isset($_GET['signup'])){
  $message = $_GET['signup'];

  echo "<script type='text/javascript'>alert('$message');</script>";
}
 ?>






  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>welcome to adwa...</title>

    </head>
    <body class="bg-secondary">

      <div class="container-fluid">

        <div class="row bg-light fixed-top pt-4">
          <form method="post" action="login/login.php">
          <div class="col-md-1 pt-4">

          </div>
          <div class="col-md-2 pt-4">
            <img class="img-responsive" src="../images/logo/log2.png" alt="logo">


          </div>


          <div class="col-md-4 pt-4 ">
            <input type="text" name="username" class="form-control" placeholder="username">








          </div>

          <div class="col-md-2 pt-4">
            <input type="password" name="password" class="form-control" placeholder="password" maxlength="20">

          </div>
          <div class="col-md-2 pt-4">
            <button type="submit" name="login" class="btn btn-primary">login</button>

          </div>


        </form>
        </div>
     <br><br><br><br><br><br><br><br><br><br><br><br>


        <div class="row i-am-centered">


            <div class="col-md-6 bg-muted mt-4 pb-4">
              <form action="signup/signup.php" method="post">
                <div class="form-group">
                  <label for="firstname">First name</label>
                  <input type="text" class="form-control" name="new_firstname" id="firstname" aria-describedby="emailHelp" placeholder="Enter first name">
                </div>
                <div class="form-group">
                  <label for="lastname">Last name</label>
                  <input type="text" class="form-control" name="new_lastname" id="lastname" aria-describedby="emailHelp" placeholder="Enter last name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="new_email" id="email" aria-describedby="emailHelp" placeholder="Enter email">

                </div>
                <div class="form-group">
                  <label for="username">username</label>
                  <input type="email" class="form-control" name="new_username" id="username" aria-describedby="emailHelp" placeholder="Enter user new_username">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" placeholder="Password" maxlength="20">
                </div>

                <button type="submit" class="btn btn-primary">signup</button>
              </form>

            </div>

          </div>


          <div class="col-md-5">

          </div>




      </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
  </html>


 <!--
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../style/loginstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title></title>
   </head>
   <body style="background-color:grey;">

     <form class="loginform" action="login/login.php" method="post">
       <span>HOME</span>
       <div class="loginformelement">

         <label>User Name</label>

         <input type="text" name="username" value="">
         <label>Password</label>
         <input type="password" name="password" value="">
         <input type="submit"class="login" name="login" value="login">



       </div>


     </form>
     <br><br><br><br>

     <form class="signupform" action="signup/signup.php" method="post">
       <div class="signupelement">
         <label class="label">First name</label>

         <input type="text"  class="input" name="new_firstname" value="">

       </div>


       <div class="signupelement">
       <label class="label">Last name</label>

         <input type="text" class="input"  name="new_lastname" value="">

       </div>

       <div class="signupelement">
         <label class="label">Email</label>

         <input type="text" class="input"  name="new_email" value="">


       </div>

       <div class="signupelement">
         <label class="label">User name</label>

         <input type="text" class="input" name="new_username" value="">


       </div>

       <div class="signupelement">
         <label class="label">Password</label>
         <input type="password" class="input"  name="new_password" value="">


       </div>




       <center><input type="submit" class=" signin" name="signup" value="Signin"></center>

     </form>


   </body>
 </html>



<!--
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/loginstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body style="background-color:grey;">

    <form class="loginform" action="login/login.php" method="post">
      <span>HOME</span>
      <div class="loginformelement">

        <label>User Name</label>

        <input type="text" name="username" value="">
        <label>Password</label>
        <input type="password" name="password" value="">
        <input type="submit"class="login" name="login" value="login">



      </div>


    </form>
    <br><br><br><br>

    <form class="signupform" action="signup/signup.php" method="post">
      <div class="signupelement">
        <label class="label">First name</label>

        <input type="text"  class="input" name="new_firstname" value="">

      </div>


      <div class="signupelement">
      <label class="label">Last name</label>

        <input type="text" class="input"  name="new_lastname" value="">

      </div>

      <div class="signupelement">
        <label class="label">Email</label>

        <input type="text" class="input"  name="new_email" value="">


      </div>

      <div class="signupelement">
        <label class="label">User name</label>

        <input type="text" class="input" name="new_username" value="">


      </div>

      <div class="signupelement">
        <label class="label">Password</label>
        <input type="password" class="input"  name="new_password" value="">


      </div>




      <center><input type="submit" class=" signin" name="signup" value="Signin"></center>

    </form>


  </body>
</html>
