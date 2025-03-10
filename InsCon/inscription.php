<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<style>
    .form{
        margin-top: 50px;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    <div class="form">
        <h2>Inscrivez vous !</h2>
        <form action="traitement.php" method="POST">

            <label for="prenom">Prenom</label><br><br>
            <input type="text" name="prenom" id="prenom" required placeholder="Entrez votre prenom...">
            <br><br>

            <label for="nom">Nom</label><br><br>
            <input type="text" name="nom" id="nom" required placeholder="Entrez votre nom...">
            <br><br>

            <label for="pseudo">Pseudo</label><br><br>
            <input type="text" name="pseudo" id="pseudo" required placeholder="Entrez votre pseudo...">
            <br><br>

            <label for="email">Email</label><br><br>
            <input type="email" name="email" id="email" required placeholder="Entrez votre email...">
            <br><br>

            <label for="mdp">Mot de passe</label><br><br>
            <input type="password" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe...">
            <br><br>

            <input type="submit" name="ok" id="ok" value="M'inscrire">
            <p>Vous avez un compte ? <button><a href="connexion.php">Me connecter</a></button></p>
        </form>
    </div>
</body>
</html>