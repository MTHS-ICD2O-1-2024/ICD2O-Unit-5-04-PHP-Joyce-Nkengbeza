<!DOCTYPE html>
<!-- ICS2O-Unit5-01PHP-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Museum Prices for a day depending on age, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Joyce Nkengbeza" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-iconnew.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32new.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16new.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Museum Prices for a day depending on age, PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Museum Prices for a day depending on age, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/museum-clipart-lg.png" alt="museum image" />
      </div>
      <div class="page-content">Enter your age and the day of the week</div>
      <br />
      <br />
      <div class="page-content-php">
        <form action="./answer.php" method="GET">
          <!-- Numeric Textfield -->
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="age" />
            <label class="mdl-textfield__label" for="age">enter age...</label>
            <!-- class "mdl-textfield__error" -->
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sunday">
            <input type="radio" id="sunday" class="mdl-radio__button" name="day" value="1" checked />
            <span class="mdl-radio__label">sunday</span>
          </label>
          </br>
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="monday">
            <input type="radio" id="monday" class="mdl-radio__button" name="day" value="2" checked />
            <span class="mdl-radio__label">monday</span>
          </label>
          </br>
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="tuesday">
            <input type="radio" id="tuesday" class="mdl-radio__button" name="day" value="3" checked />
            <span class="mdl-radio__label">tuesday</span>
          </label>
          </br>
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="wednesday">
            <input type="radio" id="wednesday" class="mdl-radio__button" name="day" value="4" checked />
            <span class="mdl-radio__label">wednesday</span>
          </label>
          </br>
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="thursday">
            <input type="radio" id="thursday" class="mdl-radio__button" name="day" value="5" checked />
            <span class="mdl-radio__label">thursday</span>
          </label>
          </br>
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="friday">
            <input type="radio" id="friday" class="mdl-radio__button" name="day" value="6" checked />
            <span class="mdl-radio__label">friday</span>
          </label>
          </br>
          <label classs="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="saturday">
            <input type="radio" id="saturday" class="mdl-radio__button" name="day" value="7" checked />
            <span class="mdl-radio__label">saturday</span>
          </label>
          </br>

          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Prices!
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>