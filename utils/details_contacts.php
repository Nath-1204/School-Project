<?php
require ("fonction.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails contact</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>
    div.card{
        position: absolute;
        top: 10%;
    }
</style>
<body>
    <?php if(@$_GET['user'] == "etudiant"); ?>
        <div class="title" style="text-align: center; margin-top:0%" >
            <h1>Détails du contact</h1>
        </div>
        <div class="card-body" style="width: 25rem;">
            <h5 class="card-title" style="text-align: center; font-size: 20px">
                <?php getNameInDatabase($_GET['id']) ?><br>
                <?php getFirstNameInDatabase($_GET['id']) ?>
            </h5>
            <p class="card-text" style="text-align: center; font-size:17px">
                <b><u>Fonction</u>:</b>
                <?php getFunctionInDatabase($_GET['id'])?><br>
                <b><u>Téléphone</u>:</b>
                <?php getTelephoneInDatabase($_GET['id'])?><br>
                <b><u>Email</u>:</b>
                <?php getMailInDatabase($_GET['id'])?>
            </p>
            <form action="sendMessage.php" method="post">
                <div class="form-floating" style="width: 20rem;resize:none">
                    <textarea class="form-control" name="message" id="floatingTextarea2" cols="30" rows="10" style="height: 100px;margin-left:5%" placeholder="Laisser un commentaire ici"></textarea>
                    <input type="hidden" name="user" value="etudiant">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <label for="floatingTextarea2" style="left: 5%;">Ecrire un message</label>
                </div>
                <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-left:75%">Envoyer</button>
                <a href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=etudiant" class="btn btn-danger">Retour</a>
            </form>
        </div>

    <?php elseif(@$_GET['user'] == 'prof'); ?>
        <div class="title" style="text-align: center; margin-top:0%" >
            <h1>Détails du contact</h1>
        </div>
        <div class="card-body" style="width: 25rem;">
            <h5 class="card-title" style="text-align: center; font-size: 20px">
                <?php getNameInDatabase($_GET['id']) ?><br>
                <?php getFirstNameInDatabase($_GET['id']) ?>
            </h5>
            <p class="card-text" style="text-align: center; font-size:17px">
                <b><u>Fonction</u>:</b>
                <?php getFunctionInDatabase($_GET['id'])?><br>
                <b><u>Téléphone</u>:</b>
                <?php getTelephoneInDatabase($_GET['id'])?><br>
                <b><u>Email</u>:</b>
                <?php getMailInDatabase($_GET['id'])?>
            </p>
            <form action="sendMessage.php" method="post">
                <div class="form-floating" style="width: 20rem;resize:none">
                    <textarea class="form-control" name="message" id="floatingTextarea2" cols="30" rows="10" style="height: 100px;margin-left:5%" placeholder="Laisser un commentaire ici"></textarea>
                    <input type="hidden" name="user" value="prof">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <label for="floatingTextarea2" style="left: 5%;">Ecrire un message</label>
                </div>
                <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-left:75%">Envoyer</button>
                <a href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=prof" class="btn btn-danger">Retour</a>
            </form>
        </div>

    <?php else; ?>
        <div class="title" style="text-align: center; margin-top:0%" >
            <h1>Détails du contact</h1>
        </div>
        <div class="card-body" style="width: 25rem;">
            <h5 class="card-title" style="text-align: center; font-size: 20px">
                <?php getNameInDatabase($_GET['id']) ?><br>
                <?php getFirstNameInDatabase($_GET['id']) ?>
            </h5>
            <p class="card-text" style="text-align: center; font-size:17px">
                <b><u>Fonction</u>:</b>
                <?php getFunctionInDatabase($_GET['id'])?><br>
                <b><u>Téléphone</u>:</b>
                <?php getTelephoneInDatabase($_GET['id'])?><br>
                <b><u>Email</u>:</b>
                <?php getMailInDatabase($_GET['id'])?>
            </p>
            <form action="sendMessage.php" method="post">
                <div class="form-floating" style="width: 20rem;resize:none">
                    <textarea class="form-control" name="message" id="floatingTextarea2" cols="30" rows="10" style="height: 100px;margin-left:5%" placeholder="Laisser un commentaire ici"></textarea>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <label for="floatingTextarea2" style="left: 5%;">Ecrire un message</label>
                </div>
                <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-left:75%">Envoyer</button>
                <a href="http://localhost/projet%20Examen/views/contacts/list_contact.php" class="btn btn-danger">Retour</a>
            </form>
        </div>

    <?php endif; ?>

</body>
</html>