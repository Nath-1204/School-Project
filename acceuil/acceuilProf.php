<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil(Prof)</title>
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
                        <li>
                            <a href="#" class="lien">
                                <h1>Acceuil</h1>
                            </a>
                        </li>
                    </div>
                    <div class="box">
                        <li>
                            <a href="moduleForProf.php" class="lien"><h1>Module</h1></a>
                        </li>
                    </div>
                    <div class="box">
                        <li>
                            <a href="etudiantForProf.php" class="lien"><h1>Etudiant</h1></a>
                        </li>
                    </div>
                    <div class="box">
                        <li>
                            <a href="contacts.php?user=prof" class="lien"><h1>Contact</h1></a>
                        </li>
                    </div>
                    <div style="float: right; margin-right:4%" class="box">
                        <li>
                            <a href="../utils/deconnexion.php?user=prof" class="lien"><h1>Deconexion</h1></a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>

        <div class="space">
            <div id="center"></div>
        </div>
        <div class="space">
            <h1 class="ligne">Bienvenu sur la page d'acceuil pour les professeurs</h1>
        </div>
    </div>
</body>
</html>