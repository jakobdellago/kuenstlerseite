<?php
    
    include("PDO_Connection.php");

    $titel = $_GET['titel'];

    $befehl = 'SELECT * from werk WHERE titel LIKE "'.$titel.'" LIMIT 1';
    $statement = $PDO->prepare($befehl);
    $statement->execute();
    $result = $statement->fetch();
    
    $beschreibung = $result["w_beschreibung"]; 
    $bilddatei = $result["w_bilddatei"];
    $erstellerID = $result["erstellerID"];

    $befehl = 
    'SELECT * from werk w 
    join profil p
    on(w.erstellerID = p.p_id) 
    WHERE erstellerID LIKE "'.$erstellerID.'"';
    $statement = $PDO->prepare($befehl);
    $statement->execute();
    $result = $statement->fetch();

    $username = $result["username"]
?>

<!DOCTYPE html>
<html>

<head>
    
    <title><?php echo($titel) ?></title>
    <link rel="stylesheet" href="stylesheet.css">    
    <meta charset="utf-8">
</head>    
    
<body>

    <h1><?php echo($titel) ?></h1>
    
    <center>
        
        <img src="<?php echo($bilddatei) ?>">
        <p>Beschreibung:<br><?php echo($beschreibung) ?></p>
        <a href="<?php echo("profil.php?username=".$username) ?>">Künstler</a><br>
        <a href="index.html">Auf die Hauptseite..</a>
    
    </center>
    
   
    
    
    
    
</body>
</html>