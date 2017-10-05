<html>
<head>
<style>
div {
    background-color: lightgreen;
    width: 30px;
    padding: 10px;
    border: 1px solid red;
}
</style>
</head>
<?php
$servername = "127.0.0.1";
$usernam = "root";
$password = "";
$db="Kapiltest1";
// Create connection
$conn = mysqli_connect($servername, $usernam, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email =      $_POST["email"];
$pwd   =      $_POST["password"];

?>
email          <?php       echo             $email        ?><br>
password       <?php       echo             $pwd        ?><br>

<?php
$sql = "INSERT INTO logininfos(EmailId, Password)
VALUES ('$email','$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<br><br><br>
<body><center>
<div><a href="qustions.html" target="_blank">start</a></div>
</center>
</body>
</html>
