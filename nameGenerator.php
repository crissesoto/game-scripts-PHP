<?php 

$firstName =[
  "Crisse",
  "Lisa",
  "Jennifer",
  "Sara",
  "Marie",
];

$lastName = [
  "Smith",
  "Jenner",
  "Molt",
  "Six",
  "Pollet",
];

//echo $firstName[array_rand($firstName)]." ";
//echo $lastName[array_rand($lastName)];
shuffle($firstName);
shuffle($lastName);
for($i=0; $i <= 4; $i++){
  echo $firstName[$i] ." ". $lastName[$i]."<br>"; 
}

$firstName = explode(',', file_get_contents('names.female.txt'));
$lastName = explode(',', file_get_contents('names.last.txt'));

print_r($firstName);
print_r($lastName);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Random name generator</title>
</head>
<body>
  <h1>Random name generator</h1>
</body>
</html>