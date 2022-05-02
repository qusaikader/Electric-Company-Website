<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="signupelectric.css">
</head>
<body>

<?php
if (isset($_POST["submit4"]))
        {
          header("Location: http://localhost/myproject/loginelectric.php ");
        }

        ?>



     <!-- PHP FOR POST -->
     <?php
      if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['uname'];
        $password1=$_POST['psw'];
      

$servername= "localhost";
$username= "root";
$password= ""; 
$database="electric";

// creating connection
$conn=mysqli_connect($servername,$username,$password,$database);

//$sql= "INSERT INTO `electric_login` (`user_id`,`username`, `password`) VALUES ('1',$email', '$password1')";
$sql="INSERT INTO `electric_login` (`user_id`, `username`, `password`) VALUES ('', '$email', 'password1')";

$result=mysqli_query($conn,$sql);
if ($result){
    echo ' Record successfully added';
    echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
    Your username '.$email.' and password  has been submitted successfully Please open the login page and enter your credentials to gain access
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
  </div>';
}
else{
  echo "Record not added due to this error ". mysqli_error($conn);
}
      }
?>






      <form name="form4" action="" method="post">
         <input type="submit" name= "submit4" value="Click to move on to Login Page">
      </form> 

      <form action="/myproject/newsignupelectric.php" method="post">
    <!-- <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
    
        <label for="psw" ><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="pswrepeat" ><b> Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswrepeat" required>

            
        <button type="submit" class="login">Login</button>

       








      </div> -->


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



  <div class="imgcontainer">
      <img src="logo.jpg" class = "center">
  </div>

  <marquee width = "100%" direction = "right" height = "30px" scrollamount="10" ">
    Welcome to Green Energy Electrical House
</marquee>
<form>
    <div class="container">
        <label for="uname"><b>New Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    
        <label for="psw" ><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>



            
        <button type="submit" class="login">Sign Up</button>
        <button type="button" class="cancelbtn">Cancel</button>


        </form>
      </div>
    
     
</body>
</html>