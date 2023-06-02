<?php
session_start(); 
include("connection.php");
include("functions.php");

$user_data = check_sum($con);

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Welcome to Vibrant management</h1>
        <br>
        Hello, Username
        <br>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>
