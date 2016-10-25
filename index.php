
<?php
include('connection.php'); // Includes Login Script
include('login.php');

if(isset($_SESSION['logged_in'])){
  header("location: profile.php");
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>

<?php
if(isset($_SESSION['emptyLoginMsg'])){
    var_dump($_SESSION['emptyLoginMsg']);
    echo "It's Set!";
}
?>


    <form action="login.php //Make LOGIN.php a LOGIN FUNCTION" method="post">
    <label>UserName :</label>
    <input id="username" name="username" placeholder="username" type="text">
    <label>Password :</label>
    <input id="password" name="password" placeholder="**********" type="password">
    <input name="submit" type="submit" value=" Login ">
    </form>
</div>
</div>
</body>
</html>
