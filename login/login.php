<?php


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
    <a href="signup.php">Click to signup</a><br><br>
</form>
</div>
    </body>
</html>