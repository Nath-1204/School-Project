<?php
require "../../utils/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM profs WHERE id=:id";
$statement = db_connect()->prepare($sql);
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matiere']) && isset($_POST['niveau']) && isset($_POST['telephone']) && isset($_POST['email'])){
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matiere = $_POST['matiere'];
    $niveau = $_POST['niveau'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $sql = "UPDATE etudiants SET nom=:nom, prenom=:prenom, matiere=:matiere, niveau=:niveau, tel=:telephone,email=:email WHERE id=:id";
    $statement = db_connect()->prepare($sql);

    if($statement->execute([':nom' => $name, ':prenom' => $prenom, ':matiere' => $matiere, ':niveau' => $niveau, ':telephone' => $tel, ':email' => $email, ':id' => $id])){
        header("Location: ../../views/profs/list_profs.php");
    }
}

require '../../controllers/ctrl_profs.php';

?>

<?php require '../../utils/headerprof.php'; ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Mise à jour professeur</h2>
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
                    <label for="matiere">Matière enseigné</label>
                    <input type="text" value="<?= $person->matiere; ?>" name="matiere" id="matiere" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau enseigné</label>
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

<?php require '../../utils/footerprof.php'; ?>