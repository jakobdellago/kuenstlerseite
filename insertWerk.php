<?php

    include("PDO_Connection.php");

    $titel = $_POST['titel'];
    $beschreibung = $_POST['beschreibung'];
    $bilddatei = $_POST['bilddatei'];
    $erstellerID = $_POST['erstellerID'];

    $befehl = "INSERT INTO werk(titel, w_bilddatei, w_beschreibung, erstellerID) 
    VALUES (?, ?, ?, ?)";
    
    $statement = $PDO->prepare($befehl);
    $statement->bindParam(1, $titel, PDO::PARAM_STR);
    $statement->bindParam(2, $bilddatei, PDO::PARAM_STR);
    $statement->bindParam(3, $beschreibung, PDO::PARAM_STR);
    $statement->bindParam(4, $erstellerID, PDO::PARAM_STR);
    $statement->execute();

?>