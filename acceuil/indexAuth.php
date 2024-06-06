<?php require "../utils/header_login.php"; ?>

<?php
if(isset($_GET)){
    if(@$_GET['answer'] == 'yes'){
        echo '  <div class="row" style="width:70%;border: 3px solid black;">
                    <div style="margin-left: 15%">
                        <h2 class="card-title">AUTHENTIFIEZ-VOUS EN TANT QU ` ADMINISTRATEUR</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-bg-primary mb-3" style="width: 75%;margin-left:10%">
                            <div class="card-body">
                                <h3 class="card-title">SE CONNECTER(en tant que administrateur)</h3>
                                <p class="card-text" style="font-size:22px">Vous avez déja un compte ?? Verifier votre identité en cliquant sur "Se connecter"</p>
                                <a href="../views/auths/connexionAdmin.php" class="btn btn-light" style="margin-left:30%">Se connecter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card text-bg-primary mb-3" style="width: 75%;margin-left:10%">
                            <div class="card-body">
                                <h3 class="card-title">S ` INSCRIRE(en tant que administrateur)</h3>
                                <p class="card-text" style="font-size:22px">Cliquer sur "S ` inscrire"  pour en créer un ! </p>
                                <a href="../views/auths/inscriptionAdmin.php" class="btn btn-light" style="margin-left:30%">S `inscrire</a>
                            </div>
                        </div>
                    </div>
                </div> ';
            die();
    }
    elseif (@$_GET['answer'] == 'no') {
        header('location: index.php');
        die();
    } else {

    }
}
?>

<div class="alert alert-danger" role="alert">
    <h3>RAPPEL : En vous connectant en tant qu'administrateur, vous avez le droit de consulter, modifier, ajouter et supprimer des informations concernant les modules, les étudiants, les profs et les contacts.</h3>
    <h3>Cependant, souvenez-vous... DES GRANDS POUVOIRS IMPLIQUENT DE GRANDES RESPONSABILITES !</h3>
    <br>
    <h4>Voulez-vous continuer? </h4>
    <form action="indexAuth.php" method="get">
        <div class="form-check">
            <input type="radio" name="answer" id="flexRadioDefault1" class="form-check-input" value="yes">
            <label for="flexRadioDefault1" class="form-check-label">OUI</label>
        </div>
        <div class="form-check">
            <input type="radio" name="answer" id="flexRadioDefault2" class="form-check-input" value="no">
            <label for="flexRadioDefault2" class="form-check-label">NON</label>
        </div>
        <input type="submit" class="btn btn-danger" value="Envoyer la réponse">
    </form>
</div>

<?php require '../utils/footerContact.php'; ?>