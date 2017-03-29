<?php

    include("PDO_Connection.php");

    $username = $_POST['username'];
    $beschreibung = $_POST['beschreibung'];
    $bilddatei = $_POST['bilddatei'];
    
    $befehl = "INSERT INTO profil(username, p_beschreibung, p_bilddatei) VALUES (?, ?, ?)";
    
    $statement = $PDO->prepare($befehl);
    $statement->bindParam(1, $username, PDO::PARAM_STR);
    $statement->bindParam(2, $beschreibung, PDO::PARAM_STR);
    $statement->bindParam(3, $bilddatei, PDO::PARAM_STR);
    $statement->execute();

?>

