/* 


This is just the example code for the project...

Math refer to .gitignore to see contents on video... But most will be posted here throughout...

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


  <!-- <form action="index.php" method="post">
      <label>username:</label><br>
      <input type="text" name="username"><br>
      <label>password:</label><br>
      <input type="password" name="password"><br>
      <input type="submit" value="Login">
  </form> -->


  <!-- <form action="index.php" method="post">
      <label>radius:</label><br>
      <input type="text" name="radius"><br>
      <input type="submit" value="calculate">
  </form><br>


</body>
</html>
</body>
</html>
<!-- <?php
    $radius = $_POST["radius"];
    $circumference =null;


$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);
$area = null;
$volume = null;

$area = pi() * pow($radius, 2);
$area = round($area, 2);


$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);


echo"Circumference = {$circumference}cm <br>";
echo"Area = {$area}cm^2 <br>";
echo"Volume = {$volume} cm^3 <br>"

?> -->

//Else if 
statements...//

<?php
 $age = 101;

if($age >= 100){
  echo "You are too old to end this site.";
}
 elseif ($age >= 18){
   echo "You may enter this site.";
 }
  elseif($age == 0){
    echo "That wasn't a valid age.";
  }
    

  else{
    echo "You must be 18+ to enter.";
  }
?>


//Boolean Statements.//
Use variable instead of true or false.

<?php
  $adult = true;

 if($adult){
  echo "You may enter this site.";
 }
else{
  echo "You must be an adult to enter.";
  }
?>


///More if statements///
<?php
$hours = 50;
  $rate = 15;
  $weekly = null;

  if($hours <= 0){
    $weekly_pay = 0;
  }

  elseif($hours <= 40){
    $weekly_pay = $hours * $rate;
  }

  else{
    $weekly_pay = ($rate * 40) + (($hours - 40) *($rate *1.5));
  }

    echo "You made \${$weekly_pay} this week.";

    ?>


//Logical Operators//

&& = True if both conditions are true.
|| = True if at least one condition is true.
! = True if false. False if true.

Logical Operators are used to check conditions.


<?php
  
  $temp = 15;

  if($temp >=0 && $temp <= 30){
    echo "The weather is good.";
  }
  
    else{
      echo "The weather is bad.";
    }
?>


<?php
  $temp = 15;
  $cloudy = true;

  if($temp < 0 || $temp > 30){
    echo "The weather is bad.<br>";
  }
  
    else{
      echo "The weather is good.<br>";
    }

    if($cloudy){
      echo "It's cloudy.";
    }
    else{
      echo "It's sunny.";
    }
?>

// Not true check//

<?php
$temp = 15;
  $cloudy = false;

  if($temp < 0 || $temp > 30){
    echo "The weather is bad.<br>";
  }
  
    else{
      echo "The weather is good.<br>";
    }

    if(!$cloudy){
      echo "It's sunny.";
    }
    else{
      echo "It's cloudy.";
    }

    ?>
