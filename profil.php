<?php
    
    include("PDO_Connection.php");

    $username = $_GET['username'];

    $befehl = 'SELECT * from profil WHERE username LIKE "'.$username.'" LIMIT 1';
    $statement = $PDO->prepare($befehl);
    $statement->execute();
    $result = $statement->fetch();
    
    if(!$result){
        die("User existiert nicht<br><a href='anmelden.html'>Zurück</a>");
    }
    
    $beschreibung = $result["p_beschreibung"]; 
    $bilddatei = $result["p_bilddatei"];

    
    
    
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo($username."s Profil")?></title>
    <link rel="stylesheet" href="stylesheet.css">    
    <meta charset="utf-8">
</head>    
    
<body>

    <h1><?php echo($username."s Profil")?></h1>
    
    <center><img src="<?php echo('Profilbilder/'.$bilddatei) ?>" width="25%" height="25%" alt="Sorry, aber die Bilddatei (<?php echo ($bilddatei) ?>) ist auf dem Server nicht zu finden"></center>
    
    <center><p>Beschreibung:<br><?php echo($beschreibung) ?></p></center>
    
    <center><a href="registriereWerk.php?username=<?php echo ($username) ?>">Werk hinzufügen</a></center><br>
    
    <center><h3>Veröffentlichte Kunstwerke</h3></center>
    
    <?php 
    
        $befehl = 
        'SELECT * from werk w 
        join profil p
        on(w.erstellerID = p.p_id) 
        WHERE username LIKE "'.$username.'"';
        $statement = $PDO->prepare($befehl);
        $statement->execute();
        
        while($result = $statement->fetch()){
            $bilddatei=$result['w_bilddatei'];
            $titel=$result['titel'];
            echo ("<center><a href='werk.php?titel=$titel'>$titel</a></center>");
        }
    
    ?>
    
    <br><center><a href="index.php">Auf die Hauptseite..</a></center>
    
</body>
</html>