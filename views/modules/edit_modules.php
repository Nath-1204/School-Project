<?php 
require '../../utils/db.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM modules WHERE id=:id';
$statement = db_connect()=>prepare($sql);
$statement->execute([':id => $id']);
$person = $statement->fetch(PDO::FETCH_OBJ);

if(isset ($_POST['nom']) && isset ($_POST['code']) && isset ($_POST['credit']) && isset ($_POST['heure'])){
    $name = $_POST['nom'];
    $name = $_POST['code'];
    $name = $_POST['credit'];
    $name = $_POST['heure'];
    $sql = 'UPDATE modules SET nom=:nom, code=:code, credit=:credit, heure=:heure WHERE id=:id';
    $statement = db_connect()->prepare($sql);

    if($statement->execute([':nom ' => $name, ':code' => $code, ':heure' => $heure, ':id' => $id])){
        header("Location: ../../views/modules/list_modules.php");
    }
}

require '../../controllers/ctrl_modules.php';
?>

<?php require '../../utils/headermodule.php'; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Mise à jour modules</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)); ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" value="<?= $person->nom; ?>" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" value="<?= $person->code; ?>" name="code" id="code" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="credit">Crédit</label>
                    <input type="text" value="<?= $person->credit; ?>" name="credit" id="credit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="heure">Nom</label>
                    <input type="text" value="<?= $person->heure; ?>" name="heure" id="heure" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require "../../utils/footermodule.php"; ?>