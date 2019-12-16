<?php 

$suits = [
  "Spades", "Hearts", "Clubs", "Diamonds"
];

$faces = [
  "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
  "Nine", "Ten", "Jack", "Queen", "King", "Ace"
];

$deck = [];
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = ["face"=>$face, "suit"=>$suit];
    }
}

shuffle($deck);

$card = array_shift($deck);

echo $card['face'] . " " . $card['suit']


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Deck builder and shuffler</title>
</head>
<body>
  <h1>Deck builder and shuffler</h1>

  <ul>
  <li>
    <div class="details"><?php echo $card['suit'] ?>
      <p><?php echo $card['face'] ?></p>
      <p><?php echo $card['face'] ?></p>
      <img src="">
      <img src="">
    </div>
  </li>
  </ul>
</body>
</html>