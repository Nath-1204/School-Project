<?php require "../../utils/headerContact.php"; ?>

<?php require "../../controllers/ctrl_contacts.php"; ?>

<div class="title" style="text-align: center; margin-top:5%">
    <h1>Ajouter un contact</h1>
</div>
<form action="add_contact.php" method="post" class="row g-3" enctype="multipart/form-data" style="width:50%; margin-left:25%;margin-top:0%">
    <div class="col-md-6">
        <label for="" class="form-label">Nom</label>
        <input type="text" class="form-control" id="" name="nom" required>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="" name="prenom" required>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Fonction</label>
        <input type="text" class="form-control" id="" name="fonction" required>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" id="" name="email" required>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Téléphone</label>
        <input type="text" class="form-control" id="" name="telephone" required>
    </div>
    <button type="submit" class="btn btn-secondary">Envoyer</button>
</form>

<?php
$object_contact = new Ctrl_Contacts();
$save_ajout = $object_contact -> save();
?>

<?php require "../../utils/footerContact.php"; ?>