
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="putinsql.css">
    
</head>
<body>

<?php
if(count($_POST)>0) {
	if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
		$_SESSION["user_id"] = 1001;
		$_SESSION["user_name"] = $_POST["user_name"];
		$_SESSION['loggedin_time'] = time();  
	} else {
		$message = "Invalid Username or Password!";
	}
}

if(isset($_SESSION["user_id"])) {
	if(!isLoginSessionExpired()) {
		header("Location:user_dashboard.php");
	} else {
		header("Location:logout.php?session_expired=1");
	}
}

function isLoginSessionExpired() {
	$login_session_duration = 10; 
	$current_time = time(); 
	if(isset($_SESSION['loggedin_time']) and isset($_SESSION["user_id"])){  
		if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}
session_start();
$url = "index.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header("Location: http://localhost/myproject/getfromsql.php ");
?>

<!-- 
// session_start();
// if(isset($_SESSION['uname'])){
//            if(isset($_SESSION['last_time'])>20){
//                 header("Location: http://localhost/myproject/homepage.php");
//            }
                              
//             else{
//               $_SESSION['last_time']=time();
//               echo `WELCOME`.$_SESSION['uname'];
//             }
// }
// else{
//   header("Location: http://localhost/myproject/homepage.php");
// }
 -->


<?php
    $insert=FALSE;
      if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email_1=$_POST['uname'];
        $password_1=$_POST['psw'];
        $ampaid_1=$_POST['ampaid'];
        $ampend_1=$_POST['ampend'];
        $addr_1=$_POST['addr'];
        $scheme_1=$_POST['scheme'];
      

$servername= "localhost";
$username= "root";
$password= ""; 
$database="electric";

// creating connection
$conn=mysqli_connect($servername,$username,$password,$database);

$sql= "INSERT INTO `electric_info` (`User_id`, `Amount_paid`, `Amount_pending`, `Address`, `Scheme`) VALUES ('', '$ampaid_1', '$ampend_1', '$addr_1', '$scheme_1')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo ' Record successfully added';
    echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
    Your username  and password '.$password.' has been submitted successfully Please enter your Unique ID to get information 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
  </div>';


  $insert=TRUE;
}
else{
  echo "Record not added due to this error ". mysqli_error($conn);
}
        }

     
  ?>

<?php
if (isset($_POST["submit1"]))
        {
          header("Location: http://localhost/myproject/getfromsql.php ");
        }

        ?>


<?php
if (isset($_POST["submit5"]))
        {
          header("Location: http://localhost/myproject/changeamount.php ");
        }

        ?>


<form name="form1" action="" method="post">
<input type="submit" name= "submit1" value="Click to move on to next page to get information">
      </form>

      <form name="form5" action="" method="post">
<input type="submit" name= "submit5" value="Click to change amount paid">
      </form>

<form action="/myproject/putinsql.php" method="post">



<body style="text-align:center"></body>


<form>
<div class="container">
        <label class = "uname" for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    
        <label class = "psw" for="psw" ><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label class = "ampaid" for="ampaid"><b>Amount_paid</b></label>
        <input type="text" placeholder="Enter Amount paid" name="ampaid" id="ampaid" required>
    
        <label class = "ampend" for="ampend" ><b>Amount_pending</b></label>
        <input type="text" placeholder="Enter Amount still pending" name="ampend" id="ampend" required>

        <label class = "addr" for="addr"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="addr" id="addr" required>
    
        <label class = "scheme "for="scheme" ><b>Scheme</b></label>
        <input type="text" placeholder="Enter your chosen Scheme" name="scheme" id="scheme" required>
            
        <!-- <button type="submit" class="login">Login</button> -->
        <button type="submit" class="login">Click to submit and get Unqiue ID</button> -->
        
        </form>
        </div>
<!-- <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
    
        <label for="psw" ><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="ampaid"><b>Amount_paid</b></label>
        <input type="text" placeholder="Enter Amount paid" name="ampaid" id="ampaid" required>
    
        <label for="ampend" ><b>Amount_pending</b></label>
        <input type="text" placeholder="Enter Amount still pending" name="ampend" id="ampend" required>

        <label for="addr"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="addr" id="addr" required>
    
        <label for="scheme" ><b>Scheme</b></label>
        <input type="text" placeholder="Enter your chosen Scheme" name="scheme" id="scheme" required>
            
        <button type="submit" class="login">Click to get Unqiue ID</button> -->
       
        <?php
if($insert)
{
  $sql1="SELECT `electric_info`.`User_id` FROM `electric_info` WHERE `electric_info`.`Amount_paid` = '$ampaid_1' AND  `electric_info`.`Amount_pending`='$ampend_1' ";
  $result1=mysqli_query($conn,$sql1);
  sleep(2);
  echo "YOUR UNIQUE USER ID IS:"."<br>";
  print_r($result1->fetch_all());
//  while($row = mysql_fetch_array($result1)) {
//      print_r ($row['User_id']); 
//  }

  
  
}
        ?>
        
        </form>
        </div>

     

</body>
</html>