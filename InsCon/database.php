<?php

$host = 'localhost';  
$dbname = ''; 
$username = 'root'; 
$password = ''; 

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie avec PDO !";
} catch (PDOException $e) {
   
    echo "Erreur de connexion : " . $e->getMessage();
}

?>