<?php

$host = 'localhost';  
$dbname = 'InsCon1'; 
$username = 'root'; 
$password = ''; 

try {

    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie avec PDO !";
} catch (PDOException $e) {
   
    echo "Erreur de connexion : " . $e->getMessage();
}

?>