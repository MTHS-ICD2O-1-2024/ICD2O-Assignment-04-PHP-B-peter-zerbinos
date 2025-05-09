<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Book Your Movie, in PHP" />
  <meta name="keywords" content="movies, tickets, popcorn" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-red.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Book Your Movie, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Book Your Movie, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/popcorn.webp" alt="Popcorn">
      </div>
      <form action="answer.php" method="GET">
        <p>Type of Ticket:</p>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
          <input type="radio" name="ticket-type" value="standard" checked>
          <span class="mdl-radio__label">Standard ($12)</span>
        </label>
        <br>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
          <input type="radio" name="ticket-type" value="vip">
          <span class="mdl-radio__label">VIP ($18)</span>
        </label>
        <br>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
          <input type="radio" name="ticket-type" value="imax">
          <span class="mdl-radio__label">IMAX ($22)</span>
        </label>
        <br>

        <p>Popcorn Size:</p>
        <select name="popcorn-size">
          <option value="small">Small ($5)</option>
          <option value="medium">Medium ($7)</option>
          <option value="large">Large ($9)</option>
        </select>
        <br>

        <p>Drink Choice:</p>
        <select name="drink-choice">
          <option value="soda">Soda ($3)</option>
          <option value="water">Water ($3)</option>
          <option value="juice">Juice ($4)</option>
        </select>
        <br>

        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">Calculate Total Cost + Tax (1.13)</button>
      </form>
    </main>
  </div>
</body>

</html>
