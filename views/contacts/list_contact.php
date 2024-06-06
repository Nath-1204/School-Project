<?php require "../../controllers/ctrl_contacts.php" ; 
$object_contact = new Ctrl_Contacts();
$liste_contact = $object_contact -> index();
if (@$_GET['user'] == 'etudiant'): ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos contacts</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: #eff2f4;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-info" style="font-size: 20px">
        <div class="container-fluid">
            <a href="http://localhost/projet%20Examen/acceuil/accueilEtudiant.php" class="nav-link active" style="font-size: 24px;"><b>Acceuil</b></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Liste contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="title" style="text-align: center; margin-top:5%">
        <h1>Liste des contacts</h1>
    </div>
    <table style="width: 70%; margin-left:15%;margin-top:5%" class="table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Fonction</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($liste_contact as $k => $d){
                echo '  <tr>
                            <td> '.$d['nom'].' </td>
                            <td> '.$d['prenom'].' </td>
                            <td> '.$d['fonction'].' </td>
                            <td>
                                <a class="btn btn-outline-primary" href="../../utils/details_contacts.php?id='.$d['id'].'&user=etudiant" role="button" >Voir les details</a>
                                <a href="../../utils/message.php?id='.$d['id'].'&user=etudiant" role="button">Contactez</a>
                            </td>
                        </tr> ' ; 
            } 
            ?>
        </tbody>
    </table>
<?php require "../../utils/footerContact.php"; ?>

<?php elseif(@$_GET['user'] == 'prof'): ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos contacts</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<style>
    body{
        border-color: #eff2f4;
    }
</style>
<body>
    <nav style="font-size: 20px" class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a href="http://localhost/projet%20Examen/acceuil/accueilProf.php" style="font-size: 24px" class="nav-link active"><b>Acceuil</b></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Liste contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="title" style="text-align: center; margin-top:5%">
        <h1>Liste des contacts</h1>
    </div>

    <table style="width:70%; margin-left:15%;margin-top:5%" class="table table-striped table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Fonction</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($liste_contact as $k =>$d){
                echo ' <tr>
                        
                        <td>'.$d['nom'].'</td>
                        <td>'.$d['prenom'].'</td>
                        <td>'.$d['fonction'].'</td>
                        <td><a class="btn btn-outline-primary" href="../../utils/details_contacts.php?id='.$d['id'].'&user=prof" role="button">Voir les details</a>
                        <a class="btn btn-outline-success" href="../../utils/message.php?id='.$d['id'].'&user=prof" role="button">Contactez</a></td>
                    </tr> ' ;
            } ?>
        </tbody>
    </table>

<?php else: require "../../utils/headerContact.php"; ?>
<div class="title" style="text-align: center; margin-top:5%">
    <h1>Listes des contacts</h1>
</div>
<table class="table table-striped table-hover" style="width:70%; margin-left:15%;margin-top:5%">
    <thead>
        <tr class="table-primary">
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Fonction</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($liste_conctact as $k => $d) {
            echo '  <tr>
                
                        <td>'.$d['nom'].'</td>
                        <td>'.$d['prenom'].'</td>
                        <td>'.$d['fonction'].'</td>
                        <td><a class="btn btn-outline-primary" href="../../utils/details_contacts.php?id='.$d['id'].'" role="button">Voir les details</a>
                        <a class="btn btn-outline-success" href="../../utils/message.php?id='.$d['id'].'&user=admin" role="button">Contactez</a></td>
                    </tr> '; 
        }?>
    </tbody>
</table>

<?php require "../../utils/footerContact.php"; ?>

<?php endif; die(); ?>