<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<style>
    .form{
        margin-top: 200px;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    <?php 
         include './database.php';
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $email = $_POST["email"];
            $mdp = $_POST["mdp"];
            
            if($email != "" && $mdp != ""){
                $sql = "SELECT * FROM utilisateurs WHERE Email = '$email' AND MotDePasse = '$mdp' ";
                $requete = $bdd->query($sql);
                $reponse = $requete->fetch();

                if($reponse['idUser'] != FALSE){
                    header("Location: index.html");
                }else{
                    $error_message = "Email ou mot de passe incorrect !";
                }
            }
        }
    
    ?> 
    <div class="form">
        <form action="" method="POST">
            <h2>Connectez vous !</h2>
            <?php
                if(isset($_POST['ok'])){
                    if($error_message){
                        ?><p style="color: red;"><?php echo $error_message ?></p>
                <?php  
                     }
                }         
            ?>
        <label for="email">Email</label><br><br>
            <input type="email" name="email" id="email" required placeholder="Entrez votre email...">
            <br><br>

            <label for="mdp">Mot de passe</label><br><br>
            <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe...">
            <br><br>

            <input type="submit" name="ok" id="ok" value="Se connecter">
            <p>Vous n'avez pas de compte ? <button><a href="inscription.php">Inscrivez vous !</a></button></p>
           
        </form>
    </div>
</body>
</html>