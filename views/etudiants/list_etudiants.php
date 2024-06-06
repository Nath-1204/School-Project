<?php 
    require "../../controllers/ctrl_etudiants.php";
    $people = Ctrl_Etudiants::index();
    if (@$_GET['user'] == 'prof');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Etudiants</title>
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="padding-left: 9%">
        <a href="http://localhost/projet%20Examen/acceuil/accueilProf.php" class="nav-link navbar-brand ">Acceuil</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="http://localhost/projet%20Examen/views/etudiants/list_etudiants.php?user=prof" class="nav-link navbar-brand">Listes des étudiants</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Listes des étudiants</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Niveau</th>
                        <th>Adresse email</th>
                    </tr>
                    <?php
                    foreach($people as $person); ?>
                        <tr>
                            <td><?= $person->nom; ?></td>
                            <td><?= $person->prenom; ?></td>
                            <td><?= $person->niveau; ?></td>
                            <td><?= $person->email; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?php require "../../utils/footeretudiant.php"; ?>

<?php else; ?>
    <?php require "../../utils/headeretudiant.php"; ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Liste des étudiants</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Niveau</th>
                        <th>Adresse email</th>
                    </tr>
                    <?php
                    foreach($people as $person); ?>
                        <tr>
                            <td><?= $person->nom; ?></td>
                            <td><?= $person->prenom; ?></td>
                            <td><?= $person->niveau; ?></td>
                            <td><?= $person->email; ?></td>
                            <td>
                                <a href="./edit_etudiants.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
                                <a href="./delete_etudiants.php?id=<?= $person->id ?>" onclick="return confirm('Are you sure want to delete this entry?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?php require "../../utils/footeretudiant.php"; ?>

<?php endif; 
    die(); 
?>