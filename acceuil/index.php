<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<style>
    #carouselExampleCaptions{
        height: 80%;
        width: 100%;
    }

    .navbar{
        z-index: 4;
        position: fixed;
        width: 100%;
        height: 20%;
    }

    #logo{
        width: 170px;
        height: 100%;
    }
</style>
<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">
            <img src="../image/LOGO_ESTI_JO.png" alt="" id="logo">
        </div>

        <!-- NAVIGATION MENU -->
        <ul class="nav-links">

            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li>
                    <a href="#">ACCEUIL</a>
                </li>
                <li class="services">
                    <a href="#">ETUDIANTS</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a href="../views/auths/connexionEtudiant.php">Connexion</a></li>
                        <li><a href="../views/auths/inscriptionEtudiant.php">Inscription</a></li>
                    </ul>
                </li>
                <li class="services">
                    <a href="#">PROFESSEURS</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a href="../views/auths/connexionProf.php">Connexion</a></li>
                        <li><a href="../views/auths/inscriptionProf.php">Inscription</a></li>
                    </ul>
                </li>
                <li><a href="indexAuth.php">ADMINISTRATION</a></li>
                <li><a href="../views/auths/connexionEtudiant.php">CONTACTS</a></li>
            </div>
        </ul>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carouse">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"  aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"  aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="../image/schoolProject.jpg" alt="..." class="d-block w-100">
                <div style="font-size: 30px; color:#000000" class="carousel-caption d-none d-md-block">
                    <h3>BIENVENU</h3>
                    <p>Bienvenu sur notre page d'acceuil😍😍😍 </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../image/professeur.jpg" alt="..." class="d-block w-100">
                <div style="font-size: 30px; color:#000000" class="carousel-caption d-none d-md-block">
                    <h3>BIENVENU</h3>
                    <p>Si vous êtes un professeur de notre établissements, Connectez-vous s'il vous plaît!!😍😍😍  </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../image/school_project.png" alt="..." class="d-block w-100">
                <div style="font-size: 30px; color:#000000" class="carousel-caption d-none d-md-block">
                    <h3>BIENVENU</h3>
                    <p>Si vous êtes étudiants, naviguez et consultez la page 😍😍😍</p>
                </div>
            </div>
        </div>

        <button type="button" class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button type="button" class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>