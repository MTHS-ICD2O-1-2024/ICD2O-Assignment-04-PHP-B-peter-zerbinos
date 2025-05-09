<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Movie Booking Receipt" />
  <meta name="keywords" content="movies, tickets, popcorn" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-red.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Movie Booking Receipt</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Your Movie Booking Summary</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/popcorn.webp" alt="Popcorn">
      </div>
      <br />
      <?php
      $TAX_RATE = 1.13;
      $ticketPrices = ["standard" => 12, "vip" => 18, "imax" => 22];
      $popcornPrices = ["small" => 5, "medium" => 7, "large" => 9];
      $drinkPrices = ["soda" => 3, "water" => 3, "juice" => 4];

      $ticketType = $_GET["ticket-type"];
      $popcornSize = $_GET["popcorn-size"];
      $drinkChoice = $_GET["drink-choice"];

      $subtotalCost = $ticketPrices[$ticketType] + $popcornPrices[$popcornSize] + $drinkPrices[$drinkChoice];
      $totalCost = $subtotalCost * $TAX_RATE;

      echo "You have selected a <strong>{$ticketType}</strong> ticket, a <strong>{$popcornSize}</strong> popcorn, and a <strong>{$drinkChoice}</strong>.<br>";
      echo "Subtotal: $" . number_format($subtotalCost, 2) . "<br>";
      echo "Total after tax: $" . number_format($totalCost, 2) . "<br>";
      ?>
    </main>
  </div>
</body>

</html>