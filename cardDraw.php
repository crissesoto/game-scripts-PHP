<?php 

// build the deck

$faces = array (
  "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
  "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);

$suits = array (
  "Spades", "Hearts", "Clubs", "Diamonds"
);

shuffle($faces);
shuffle($suits);

$deck = [];
foreach($faces as $face){
  foreach($suits as $suit){
    $deck[] = array("face" => $face, "suit" => $suit);
  }
};

shuffle($deck);
$card = array_shift($deck);

//echo $card["face"] ." of ". $card["suit"];

$hand = [1 => array(), 2 => array()];

for($i=0; $i <= 5; $i++){
  $hand[1][] = implode(" of ", array_shift($deck));
  $hand[2][] = implode(" of ", array_shift($deck));
}

print_r($hand[1]);
echo "<br>";
print_r($hand[2]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Odds calculator: Card draw</title>
</head>
<body>
<h1>Odds calculator: Card draw</h1></body>
</html>