<?php
    include './database.php';

    if(isset($_POST['ok'])){
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $sql = "INSERT INTO utilisateurs VALUES (0,:Prenom,:Nom,:Pseudo,:Email,:MotDePasse)";
        $requete = $bdd->prepare($sql);
        $requete->execute(
            array(
                "Prenom" => $prenom,
                "Nom" => $nom,
                "Pseudo" => $pseudo,
                "Email" => $email,
                "MotDePasse" => $mdp,
            )
            );
            echo '<br><br>' . "Informations transmises avec succées !";
    }


?>