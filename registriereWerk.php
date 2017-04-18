<?php
    include("PDO_Connection.php");

    $username = $_GET['username'];
        
    $befehl = 'SELECT * from profil WHERE username LIKE "'.$username.'" LIMIT 1';
    $statement = $PDO->prepare($befehl);
    $statement->execute();
    $result = $statement->fetch();
    
    if(!$result){
        die("Fehler!");
    }
    
    $erstellerID = $result['p_id'];
    
?>

<!DOCTYPE html>
<html>

<head>
    
     <title>Kunstwerk hinzufügen</title>
    <link rel="stylesheet" href="stylesheet.css">    
    <meta charset="utf-8">
    <script type = "text/javascript" src="myJS.js"></script>
</head>    
    
<body>

    <h2 style="text-align:center">Kunstwerk hinzufügen</h2>

            <p hidden id="erstellerID"><?php echo($erstellerID) ?></p>
    
          <div class="container" style="border:1px solid #ccc">
                <label><b>Titel</b></label>
                <input type="text" placeholder="Gib hier den Titel ein" id="titel" required>
              
                <label><b>Beschreibung (Optional)</b></label><br>
                <textarea id="beschreibung" maxlength="250" required></textarea><br>
                
                <label><b>Bilddatei (Optional)</b></label>
                <input type="text" placeholder="Gib hier jene Bilddatei an, welche später als Profilbild verwendet wird" id="bild" required>
              
                <div class="clearfix">
                      <button type="submit" class="signupbtn" onclick="addWerk()">Werk hinzufügen</button>
                </div>
              
                <div>
                    <a href="index.php">Zurück</a>
                </div>  
          </div>

</body>
</html>