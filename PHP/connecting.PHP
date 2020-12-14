<?php
define('server','localhost');// defining hostname
define('username','root'); // defining username
define('password' ,''); // defining Password
define('databasename', 'NHDD');// defining database name
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
// Here is the function for signup which we will callout when we do signup
public function insertionvalue($username,$name,$type,$useremail,$userpassword)
{
$adding=mysqli_query($this->dbhost,"insert into expenses(user,name,type,date,cost) values('$username','$name','$type','$useremail','$userpassword')");
return $adding;
}
public function viewing($username,$how)
{
$viewing = mysqli_query($this->dbhost,"select * from expenses where user='$username' and type='$how'");
return $viewing;
}
public function dateviewing($fdate,$tdate,$username)
{

$dateviewing = mysqli_query($this->dbhost,"SELECT *  From expenses  where (date BETWEEN '$fdate' and '$tdate') and (user='$username')");
return $dateviewing;
}
}
class Database_Connection1 extends Database_Connection
{
function __construct() {
        parent::__construct();
        
    }
public function signup($name,$username,$useremail,$userpassword)
{
$adding=mysqli_query($this->dbhost,"insert into signupid(Name,Username,Email,Password) values('$name','$username','$useremail','$userpassword')");
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