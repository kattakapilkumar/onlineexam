<html lang="en">
<head>
  <!-- <tittle> HOME PAGE </title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <!--   CSSSSSSS -->
</head>
<?php
$servername = "127.0.0.1";
$usernam = "root";
$password = "";
$db="Kapiltest1";
// Create connection
$conn = mysqli_connect($servername, $usernam, $password,$db);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
  $email =      $_POST["email"];
  $pwd   =      $_POST["password"];
  echo "Connected successfully";
  $check="SELECT emailid FROM registrations WHERE emailid='$email'";
  if (strcasecmp($email, $check) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';
  }

}

?>
<body>
  <?php
  $email = $_POST["email"];
  //console.log("$email");
  ?>
<table>
    <tr>
    </tr>
</table>
<div class="container-fluid">
<div class="row">
  <div class="col-md-12" style="background-color:lavender; height:10%">
      <p><center> WELCOME TO ONLINE TEST</center></p>
      <p align="left">email ID is:</p>
       <?php echo $email  ?>   <br>
  </div>
</div>
</div>
<!--<div class="row">
  <div class="col-md-3" style="background-color:lavenderblush;">
    <center><button type="button" class="btn btn-default btn-block" style="background-color:lavenderblush; border:none; border-right: 1px solid #ccc;">HOME</button></center>
  </div>
  <div class="col-md-3" style="background-color:lavenderblush;">
    <center><button type="button" class="btn btn-default btn-block" style="background-color:lavenderblush; border:none; border-right: 1px solid #ccc;">PROFILE</button></center>
  </div>
  <div class="col-md-3" style="background-color:lavenderblush;">
      <center><button type="button" class="btn btn-default btn-block" style="background-color:lavenderblush; border:none; border-right: 1px solid #ccc; padding-right:100px;">REGISTER</button></center>
  </div>
  <div class="col-md-3" style="background-color:lavenderblush;">
      <center><button type="button" class="btn btn-default btn-block" style="background-color:lavenderblush; border:none; border-right: 1px solid #ccc; padding-right:100px;">LOGIN</button></center>
  </div>
</div>
</div>
-->
<div class="container-fluid">
<div class="btn-group btn-group-justified">
    <a href="HOME.html" class="btn btn-primary">HOME</a>
    <a href="#" class="btn btn-primary">TUTORIAL</a>
    <a href="Registration.php" class="btn btn-primary">PROFILE</a>
    <a href="Login.html" class="btn btn-primary">LOGOUT</a>
</div>
</div>
<div class="container">
  <div class="dropdown" style="position: absolute; left: 0;">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
</div>
<div class = "div1" align = "center">
<a href="htmltut.html" class = "htmllink">
    <img src="images/HTML1.jpg" class="htmllogo" alt="HTML tutorial" align="middle" style="width:250px;height:250px;">
</a>
<a href="csstut.html" class = "csslink">
    <img src="images/css.png" class="csslogo" alt="css tutorial" align="middle" style="width:250px;height:250px;">
</a>
</div>
<!--</div>
<div>-->
<div class = "div2" align = "center">
<a href="javatut.html" class = "javalink">
    <img src="images/java.png" class="javalogo" alt="java tutorial" align="middle" style="width:250px;height:250px;">
</a>
<a href="jquerytut.html" class = "jquerylink">
    <img src="images/jquery.png" class = "jquerylogo" alt="jquery tutorial" align="middle" style="width:250px;height:250px;">
</a>
</div>
<!--</div>
<div>-->
<!--<div class = "jquerylogo">
</div>-->
</body>
</html>
