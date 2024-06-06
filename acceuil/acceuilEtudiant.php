<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil (Etudiants)</title>
    <link rel="stylesheet" href="../assets/css/acceuil.css">
</head>
<style>
    a:hover{
        font-size:20px;
        transition-duration: 500ms;
        transition-delay: 10ms   
    }
</style>
<body>
    <div id="corps">
        <div class="navbar">
            <nav>
                <ul>
                    <div class="box">
                        <li><a href="#" class="lien">Acceuil</a></li>
                    </div>
                    <div class="box">
                        <li><a href="moduleForEtudiant.php" class="lien">Module</a></li>
                    </div>
                    <div class="box">
                        <li><a href="profForEtudiant.php" class="lien">Professeur</a></li>
                    </div>
                    <div class="box">
                        <li><a href="contacts.php?user=etudiant" class="lien">Contact</a></li>
                    </div>
                    <div style="float: right; margin-right: 4%" class="box">
                        <li>
                            <a href="../utils/deconnexion.php?user=etudiant" class="lien">
                                <h1>Deconnexion</h1>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>

        <div class="space">
            <div id="center"></div>
        </div>
        <div class="space">
            <h1 class="ligne">Bienvenu sur la page d'acceuil pour les étudiants</h1>
        </div>
    </div>
</body>
</html>