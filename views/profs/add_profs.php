<?php 
require "../../utils/db.php";

$message = '';
if(isset ($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matiere']) && isset($_POST['niveau']) && isset($_POST['telephone']) && isset($_POST['email'])){
    $sql = "INSERT INTO etudiants(nom,prenom,matiere,niveau,telephone,email) VALUES (:nom, :prenom,:matiere, :niveau, :telephone, :email)";
    $statement = db_connect()->prepare($sql);
    $statement->bindValue(':nom', $_POST['nom']);
    $statement->bindValue(':prenom', $_POST['prenom']);
    $statement->bindValue(':matiere', $_POST['matiere']);
    $statement->bindValue(':niveau', $_POST['niveau']);
    $statement->bindValue(':telephone', $_POST['telephone']);
    $statement->bindValue(':email', $_POST['email']);

    if($statement->execute()){
        $message = 'data inserted successfully';
        header('Location: ../../views/profs/list_profs.php');
    }else{
        $message = "Oups!!";
    }
}
?>

<?php require "../../utils/headerprof.php"; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Ajouter Proffesseur</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)): ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="matiere">Matière enseigné</label>
                    <input type="text" name="matiere" id="matiere" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau enseigné</label>
                    <input type="text" name="niveau" id="niveau" class="form-control" required>
                </div><div class="form-group">
                    <label for="telephone">Numéro téléphone</label>
                    <input type="text" name="telephone" id="telephone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Ajouter professeur</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require '../../utils/footerprof.php'; ?>