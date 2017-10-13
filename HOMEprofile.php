<html>
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
<body>
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
  $verifycount = 0;
  $email =      $_POST["emailid"];
  $pwd   =      $_POST["password"];
  echo "Connected successfully";
  $check="SELECT emailid FROM registrations WHERE emailid='$email'";
  $query = mysqli_query($conn,$check);
  echo mysqli_num_rows($query);
  if(mysqli_num_rows($query) != 0)     // checking
    {
        $verifycount = $verifycount + 1;
        echo "  \n email  exists in registrations table \n \n";
        echo "  \n email  is valid  \n \n";
        $checkp="SELECT password FROM registrations WHERE emailid='$email' and password='$pwd'";
        $query2 = mysqli_query($conn,$checkp);
        if(mysqli_num_rows($query2)!= 0)
          {
              $verifycount = $verifycount + 1;
              echo "  \n password  exists  \n \n";
              echo "  \n password is valid  \n \n";
          }
        /* <!--<a href="login.html">click </a> */
    }
  /* <!--<a href="login.html">click </a> */
}
?>
<?php
  if($verifycount == 2)
  {
     $email = $_POST["emailid"];
     echo $verifycount;
     echo '<html>';
     echo '<p>  HELLO';
     echo  '<table>';
     echo '<tr>';
     echo '</tr>';
     echo '</table>';
     echo '<div class="container-fluid">';
     echo  '<div class="row">';
     echo   '<div class="col-md-12" style="background-color:lavender; height:10%">';
     echo     '<p><center> WELCOME TO ONLINE TEST</center></p>';
     echo   '<p align="left">email ID is:</p>';
     echo     $email;
     echo '</div>';
     echo '</div>';
     echo '</div>';
     echo '</a>';
     echo '<div class="container-fluid">';
     echo '<div class="btn-group btn-group-justified">';
    echo '<a href="HOME.html" class="btn btn-primary">HOME</a>';
    echo '<a href="#" class="btn btn-primary">TUTORIAL</a>';
    echo '<a href="Registration.php" class="btn btn-primary">PROFILE</a>';
    echo '<a href="logout.php" class="btn btn-primary">LOGOUT</a>';
     echo '</div>';
echo '</div>';
echo '<div class="container">';
  echo '<div class="dropdown" style="position: absolute; left: 0;">';
    echo '<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials';
    echo '<span class="caret"></span></button>';
    echo '<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">';
      echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>';
      echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>';
      echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>';
      echo '<li role="presentation" class="divider"></li>';
      echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>';
    echo '</ul>';
  echo '</div>';
echo '</div>';



echo '<div class = "div1" align = "center">';
  echo  '<a href="htmltest1.html" class = "htmllink">';
  echo      '<img src="images/HTML1.jpg" class="htmllogo" alt="HTML tutorial" align="middle" style="width:250px;height:250px;">';
  echo  '</a>';
  echo   '<a href="csstut.html" class = "csslink">';
    echo     '<img src="images/css.png" class="csslogo" alt="css tutorial" align="middle" style="width:250px;height:250px;">';
  echo    '</a>';
echo '</div>';

echo '<div class = "div2" align = "center">';
echo    '<a href="javatut.html" class = "javalink">';
  echo   '<img src="images/java.png" class="javalogo" alt="java tutorial" align="middle" style="width:250px;height:250px;">';
echo '</a>';
echo '<a href="jquerytut.html" class = "jquerylink">';
    echo '<img src="images/jquery.png" class = "jquerylogo" alt="jquery tutorial" align="middle" style="width:250px;height:250px;">';
echo '</a>';
echo '</div>';




  }
?>
</body>
</html>
