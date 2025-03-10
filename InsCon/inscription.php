<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
    <div class="form">
        <h2>Inscrivez vous !</h2>
        <form action="traitement.php" method="POST">

            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required placeholder="Entrez votre prenopm...">
            <br><br>

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required placeholder="Entrez votre nom...">
            <br><br>

            <label for="pseudo"></label>
            <input type="text" name="pseudo" id="pseudo" required placeholder="Entrez votre pseudo...">
            <br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="Entrez votre email...">
            <br><br>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required placeholder="">
            <br><br>

            <input type="submit" name="ok" id="ok" value="M'inscrire">
        </form>
    </div>
</body>
</html>