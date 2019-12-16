<?php 
// generate and shuffle a deck

$faces = array (
  "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
  "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);

$suits = array (
  "Spades", "Hearts", "Clubs", "Diamonds"
);

$deck = [];

foreach($faces as $face){
  foreach($suits as $suit){
    // $deck as an empty array
    $deck[] = ["face" => $face , "suit" =>$suit];
  }
}

$card = array_shift($deck);


//print_r($card["face"] ." of ".$card["suit"]);

// create a single hand of five card

$hand = array(1 => array());

shuffle($deck);

for($i =0; $i <= 4; $i++){
  $hand[1][] =  array_shift($deck);
}

//print_r($hand[1]);

// Using checkboxes to indicate cards you are replacing
foreach ($hand[1] as $index =>$card) {
  echo "<input type='checkbox' name='card[" . $index . "]'> 
" . $card['face'] . ' of ' . $card['suit'] . "<br />";
}

// evaluate the input array $_POST['card'] to see which cards have been checked for


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Poker dealer</title>
</head>
<body>
  <h1>Simple poker dealer</h1>
</body>
</html>