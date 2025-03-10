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
        align-items: center;
        justify-content: center;
    }
</style>
<body>
    <div class="form">
        <h2>Connectez-vous !</h2>
        <form action="connexion.php" method="POST">

            <label for="email">Email</label><br><br>
            <input type="email" id="email" name="email" required placeholder="Entrez votre email...">
            <br><br>

            <label for="email">Mot de passe</label><br><br>
            <input type="password" id="mdp" name="mdp" required placeholder="Entrez votre mot de passe...">
            <br><br>
            <input type="submit" name="ok" id="ok" value="Se connecter">
        </form>
    </div>
</body>
</html>