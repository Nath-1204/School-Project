<?php if(@$_GET['user'] == 'etudiant'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dconnexion(Etudiant)</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>
    .row{
        position: absolute;
        top: 20%;
        left: 15%;
        border-radius: 50px;
    }
</style>
<body>
    <?php
    if(isset($_GET)){
        if($_GET['answer'] == 'yes'){
            header("Location: ../acceuil/index.php");
        }
        elseif(@$_GET['answer'] == 'no' && $_GET['user'] == 'etudiant'){
            header("Location: ../acceuil/acceuilEtudiant.php");
        }
    }
    ?>

    <div class="alert alert-danger" role="alert">
        <h4>Voulez-vous réellement vous deconnecter??</h4>
        <form action="deconnexion.php" method="get">
            <div class="form-check">
                <input type="hidden" name="user" value="etudiant">
                <input type="radio" class="form-check-input" name="answer" id="flexRadioDefault1" value="yes">
                <label for="flexRadioDefault1" class="form-check-label">
                    OUI
                </label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="answer" id="flexRadioDefault2" value="no">
                <label for="flexRadioDefault2" class="form-check-label">
                    NON
                </label>
            </div>
            <input type="submit" value="Envoyer la réponse" class="btn btn-danger">
        </form>
    </div>
<?php require "footerContact.php" ?>


<?php elseif(@$_GET['user'] == 'prof'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deconnexion(Prof)</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>
    .row{
        position: absolute;
        top: 20%;
        left: 15%;
        border-radius: 50px;
    }
</style>
<body>
    <?php
        if(isset($_GET)){
            if($_GET['answer'] == 'yes'){
                header("Location: ../acceuil/index.php");
            }
            elseif(@$_GET['answer'] == 'no' && $_GET['user'] == 'prof'){
                header("Location: ../acceuil/acceuilProf.php");
            }
        }
    ?>

    <div class="alert alert-danger" role="alert">
        <h4>Voulez-vous réellement vous deconnecter??</h4>
        <form action="deconnexion.php" method="get">
            <div class="form-check">
                <input type="hidden" name="user" value="prof">
                <input type="radio" class="form-check-input" name="answer" id="flexRadioDefault1" value="yes">
                <label for="flexRadioDefault1" class="form-check-label">
                    OUI
                </label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="answer" id="flexRadioDefault2" value="no">
                <label for="flexRadioDefault2" class="form-check-label">
                    NON
                </label>
            </div>
            <input type="submit" value="Envoyer la réponse" class="btn btn-danger">
        </form>
    </div>
<?php require "footerContact.php" ?>

<?php endif;
die() ?>