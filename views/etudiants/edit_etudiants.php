<?php
require "../../utils/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM etudiants WHERE id=:id";
$statement = db_connect()->prepare($sql);
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);

if(isset ($_POST['nom']) && isset ($_POST['prenom']) && isset ($_POST['niveau']) && isset ($_POST['email'])){
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $niveau = $_POST['niveau'];
    $email = $_POST['email'];
    $sql = "UPDATE etudiants SET nom=:nom, prenom=:prenom, niveau=:niveau, email=:email WHERE id=:id";
    $statement = db_connect()->prepare($sql);

    if($statement->execute([':nom' => $name, ':prenom' => $prenom, ':niveau' => $niveau, ':email' => $email, ':id' => $id])){
        header("Location: ../../views/etudiants/list_etudiants.php");
    }
}

require '../../controllers/ctrl_etudiants.php';

?>

<?php require '../../utils/headeretudiant.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Mise à jour étudiant</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)): ?>
                <div class="alert alert-succes">
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" value="<?= $person->nom; ?>" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" value="<?= $person->prenom; ?>" name="prenom" id="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau</label>
                    <input type="text" value="<?= $person->niveau; ?>" name="niveau" id="niveau" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Mettre à jour </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require '../../utils/footeretudiant.php'; ?>