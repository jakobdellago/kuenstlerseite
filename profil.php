<?php
    
    include("PDO_Connection.php");

    $username = $_GET['username'];

    $befehl = 'SELECT * from profil WHERE username LIKE "'.$username.'" LIMIT 1';
    $statement = $PDO->prepare($befehl);
    $statement->execute();
    $result = $statement->fetch();
    
    //echo $befehl;
    //var_dump($result);
    
    $beschreibung = $result["p_beschreibung"]; 
    $bilddatei = $result["p_bilddatei"];

    //var_dump($beschreibung);
?>

<!DOCTYPE html>
<html>

<head>
    
    <title><?php echo($username."s Profil")?></title>
    <link rel="stylesheet" href="stylesheet.css" id="profilIMG">    
    <meta charset="utf-8">
</head>    
    
<body>

    <h1><?php echo($username."s Profil")?></h1>
    
    <center><img src="<?php echo($bilddatei) ?>"></center>
    
    <center><p>Beschreibung:<br><?php echo($beschreibung) ?></p></center>

    <a href="index.html">Auf die Hauptseite..</a>
    
</body>
</html>