<html>
<head>
<script>

</script>
</head>
<body>
<center>
<br><br><br>
<form name="Form" action="/registrered.php"  onsubmit="return validateForm();" method="POST" >
<fieldset style="width:270px">
<legend>Registration:</legend>
<p id="demo" style="color:red">enter your details</p>
<label>Username:</label><input type="text"     id="uname"         name="username"     placeholder="enter UN" required></input><br><br>
<label>Email:</label><input   type="text"       id="emailid"       name="email"        placeholder="Your email"></input><br><br>
<label>Password:</label><input type="password" id="pwd"           name="password"     placeholder="password" required></input><br><br>
<label>Number: </label><input  type="text"      id="number"        name="phnumber"     maxlength="10" placeholder="mobile number" required><br><br>
<input type="submit" id="submit" value="submit">
</body>
</html>