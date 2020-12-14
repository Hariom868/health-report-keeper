<?php
define('server','localhost');// defining hostname
define('username','root'); // defining username
define('password' ,''); // defining Password
define('databasename', 'hrk');// defining database name
class Database_Connection
{
function __construct()
{
$connection = mysqli_connect(server,username,password,databasename);
$this->dbhost=$connection;
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
public function signup($name,$username,$useremail,$userpassword,$income,$member)
{
$adding=mysqli_query($this->dbhost,"insert into signupid(Name,Username,Email,Password,income,no of member) values('$name','$username','$useremail','$userpassword','$income','$member')");
return $adding;
}

// here is the function for signin which we will callout when we do login
public function signin($username,$userpassword)
{
$seeing=mysqli_query($this->dbhost,"select Name from signupid where Username='$username' and Password='$userpassword'");
return $seeing;
}
}
?>
