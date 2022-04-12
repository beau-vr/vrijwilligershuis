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
        <br><br><br><br><br>
        <?php $sql = "SELECT * FROM `indienen`";    
 if ($result = $conn->query($sql)) {
   $str = "<ul style='list-style-type:none; margin:0; padding:0; margin-top:60px'>";
   while ($row = $result->fetch_assoc()) {
     
     $str .= "<li><div style='text-align: left; border-radius:10px; border:1px solid black; margin-right:4px; margin-bottom:10px; padding:5px; background-color:white; width:300px;'><h5>naam:</h5>" . $row['naam'] . "<h5>titel:</h5>". $row['titel'] . "<h5>bericht:</h5> " . $row['bericht'] ."<h5>datum:</h5> " . $row['aanmaakdatum'] ."</div></li>";
   }
   $str .= "</ul>";
   $result->free();
 }
 $conn->close();
 ?><br><br>
    
  </div>
</div>
</content>
    <footer>
        <div class="prefooter"> <p>Ontvang maandelijks al het nieuws voor vrijwilligers!</p></div>

    </footer>
</body>
<script src="assets/js/script.js"></script>
</html>