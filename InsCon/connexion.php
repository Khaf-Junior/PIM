<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<style>
    .form{
        margin-top: 100px;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
</style>
<body>

    <?php 
        include './database.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            if($email != "" && $mdp != ""){
                $sql="SELECT * FROM utilisateurs WHERE Email='$email' AND MotDePasse = '$mdp' ";
                $requete=$bdd->query($sql);
                $rep=$requete->fetch();
                if(isset($rep) && $rep != FALSE){
                    header("Location: index.html");
                    exit();
                }else{
                    $error_message = "Email ou mot de passe incorrect !";
                }
            }
       }

    ?>
    <div class="form">
        <form action="" method="POST">
        <?php 
            if(isset($_POST['ok'])){
                if($error_message){
            ?><p style="color: red;"><?php echo $error_message  ?></p>
              <?php    
              }
            }
        ?>
        <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="Entrez votre email...">
            <br><br>
            
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe...">
            <br><br>

            <input type="submit" name="ok" id="ok" value="Se connecter">
        </form>
    </div>
</body>
</html>