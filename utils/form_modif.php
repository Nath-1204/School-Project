<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        require('db.php');
        if(isset($_GET['id'])) {
            $contact = db_connect()->query('SELECT * FROM contacts WHERE id= '.$_GET['id'].'')->fetch();                                    
        }
    ?>

    <form class="row g-3" action="../views/contacts/edit_contact.php" enctype="multipart/form-data" method="post" style="width:50%; margin-left:25%;margin-top:5%">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required value="<?= $contact["nom"] ?>">
        </div>
        <div class="col-md-6">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required value="<?= $contact["prenom"] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="fonction">Fonction</label>
            <input type="text" class="form-control" id="fonction" name="fonction" required value="<?= $contact['fonction'] ?>">    
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="<?= $contact['email'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="telephone">Telephone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" required value="<?= $contact['telephone'] ?>">
        </div>
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>

</body>
</html>
