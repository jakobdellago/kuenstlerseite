<?php
    include("PDO_Connection.php");

    
    if(isset($_GET['suche'])) {
    
        $suche = $_GET['suche'];
        $befehl = 'SELECT * from werk WHERE titel LIKE "%'.$suche.'%"';
        $statement = $PDO->prepare($befehl);
        $statement->execute();
        $result = $statement->fetch();

        if(!$result){
            die("Suche hat keine Ergebnisse gebracht<br><a href='suche.php'>Zurück</a>");
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Kunstwerk hinzufügen</title>
    <meta charset="utf-8">
    <script type = "text/javascript" src="myJS.js"></script>
    <link rel="stylesheet" href="stylesheet.css">    
</head>    
    
<body>
    
    
    <form action="javascript:suche(input.value)" method="get">
        <center>
            Suche
            <br><input name="input" id="input" type="text">
            <br><input type="submit" class="signupbtn" value="Suchen"><br>
            <?php 
                
                if(isset($_GET['suche'])){
            
                    while($result!=null){
                            echo("<br><img src=Kunstwerke/". $result['w_bilddatei'] ." alt='Das gewünschte Bild existiert in der Datenbank nicht'>");
                            echo("<br><a href='werk.php?titel=". $result['titel']. "'</a>");
                            echo("<br>".$result['titel']."<br>");
                            $result = $statement->fetch();
                    }
                }
            
            
            ?>
            <br><a href="index.php">Startseite</a>
        </center>
    </form>
    
    

    <?php
    
    
    
    ?>
    
</body>
</html>