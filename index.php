
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Username:</label>
    <input type="text" name="username"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">

  </form>
</body>
</html>


<?php

if(isset($_POST["login"]))
  
  $username = $_POST ["username"];
  $password = $_POST["password"];

  if(empty($username)){
    echo"Username is missing...";
  }
  elseif(empty($password)){
    echo"Password is missing...";
  }
  else{
    echo"Hello {$username}";
  }

?>