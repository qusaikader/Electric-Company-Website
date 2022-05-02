<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="getfromsql.css">    
</head>
<body>

<?php
    $insert=FALSE;
      if ($_SERVER['REQUEST_METHOD']=='POST'){
        //$email_1=$_POST['uname'];
        $password_2=$_POST['psw'];
        // $ampaid_1=$_POST['ampaid'];
        // $ampend_1=$_POST['ampend'];
        // $addr_1=$_POST['addr'];
        // $scheme_1=$_POST['scheme'];
      

$servername= "localhost";
$username= "root";
$password= ""; 
$database="electric";

// creating connection
$conn=mysqli_connect($servername,$username,$password,$database);


$sql="SELECT * FROM `electric_info` WHERE User_id=$password_2";

$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1){
//   echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
//   Your username and password '.$password_2.' has been found successfully.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
//   <span aria-hidden="true">&times;</span>
//    </button>
// </div>';
    //print_r($result->fetch_all());
    while ( $rows = $result->fetch_assoc() ) {
      echo `.`."<p style='font-size:150%'>";
        echo  '<strong>AMOUNT PAID :  </strong>'.$rows['Amount_paid']."<br>";
        echo  '<strong>PENDING AMOUNT :  </strong>'.$rows['Amount_pending']."<br>";
        echo  '<strong>ADDRESS :  </strong>'.$rows['Address']."<br>";
        echo  '<strong>SCHEME :  </strong>'.$rows['Scheme'];
    }
   
}
else{
    echo "Record not found. You have entered wrong User Id ";
  }
        }
  ?>
    
    <form action="/myproject/getfromsql.php" method="post">
<!-- <div class="container">
     
        <label for="psw" ><b>Enter you'r User_id to get your details</b></label>
        <input type="password" placeholder="Enter User_id" name="psw" id="psw" required>
        <button type="submit" class="login">Login</button> -->


        <form>
        <div class="imgcontainer">
            <img src="logo.jpg" class = "center">
        </div>
<div class="container">

        <label for="psw" ><b>Enter you'r User_id to get your details</b></label>
        <input type="password" placeholder="Enter User_id" name="psw" id="psw" required>
        <button type="submit" class="login">Login</button>
        </div>
    </form>
        <?php
        if($insert){
          echo "this is just a test";
          echo"$result";
            }

        ?>
        </form>
      <!-- </div> -->


</body>
</html>