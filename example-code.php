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

//PHP Switches//


<?php
  $grade = "Floor";

  switch($grade){
    case "A": 
      echo "You did great.";
      break;
      case "B": 
        echo "You did good.";
        break;
        case "C": 
          echo "You did okay.";
          break;
          case "D": 
            echo "You did poorly.";
            break;
            case "F": 
              echo "You did failed.";
              break;
            default:
              echo "{$grade} is not valid.";
  }
?>

<?php

  $date = date("l");
    
    switch($date){
      case "Monday":
        echo "Today is Monday.";
        break;
      case "Tuesday":
        echo "Today is Tuesday.";
        break;
      case "Wednesday":
        echo "Today is Wednesday.";
        break;
      case "Thursday":
        echo "Today is Thursday.";
        break;
      case "Friday":
        echo "Today is Friday.";
        break;
      case "Saturday":
        echo "Today is Saturday.";
        break;
      case "Sunday":
        echo "Today is Sunday.";
        break;

    }

?>

//For loops//

<?php

  for($i = 0; $i < 5;$i++){
    echo"Hello. <br>";
  }

?>

<?php

  for($i = 0; $i < 5;$i++){
    echo $i . "<br>";
  }

?>

//***Counts by two's can count by other numbers as well***//

<?php

  for($i = 0; $i < 100;$i+=2){
    echo $i . "<br>";
  }

?>

//Number Counter Ascending//

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
      <label> Enter a number to count to:</label>
      <input type="text" name="counter">
      <input type="submit" value="start">

    </form>
</body>
</html>
<?php

$counter = $_POST["counter"];

for($i =1;$i <= $counter; $i++){
  echo $i . "<br>";
}

?>

//Number Counter Descending//


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
      <label> Enter a number to count down from:</label>
      <input type="text" name="counter">
      <input type="submit" value="start">

    </form>
</body>
</html>
<?php

$counter = $_POST["counter"];

for($i =$counter;$i > 0; $i--){
  echo $i . "<br>";
}

?>

//While loops - examples//

<?php

$counter = 0;

while($counter < 10){
  $counter++;
  echo $counter . "<br>";
}

?>

<?php
  $seconds = 0;
  $running = true;

  while($running){

    //wait 1 second - sleep function (don't run this code it has no way of stopping and it may crash the PC.)

  //   $seconds++;
  //   echo $seconds . "<br>";
  // }

?>

//Created a stop button//

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
    <input type="submit" name="stop" value="stop">
  </form>
</body>
</html>
<?php
  $seconds = 0;
  $running = true;

  while($running){

    //wait 1 second - sleep function (don't run this code it has no way of stopping and it may crash the PC.)

    $seconds++;
    echo $seconds . "<br>";
  }



?>



// Runs until stop button is clicked.//

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
    <input type="submit" name="stop" value="stop">
  </form>
</body>
</html>
<?php
  $seconds = 0;
  $running = true;

  while($running){

    //is set function//

    if(isset($_POST["stop"])){
      $running = false;
    }

    else{

    //wait 1 second - sleep function (don't run this code it has no way of stopping and it may crash the PC.)

    $seconds++;
    echo $seconds . "<br>";
  }

}



?>
//Array(s) first example is long hand; second is short hand. ***use foreach loop*** also examples of array push, pop, shift and reversed, count.//
<?php
 
$foods = array("apple", "orange", "banana", "coconut");

  echo $foods[0] . "<br>";
  echo $foods[1] . "<br>";
  echo $foods[2] . "<br>";
  echo $foods[3] . "<br>";

?>

<?php
 
$foods = array("apple", "orange", "banana", "coconut");

foreach($foods as $food){
  echo $food . "<br>";
}

?>

<?php
 
$foods = array("apple", "orange", "banana", "coconut");

//$foods[0] = "pineapple";
//array_push($foods, "pineapple", "kiwi");
//array_pop($foods);
//array_shift($foods);
//$foods = array_reverse($foods);
//echo count($foods); - remove the foreachloop example below to run the count array.

foreach($foods as $food){
  echo $food . "<br>";
}

?>

