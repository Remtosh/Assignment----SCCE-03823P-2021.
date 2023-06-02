<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "post")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $user_id = random_num(20);
             $query = "insert into users (user_name, password) values ($user_name, $password)";
             mysqli_query($query);

             header('location: login.php');
             die;
    }
    else
    {
        echo "please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
    </head>
    <body>
<style type="text/css">
    #trait_exists
    {
        height:25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
    }
    #button
    {
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }
    #box
    {
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>
<div id="box">
<form method="post">
    <div style="font-size: 20px;margin: 10ppx;color:Black;">Login</div><br>
    <input id="text" type="text" name="user_name"><br><br>
    <input id="text" type="password" name="password"><br><br>
    <input id="button" type="submit" value="Login"><br><br>
    <a href="login.php">Click to Login</a><br><br>
</form>
</div>
    </body>
</html>