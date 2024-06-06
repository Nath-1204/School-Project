<?php 
require "../../utils/db.php";

$message = '';
if(isset($_POST['nom']) && isset($_POST['code']) && isset($_POST['credit']) && isset($_POST['heure']) ){
    /*$nom = $_POST['nom'];
    $code = $_POST['code'];
    $credit = $_POST['credit'];
    $heure = $_POST['heure'];*/
    $sql = 'INSERT INTO modules VALUES (NULL, :nom, :code, :credit, :heure)';
    $statement = db_connect()->prepare($sql);
    $statement->bindValue(':nom', $_POST['nom']);
    $statement->bindValue(':code', $_POST['code']);
    $statement->bindValue(':credit', $_POST['credit']);
    $statement->bindValue(':heure', $_POST['heure']);

    if($statement->execute()){
        $message = 'data inserted successfully';
        header('Location: ../../views/modules/list_modules.php');
    }else{
        $message = 'Oups!!';
    }
}
?>

<?php require "../../utils/headermodule.php"; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Ajouter modules</h2>
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
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" name="code" id="code" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="credit">Crédit</label>
                    <input type="text" name="credit" id="credit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="heure">Heure</label>
                    <input type="text" name="heure" id="heure" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Ajouter modules</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require '../../utils/footermodule.php'; ?>