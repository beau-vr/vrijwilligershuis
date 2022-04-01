<?php
require "config/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vrijwilligershuis</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <header>
        <img class="logo-header"src="assets/img/logo-small.svg" alt="logo">
        <span> VrijwilligersHuis<br>Nieuwegein </span>
    </header>
    <content>
        <br><br><br><br><br><br><br>
    <h2>meerlezen</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="readmore()" id="myBtn">Read more</button>
    <br>
    <br>    
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>test</h2>
    <p>testetstest</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>test</h2>
    <p>testtesttesets</p>
  </div>
  <div class="column" style="background-color:#fff;">
    <h2>test</h2>
    <p>testtesttesets</p>
  </div>
  <div class="column" style="background-color:#6E2585;">
    <h2>test</h2>
    <p>testtesttesets</p>
  </div>
</div>
</content>
    <footer>
        <div class="prefooter"> <p>Ontvang maandelijks al het nieuws voor vrijwilligers!</p></div>

    </footer>
</body>
<script src="assets/js/script.js"></script>
</html>