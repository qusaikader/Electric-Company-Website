
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginelectriccss.css">
    
    
    
    
    <script>
    function doSomething(){
      alert('this one works too!'); 
      window.location.href = "http://localhost/myproject/putinsql.php";
    }
</script>

  </head>
<body>


<?php
 if (isset($_POST["submit2"]))
         {
           header("Location: http://localhost/myproject/signupelectric.php ");
         }
         ?>




    <!-- PHP FOR POST -->
    
    <?php
    $insert=FALSE;
      if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['uname'];
        $password1=$_POST['psw'];
        
        if(isset($_POST["submit"])){
          $_SESSION['uname']=_POST['uname'];
          $_SESSION['last_time']=time();
        }
      
       

$servername= "localhost";
$username= "root";
$password= ""; 
$database="electric";

// creating connection
$conn=mysqli_connect($servername,$username,$password,$database);

// $sql= "INSERT INTO `logintable` (`user_id`,`username`, `password`) VALUES ('23','$email', '$password')";
// $result=mysqli_query($conn,$sql);
// if ($result){
//     echo ' Record successfully added';
//     echo" <div class="alert alert-success alert-dismissible fade show" role='alert'>
//     Your username '.$email.' and password '.$password.' has been submitted successfully
//     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
//     <span aria-hidden='true'>&times;</span>
//      </button>
//   </div>";
// }
// else{
//   echo "Record not added due to this error ". mysqli_error($conn);
// }

//$sql="SELECT * FROM `logintable` WHERE  `logintable`.`username`=$email and `logintable`.`password`=$password";

$sql="SELECT COUNT(1) FROM `electric_login` WHERE `electric_login`.`password` = $password1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);

if ($row[0]>=1){
  echo " YOU HAVE ACCESS TO THE WEBSITE -> PLEASE CLICK THE HOME BUTTON TO GO TO THE MAIN PAGE";
  

  echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
    Your username '.$email.' and password '.$password1.' has been found successfully
       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
        </button>
     </div> ";

  



  $insert=TRUE;
  // <a href= "husain.html">
  //     <button>HOME</button>
  //   </a>
  //<button type="submit" class="home" >HOME</button>;

  //<li><a class="active" href="#home">Home</a></li>
  //Response.Redirect("signup.php");
// ---------------------------------------
  // COOKIE SYNTAX
  // setcookie("category","laptop",time()+86400,"/");
  // in husain.php page write this:
  // $cat=$_COOKIE['category'];
  // -----------------------------

//   SESSION SYNTAX
//   IN LOGIN PAGE TO STORE SESSION VARIABLE:
//   session_start();
//   $_SESSION['favcat']='laptop';
//   echo 'saved session';

//   IN husain.html to get the values of session
// put on top of html
//   session_start();
// if isset($_SESSION['username']){

  //   echo 'Welcome '.$_SESSION['username'];
//   //  echo 'your fav cat is' . $_SESSION['favcat'];
// }else{
//   echo 'please log in'
// }
// TO DESTROY SESSION: 
// session_unset()
// session_destroy()


// ----------------------------------------------------
}
else{
  echo ' USERNAME OR PASSWORD NOT FOUND ';
}
      }
      ?>
    
   

         











      <!-- TILL HERE POST -->


      <!-- <form name="form1" action=""method="post">
<input type="submit" name= "submit2" value="Go to sign up page if you have no account">
      </form>  -->

      <!-- <button type="submit" class="button"  onclick="doSomething()" >HOME</button>; -->

<form action="/myproject/loginelectric.php" method="post">
    <!-- <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    
        <label for="psw" ><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            
        <button type="submit" class="login">Login</button>
         -->

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

<marquee width = "100%" direction = "right" height = "30px" scrollamount="10" >
    Welcome to Green Energy Electrical House
</marquee>
<form>
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    
        <label for="psw" ><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            
        <button type="submit" class="login">Login</button>
        <button type="button" class="cancelbtn">Cancel</button>

        <label>
          <input type="checkbox" checked="checked" name="remember" > Remember me
        </label>
        </form>
      </div>
    
      <!-- <div class="container" style="background-color:rgb(240, 235, 235)">
        <span class="psw">Forgot <a href="#">password?</a></span>
        <button type="submit" class="login">Login</button>
      </div>  -->




        <?php
if($insert){
  echo "hi this is just a test";
echo `<button type="submit" class="button"  onclick="doSomething()" >HOME</button>`;
sleep(2);
    header("Location: http://localhost/myproject/putinsql.php ");
  



//echo ' <button type="submit" class="button" href="http://localhost/myproject/putinsql.php" >HOME</button>';
//echo ` <a class="button" href="localhost/myproject/putinsql.php" target="_blank">New Discussion</a>`;
 // echo `<input type="button" name="Insert_Ad" value="Post and ad" onclick="location.href='http://localhost/myproject/putinsql.php'">`;
 // echo ` <button type="submit" class="button"  onclick="doSomething()" >HOME</button>`;
}
        ?>
        <!-- <label>
          <input type="checkbox" checked="checked" name="remember" > Remember me
        </label> -->
        </form>

      </div>
   
      

<!--       
    
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
     -->
    
</body>
</html>