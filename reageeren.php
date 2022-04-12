<?php

require "config/dbconn.php";
if(isset($_POST['submit'])){
    $voornaam = $_POST['naam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['e-mail'];
    $vraag = $_POST['reactie'];
    // create query
    $sql = "INSERT INTO `reactie`(`naam`, `tussenvoegsel`, `achternaam`,`e-mail`, `reactie`) VALUES ('$voornaam','$tussenvoegsel', '$achternaam', '$email', '$reactie')";

   
    
    if ($con->query($sql) === TRUE) {
        // executed query successfully
    
        
    } else {
        
        echo "Error: " . $sql . "<br>" . $con->error;
        }
        
    
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
          <div id="bveld"> Uw reactie:</span></div><textarea form="form" id="reactie" name="reactie" ></textarea> <br>
                    <input type="submit" name="submit" value="Versturen"/>
        </form>
    </div>
    <br><br><br><br>
</content>
    <footer>
        <div class="prefooter"> <p>Ontvang maandelijks al het nieuws voor vrijwilligers!</p></div>

    </footer>
</body>
<script src="assets/js/script.js"></script>
</html>