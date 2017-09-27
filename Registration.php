<html>
<head>
<style>
body
{
        background-image: url("images/11.jpg");
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script>
function validateForm()
{
   //var stremailID = document.forms[""][""].value;
   var stremailID = document.getElementById("emailid").value;
   //var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
   console.log(stremailID);
   //var emailatpos = stremailID.indexOf("@");
  // var emailDotpos = stremailID.indexOf(".");
    if(stremailID.indexOf('@') == -1)
      {
          alert("invalid email address");
          return false;
      }
  // if (regex.test(stremailID))
//   {
    //   alert("valid e-mail address");
  //      return true;
  // }
   return true;
 }
</script>
</head>
<body>
<center>
<br><br><br>
<form name="Form" action="/registrered.php"  onsubmit="return validateForm();" method="POST">
<fieldset style="width:270px">
<legend>Registration:</legend>
<p id="demo" style="color:red">Enter Your Details</p>
<label>Username:</label><input type="text"      id="uname"         name="username"     placeholder="enter UN" required></input><br><br>
<label>Email:</label><input   type="text"       id="emailid"       name="email"        placeholder="Your email"></input><br><br>
<label>Password:</label><input type="password"  id="pwd"           name="password"     placeholder="password" required></input><br><br>
<label>Number: </label><input  type="text"      id="number"        name="phnumber"     maxlength="10" placeholder="mobile number" required><br><br>
<input type="submit" id="submit" value="submit">
</form>
</body>
</html>
