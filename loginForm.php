<?php
session_start();
//require("dbconnect.php");

//set the login mark to empty
$_SESSION['uID'] = 0;
?>
<h1>Login Form</h1><hr />
<form method="post" action="loginControl.php">
<input type="hidden" name="act" value="login">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>