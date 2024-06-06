<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos étudiants</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/acceuil.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="padding-left: 9%">
        <a href="http://localhost/exam_projet/acceuil/acceuilProf.php" class="nav-link navbar-brand">Acceuil</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="http://localhost/exam_projet/views/etudiants/list_etudiants.php?user=prof" class="nav-link navbar-brand">
                        Liste des etudiants <span class="sr-only"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="space">
        <div id="center"></div>
    </div>
    <div class="space">
        <h1 class="ligne">CONSULTER LA LISTE DE VOS ETUDIANTS</h1>
    </div>

<?php require '../utils/footermodule.php'; ?>