/* 


This is just the example code for the project...

*/


<?php


$counter

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <form action="index.php" method="post">
      <label>username:</label><br>
      <input type="text" name="username"><br>
      <label>password:</label><br>
      <input type="password" name="password"><br>
      <input type="submit" value="Login">
  </form> -->


  <form action="index.php" method="post">
      <label>quantity:</label><br>
      <input type="text" name="quantity"><br>
      <input type="submit" value="total">
  </form>


</body>
</html>
<?php
  $item = "apple";
  $price = "5.99";
  $quantity = $_POST["quantity"];
  $total = null;

  $total = $quantity * $price;
echo"You have bought {$quantity} x {$item}(s) <br>";
echo"Your total is: \${$total}";



?>

<?php


$counter

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <form action="index.php" method="post">
      <label>username:</label><br>
      <input type="text" name="username"><br>
      <label>password:</label><br>
      <input type="password" name="password"><br>
      <input type="submit" value="Login">
  </form> -->


  <form action="index.php" method="post">
      <label>Radius:</label><br>
      <input type="text" name="Radius"><br>
      <input type="submit" value="total">
  </form>


</body>
</html>
<?php


?>