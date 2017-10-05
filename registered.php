<html>
<head>
</head>
<?php
$servername = "127.0.0.1";
$usernam = "root";
$password = "";
$db="kapiltest1";
// Create connection
$conn = mysqli_connect($servername, $usernam, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "Connected successfully";
}
$email =      $_POST["emailid"];
$uname =      $_POST["username"];
$pwd   =      $_POST["password"];
$phno  =      $_POST["phnumber"];
?>
email          <?php       echo             $email        ?><br>
username       <?php       echo             $uname       ?><br>
password       <?php       echo             $pwd        ?><br>
Phone number   <?php       echo             $phno       ?><br>
<?php
$count =0;
//
$sql = "INSERT INTO registrations(emailid,username,password,phnumber)
VALUES ('$email','$uname','$pwd','$phno')";
//
//
$check="SELECT emailid FROM registrations WHERE emailid='$email'";
//
//echo $check;
//
$query = mysqli_query($conn,$check);
//
//if($query->num_rows !=0)
//echo mysqli_num_rows($query);
if(mysqli_num_rows($query)!= 0)
  {
      echo "  \n email already exists  \n \n";
      echo "  \n email already exists  \n \n";
  }
/* <!--<a href="login.html">click </a> */
else if($conn->query($sql) === TRUE)
{
    $count = 15;
    echo "New record created successfully";
    echo "registered successfully";

}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*$query = mysql_query("SELECT emailid FROM registers WHERE emailid='$email'");

  if (mysql_num_rows($query) != 0)
  {
      echo "email already exists";
  }
	else
  {

  }
*/
?>
<body>
<center><a href="login.html">click here to login</a></center>
</body>
</html>
