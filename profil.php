<?php
    
    include("PDO_Connection.php");

    $username = $_GET['username'];

    $befehl = 'SELECT * from profil WHERE username LIKE "'.$username.'" LIMIT 1';
    echo($befehl);
    $statement = $PDO->prepare($befehl);
    print_r($PDO->errorInfo());
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
    
    <title><?php echo($username."'s Profile")?></title>
    <link rel="stylesheet" href="stylesheet.css">    
    <meta charset="utf-8">
</head>    
    
<body>

    <h1><?php echo($username."'s Profile")?></h1>
    
    <p>Beschreibung:<br><?php echo($beschreibung) ?></p>

</body>
</html>