<?php 

function roll () {
  return mt_rand(1,6);
}

function roll2 ($sides) {
  return mt_rand(1,$sides);
  
}

echo roll2(6)."<br>";   // roll a six-sided die
echo roll2(10)."<br>";  // roll a ten-sided die
echo roll2(20)."<br>";  // roll a twenty-sided die
//echo roll2();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>A basic die roller</title>
</head>
<body>
  <h1>A basic die roller</h1>
</body>
</html>