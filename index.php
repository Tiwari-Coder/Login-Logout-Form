<?php
include ("connection.php");

?>              

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Logoyt Form</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
    
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
         <lavel>Username</lavel>
            <input type="text" name="user" placeholder="enter username"><br><br>
            <lavel>Password</lavel>
            <input type="text" name="pass" placeholder="enter password"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
    </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" && pass.length==""){
                alert("username and password is empty !!!");
                  return false
            }
            else{
                if(user.length==""){
                alert("username is empty !!!");
                  return false
                }
                if(pass.length==""){
                alert("password is empty !!!");
                  return false
                }
            }
        }
    </script>
    
</body>
</html>