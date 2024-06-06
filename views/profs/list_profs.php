<?php 
    require "../../controllers/ctrl_profs.php";
    $people = Ctrl_Profs::index();
    if (@$_GET['user'] == 'etudiant'):
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Profs</title>
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="padding-left: 9%">
        <a href="http://localhost/projet%20Examen/acceuil/accueilEtudiant.php" class="nav-link navbar-brand ">Acceuil</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="http://localhost/projet%20Examen/views/profs/list_profs.php?user=prof" class="nav-link navbar-brand">Listes des étudiants</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Tous les professeurs</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Matière enseigné</th>
                        <th>Niveau enseigné</th>
                        <th>Numéro téléphone</th>
                        <th>Adresse email</th>
                    </tr>
                    <?php
                    foreach($people as $person); ?>
                        <tr>
                            <td><?= $person->nom; ?></td>
                            <td><?= $person->prenom; ?></td>
                            <td><?= $person->matiere; ?></td>
                            <td><?= $person->niveau; ?></td>
                            <td><?= $person->telephone; ?></td>
                            <td><?= $person->email; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?php require "../../utils/footerprof.php"; ?>

<?php else: ?>

<?php require "../../utils/headerprof.php"; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Tous les professeurs</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Matière enseigné</th>
                        <th>Niveau enseigné</th>
                        <th>Numéro téléphone</th>
                        <th>Adresse email</th>
                    </tr>
                    <?php
                    foreach($people as $person); ?>
                        <tr>
                            <td><?= $person->nom; ?></td>
                            <td><?= $person->prenom; ?></td>
                            <td><?= $person->matiere; ?></td>
                            <td><?= $person->niveau; ?></td>
                            <td><?= $person->telephone; ?></td>
                            <td><?= $person->email; ?></td>
                            <td>
                                <a href="./edit_profs.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
                                <a onclick="return confirm('Are you sure to delete this entry?')"  href="./delete_profs.php?id=<?= $person->id ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
<?php require '../../utils/footerprof.php'; ?>

<?php endif; die(); ?>