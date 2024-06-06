<?php require "../../controllers/ctrl_auths.php" ?>
<?php $save_ajout = $object_auths -> saveAdmin(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/css/index1.css">
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<style>
    a#lien_connexion{
        font-size: 18px;
        text-decoration: none;
        font-weight: 900;
        color: black;
        font-style: italic;
    }
    a#lien_connexion:hover{
        font-size: 20px;
        text-decoration: none;
        font-weight: 500;
        padding: 5px;
    }
</style>
<body>
    <div id="container">
        <div id="space"></div>
        <div id="logo"></div>
        <h1 class="titre">S'inscrire(Administrateur)</h1>
        <div id="content">
            <form action="" method="post" style="width: 70%; margin-left:15%;text-align:center">
                <div class="form-group">
                    <input type="text" style="text-align: center;" name="nom" placeholder="Nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="text" style="text-align: center;" name="prenom" placeholder="Prenom" id="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="text" style="text-align: center;" name="telephone" placeholder="Votre numéro téléphone" id="telephone" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="email" style="text-align: center;" name="email" placeholder="Saisir votre email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" style="text-align: center;" name="password" placeholder="Saisir votre mot de passe " id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" style="text-align: center;" name="password_retype" placeholder="Re-saisir votre mot de passe" id="password_retype" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" style="text-align: center;" class="btn btn-info">Créer un compte</button>
                </div>
                <h4>Vous avez déjà un compte? <a href="connexionAdmin.php" id="lien_connexion" style="color: #0a58ca;">Cliquer ici pour vous connecter</a></h4>
            </form>

            <div id="space_down"></div>
        </div>
    </div>
</body>
</html>