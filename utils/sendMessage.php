<?php require('db.php'); ?>

<?php if(@$_POST['user'] == 'etudiant'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
        if(isset($_POST)){
            $sendMessage = db_connect()->prepare("UPDATE 'contacts' SET 'messages_reçus' = :messages WHERE 'contacts'.'id' = :id" );
            $sendMessage-> bindValue(':messages', $_POST['message'], PDO::PARAM_STR);
            $sendMessage-> bindValue(':id',$_POST['id'],PDO::PARAM_INT);
            $sendMessage->execute();

            if($sendMessage){
                echo '<div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Message envoyé!!!</h4>
                            <p>Le message a été envoyé. Pour verifier, aller dans la table contact de la base de données et consulter les messages reçus</p>
                            <hr>
                            <a href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=etudiant" class="btn btn-danger" role="button">Revenir à l\'Acceuil</a>
                        </div>';
            }else{
                echo "Une erreur est surevnue";
            }
        }

    ?>   
</body>
</html>

<?php elseif(@$_POST['user'] == 'prof'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
        if(isset($_POST)){
            $sendMessage = db_connect()->prepare("UPDATE 'contacts' SET 'messages_reçus' = :messages WHERE 'contacts'.'id' = :id" );
            $sendMessage-> bindValue(':messages', $_POST['message'], PDO::PARAM_STR);
            $sendMessage-> bindValue(':id',$_POST['id'],PDO::PARAM_INT);
            $sendMessage->execute();

            if($sendMessage){
                echo '<div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Message envoyé!!</h4>
                            <p>Le message a été envoyé. Pour verifier, aller dans la table contact de la base de données et consulter les messages reçus</p>
                            <hr>
                            <a href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=prof" class="btn btn-danger" role="button">Revenir à l\'Acceuil</a>
                        </div>';
            }else{
                echo "Une erreur est surevnue";
            }
        }
    ?> 
</body>
</html>

<?php else; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
        if(isset($_POST)){
            $sendMessage = db_connect()->prepare("UPDATE 'contacts' SET 'messages_reçus' = :messages WHERE 'contacts'.'id' = :id" );
            $sendMessage-> bindValue(':messages', $_POST['message'], PDO::PARAM_STR);
            $sendMessage-> bindValue(':id',$_POST['id'],PDO::PARAM_INT);
            $sendMessage->execute();

            if($sendMessage){
                echo '  <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Message envoyé!!!</h4>
                            <p>Le message a été envoyé. Pour verifier, aller dans la table contact de la base de données et consulter les messages reçus</p>
                            <hr>
                            <a href="http://localhost/projet%20Examen/views/contacts/list_contact.php?" class="btn btn-danger" role="button">Revenir à l\'Acceuil</a>
                        </div>';
            }else{
                echo "Une erreur est surevnue";
            }
        }
    ?>   
</body>
</html>

<?php endif; ?>