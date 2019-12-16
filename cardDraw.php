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


// Drawing two hands of five cards each
$hand = [1 => array(), 2 => array()];

for($i=0; $i <= 5; $i++){
  $hand[1][] = implode(" of ", array_shift($deck));
  $hand[2][] = implode(" of ", array_shift($deck));
}

//print_r($hand[1]);
//echo "<br>";
//print_r($hand[2]);


// Looking for a specific card = $draw
// card 1: $draw = array('face' => 'Ace', 'suit' => 'Clubs');
// card 2: 
$draw = array('face' => 'Ace', 'suit' => '');

// Calculating the odds of drawing specific card
function calculate_match($draw, $deck){
  // we can look in the deck to see how many cards are left
  $remaining = count($deck);
  $match = 0;

  foreach($deck as $card){
    if(
      ($draw["face"] == $card["face"] && $draw["suit"] == $card['suit']) 
      ||
      ($draw["face"] == "" && $draw["suit"] == $card["suit"])
      ||
      ($draw["face"] == $card["face"] && $draw["suit"] == "")
    ){
      $match++;
    };
  }
  return "found $match in $remaining";
}


//echo calculation_match($draw, $deck);

echo implode(" of ", $draw) . ' : ' . calculate_match($draw, $deck);

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