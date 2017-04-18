<?php
    
    include("PDO_Connection.php");
    
    $befehl = 'SELECT * from werk;';
    $statement = $PDO->prepare($befehl);
    $statement->execute();

    $result1 = $statement->fetch();
    $result2 = $statement->fetch();
    $result3 = $statement->fetch();

    $bild1 = $result1['w_bilddatei'];
    $bild2 = $result2['w_bilddatei'];
    $bild3 = $result3['w_bilddatei'];

    $titel1 = $result1['titel'];
    $titel2 = $result2['titel'];
    $titel3 = $result3['titel'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
          <title>ArtRoom</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="stylesheet.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script type="text/javascript" src="myJS.js"></script>
    </head>

    <body>    

    <h1>ArtRoom</h1>    

        <ul>
          <li><a href="ueberUns.html">Über uns</a></li>
          <li><a href="suche.php">Suche</a></li>
          <li style="float:right"><a href="registrieren.html">Registrieren</a></li>
          <li style="float:right"><a href="anmelden.html">Anmelden</a></li>
        </ul>
        
        
        <div class="row">
          
            <div class="col-md-4">
            <div class="thumbnail">
               <a href="<?php echo 'werk.php?titel='.$titel1 ?>">
                <img src="<?php echo 'Kunstwerke/'.$bild1 ?>" alt="Lights">
                <div class="caption">
                <?php echo("<center>$titel1</center>") ?>    
                </div>
              </a>
            </div>
          </div>
            
          <div class="col-md-4">
            <div class="thumbnail">
               <a href="<?php echo 'werk.php?titel='.$titel2 ?>">
                <img src="<?php echo 'Kunstwerke/'.$bild2 ?>" alt="Nature">
                <div class="caption">
                <?php echo("<center>$titel2</center>") ?>    
                </div>
              </a>
            </div>
          </div>
            
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo 'werk.php?titel='.$titel3 ?>">
                <img src="<?php echo 'Kunstwerke/'.$bild3 ?>" alt="Fjords">
                <div class="caption">
                <?php echo("<center>$titel3</center>") ?>
                </div>
              </a>
            </div>
          </div>
            
        </div>
        
    </body>    
    
</html>
