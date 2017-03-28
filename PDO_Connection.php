<?php

    define('DATABASE', "mysql:host=localhost;dbname=kunstseite_db;");
    define('USERNAME', "stdeljak");
    define('PASSWORD', "mypass");
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

try{
    $PDO = new PDO(DATABASE, USERNAME, PASSWORD, $options); 
    echo("Successfully connected to database");
}catch(PDOException $e){
    echo("failed to connect to database");
}
    //var_dump($PDO)

?>