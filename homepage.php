<!DOCTYPE html>
<html>
<head>
<title>DOCUMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homepage.css">

</head>
<body>






<?php
 if (isset($_POST["submit7"]))
         {
           header("Location: http://localhost/myproject/newsignupelectric.php ");
         }
         ?>



<?php
 if (isset($_POST["submit8"]))
         {
           header("Location: http://localhost/myproject/getfromsql.php ");
         }
         ?>


<?php
 if (isset($_POST["submit61"]))
         {
           header("Location: http://localhost/myproject/loginelectric.php ");
         }
         ?>

    <div class="navbar">
        <a href="homepage.php">Home</a>
        <div class="dropdown">
          <button class="dropbtn">Contact Us
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">greenenergy@gmail.com</a>
            <a href="#">022-12456215</a>
          </div>
        </div> 
      </div>


<div class="text-white">
  <div class="xlarge">
    <div class="imgcontainer">
        <img src="logo.jpg" class = "center">
    </div>
  </div>

<form>
  <div class="container">
    <h1 class="animate">GREEN ENERGY ELECTRICAL SOLUTIONS</h1>
    <hr class="border-grey" style="margin:auto;width:40%">
    <p class="center">Welcome</p>

    <form name="form4" action="" method="post">
          <input type="submit" name= "submit61" value="Login "> 
         </form> 

      <form name="form4" action="" method="post">
         <input type="submit" name= "submit7" value="Sign Up ">
      </form> 


      <form name="form4" action="" method="post">
         <input type="submit" name= "submit8" value="Get Info ">
      </form> 

    <!-- <button type="button" class="login">Login</button>
    <button type="button" class="cancelbtn">Sign Up</button>
    <button type="button" class="cancelbtn">Get Info</button> -->
  </div>
</form>
</div>

</body>
</html>