<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos module</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/acceuil.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="padding-left: 9%">
        <a href="http://localhost/exam_projet/acceuil/acceuilEtudiant.php" class="nav-link navbar-brand">Acceuil</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="http://localhost/exam_projet/views/modules/list_modules.php?user=etudiant" class="nav-link navbar-brand">
                        Liste des modules <span class="sr-only"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="space">
        <div id="center"></div>
    </div>
    <div class="space">
        <h1 class="ligne">CONSULTER LA LISTE DE VOS MODULES</h1>
    </div>

<?php require '../utils/footermodule.php'; ?>