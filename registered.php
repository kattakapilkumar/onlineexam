<html>
<body>
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
echo "Connected successfully";
$uname =      $_POST["username"];
$email =      $_POST["email"];
$pwd   =      $_POST["password"];
$phno  =      $_POST["phnumber"];
?>
username       <?php       echo             $uname       ?><br>
email          <?php       echo             $email        ?><br>
password       <?php       echo             $pwd        ?><br>
Phone number   <?php       echo             $phno       ?><br>
<?php
$sql = "INSERT INTO registrations(UserName, EmailId, Password,phNumber)
VALUES ('$uname','$email','$pwd','$phno')";

$check="SELECT EmailId FROM registrations WHERE EmailId='$email'";
$query = mysqli_query($conn,$check);
//if($query->num_rows !=0)
if(mysqli_num_rows($query)!= 0)
  {
      echo "email already exists";
  }

else if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
 else {
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
<p>you are  registrered  </p>
<form action="LoggedIn.php" method="POST">
<label>Email:      </label><input     type="text"         id="emailid"           name="email"  placeholder="last name" required></input><br><br>
<label>password:   </label><input     type="text"         id="pwd"               name="password"   placeholder="Your Username"></input><br><br>
<input type="submit" id="submit" value="login" >
</body>

</html>
