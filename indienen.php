<?php

require "config/dbconn.php";
if(isset($_POST['submit'])){
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['e-mail'];
    $vraag = $_POST['vraag'];
    // create query
    $sql = "INSERT INTO `indienen`(`naam`, `tussenvoegsel`, `achternaam`,`e-mail`, `vraag`) VALUES ('$voornaam','$tussenvoegsel', '$achternaam', '$email', '$vraag')";

   
    // attempting to execute the query
    if ($con->query($sql) === TRUE) {
        // executed query successfully
    
        
    } else {
        // Failed executing query
        echo "Error: " . $sql . "<br>" . $con->error;
        }
        
    // Closing connection
    $con->close(); 
 }

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
    <br><br><br><br><br>
    <div>
    <form id="form" action="" method="post"> <span style= color:black>
           <br>
           Uw naam: <input id="voornaam" type="text" name="voornaam" placeholder="Voornaam" /> <br>
           Uw tussenvoegsel <input id="tussenvoegsel" type="text" name="tussenvoegsel" placeholder="Tussenvoegsel" /> <br>
           Uw achternaam: <input id="achternaam" type="text" name="achternaam" placeholder="Achternaam" /> <br>
           Uw e-mail: <input id="e-mail" type="text" name="e-mail" placeholder="E-mail" /> <br>
          <div id="bveld"> Uw vraag:</span></div><textarea form="form" id="vraag" name="vraag" ></textarea> <br>
                    <input type="submit" name="submit" value="Versturen"/>
        </form>
    </div>
    <br><br>

        <button onclick="getlocation();"> positie zien</button> 
        <div id="demo" style="width: 600px; height: 400px; margin-left: 200px;">

</content>
    <footer>
        <div class="prefooter"> <p>Ontvang maandelijks al het nieuws voor vrijwilligers!</p></div>

    </footer>
</body>
<script src="assets/js/script.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"> </script>
</html>