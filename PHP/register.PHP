<?php
// basically it will include pdo file for data connection to the sql server
include_once('connecting.php');
// 
$signupdata=new Database_Connection1();
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['psw']))
{
// Posted Values
$Name=$_POST['name'];
$Username=$_POST['username'];
$Useremail=$_POST['email'];
$Userpassword=md5($_POST['psw']);
//Function Calling
$sql=$signupdata->signup($Name,$Username,$Useremail,$Userpassword);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='login.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='sign_up.php'</script>";
}
}
?>
<!doctype html>
<html>

<head>
    <title>Health Report | SIGN UP</title>
    <link rel="stylesheet" href="../CSS/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
</head>
<body>
    <header>
        <div style = "position:relative; left:20px; top:20px;" class="begin">
            <strong class="logo_name">NHDD</strong>
            <ul style="list-style: none;" class="ho">
               
                <li><a href="#" style="text-decoration: none; color:whitesmoke;"><Dashboard/a></li>
                <li><a href="about_us.PHP" style="text-decoration: none; color:whitesmoke;">About Us</a></li>
                <li><a href="login.PHP" style="text-decoration: none; color:whitesmoke;">login</a></li>

            </ul>
        </div><br>
        <br>
    </header>
<div style = "position:relative; left:200px; top:100px;" class="first">
            <br>
</div>
<div style = "position:relative; left:680px; top:-493px;"class ="second">
    <br><br>
<h2 style="color:white;" align= "center">SIGN UP</h2>
<div style = "position:relative; left:80px;;"" class="contain"> <form method="POST">
    <p style="color:white;">Please fill in this form to create an account.</p>
    <hr>
    <div class="in">
        <i class="fa fa-user icon"></i>
        <input class="field" type="text" placeholder="Name" name="name"required>
      </div>
    <div class="in">
    <i class="fa fa-user icon"></i> 
    <input class="field" type="text" placeholder="Enter Username" name="username" required>
</div>
    <div class="in">
    <i class="fa fa-envelope icon"></i> 
    <input class="field" type="text" placeholder="Enter email" name="email" required>
</div>
<div class="in"> 
    <i class="fa fa-key icon"></i>
    <input class="field" type="password" placeholder="Enter Password" name="psw" required>
    </div>
    <br>
<div class="in"> 
    <i class="fa fa-key icon"></i>
    <input class="field" type="text" placeholder="Enter no of family member" name="member" required>
    </div>
    <br>
<div class="in"> 
    <i class="fa fa-key icon"></i>
    <input class="field" type="text" placeholder="Enter total income" name="income" required>
    </div>
    <br>
    
  
      <p style="color:white;">By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>
  
      
        <button type="submit" class="signup" id="submit"  name="submit">Sign Up</button>
      
    </form></div>

</div>
</body>
</html>