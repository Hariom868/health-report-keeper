<?php
session_start();
// basically it will include pdo file for data connection to the sql server
include_once('connecting.php');
// 
$logindata=new Database_Connection1();
if(isset($_POST['username']) && isset($_POST['pass']))
{
// After clicking on login button Values

$Username=$_POST['username'];
$Userpassword=md5($_POST['pass']);
//Function Calling for login checking variable
$sql=$logindata->signin($Username,$Userpassword);
$numbers=mysqli_fetch_array($sql);
if($numbers>0)
{

  $_SESSION['name']=$numbers['Name'];
// Message for successfull insertion
echo "<script>alert('login successfull.');</script>";
echo "<script>window.location.href='homepage.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Invalid Credential. Please try again');</script>";
echo "<script>window.location.href='login.php'</script>";
}
}
?>
<!doctype html>
<html>

<head>
    <title>NHDD | LOG-IN</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
</head>
<body>
    <header>
        <div style = "position:relative; left:20px; top:20px;" class="begin">
            <strong class="logo_name">Health Report</strong>
            <ul style="list-style: none;" class="ho">
                
                <li><a href="#" style="text-decoration: none; color:whitesmoke;"><Dashboard/a></li>
                <li><a href="about_us.PHP" style="text-decoration: none; color:whitesmoke;">About Us</a></li>
                <li><a href="sign_up.PHP" style="text-decoration: none; color:whitesmoke;">Sign Up</a></li>

            </ul>
        </div><br>
        <br>
    </header>
<div style = "position:relative; left:200px; top:100px;" class="first">
            <br>
</div>
<div style = "position:relative; left:680px; top:-394px;"class ="second">
    <br><br>
<h2 style="color:whitesmoke"; align= "center">Login</h2>
<div style = "position:relative; left:80px;;"" class="contain"> <form method="POST">
   
    <hr>
    
    <div class="in">
    <i class="fa fa-user icon"></i> 
    <input class="field" type="text" placeholder="Enter Username" name="username" required>
</div>
<div class="in">
   
    
    <i class="fa fa-key icon"></i>
    <input class="field" type="password" placeholder="Enter Password" name="pass" required>
    </div>
    <br>
    
  
      
        <button type="submit" class="signup" name="submit">login</button>
        <
      
    </form></div>

</div>
</body>
</html>