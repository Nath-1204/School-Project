<?php require '../../controllers/ctrl_auths.php' ?>
<?php $save_ajout = $object_auths -> loginEtudiant(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/css/index1.css">
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<style>
    a#lien_inscription{
        font-size: 22px;
        text-decoration: none;
        font-weight: 900;
        color: black;
        font-style: italic;
    }
    a#lien_inscription:hover{
        font-size: 27px;
        text-decoration: none;
        font-weight: 500;
        padding: 5px;
    }
</style>
<body>
    <div id="container">
        <div id="space"></div>
        <div id="logo"></div>
        <h1 class="titre">Se connecter(Etudiant)</h1>
        <div class="content">
            <form action="connexionAdmin.php" method="post" style="width: 70%; margin-left:15%;text-align:center">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Saisir votre email" id="email" style="text-align: center;" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Saisir votre mot de passe" id="password" style="text-align: center;" class="form-control" required>
                </div><br>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" style="text-align: center;">Se connecter</button>
                </div>

                <div id="space_down" style="text-align: center; margin-top: 10px">
                    <h4>Pas encore de compte 
                        <a href="inscriptionEtudiant.php" id="lien_inscription" style="color: #0a58ca;">Créez-en un !!
                    </a></h4>
                </div>
                <div id="space_down"></div>
            </form>
        </div>
    </div>

<?php require "../../utils/footerContact.php" ; ?>