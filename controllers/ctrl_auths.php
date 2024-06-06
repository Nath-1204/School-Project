<?php 
//Session_start();
// $_SESSION['pseudo'] = $_POST['pseudo'];

include('../../models/mdl_auth.php');

class Ctrl_Auths{
    function saveEtudiant(){
        #require("../views/auths/inscription.php");
        $nom = filter_input(INPUT_POST, 'nom');
        $prenom = filter_input(INPUT_POST, 'prenom');
        $niveau = filter_input(INPUT_POST, 'niveau');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $password_retype = filter_input(INPUT_POST, 'password_retype');

        if($password == $password_retype){
            if($email){
                $auth = new Mdl_auth();
                $save = $auth :: save_dataEtudiant();

            #header("Location:connexion.php");
            }
        }else{
            echo"<script>alert(\"Veuillez à bien confirmer votre mot de passe\")</script>";
        }
    }

    function saveAdmin(){
        #require("../views/auths/inscription.php");
        $nom = filter_input(INPUT_POST, 'nom');
        $prenom = filter_input(INPUT_POST, 'prenom');
        $telephone = filter_input(INPUT_POST, 'telephone');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $password_retype = filter_input(INPUT_POST, 'password_retype');

        if($password == $password_retype){
            if($email){
                $auth = new Mdl_auth();
                $save  = $auth :: save_dataAdmin();
            }
        }else{
            echo" <script>alert(\"Veuillez à bien confirmer votre mot de passe\")</script>";
        }
    }

    function saveProf(){
        #require("../views/auths/inscription.php")
        $pseudo = filter_input(INPUT_POST, 'pseudo');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $password_retype = filter_input(INPUT_POST, 'password_retype');

        if($password == $password_retype){
            if($email){
                $auth = new Mdl_auth();
                $save = $auth :: save_dataProf();

                #header("Location:connexion.php");
            }
        }else{
            echo" <script>alert(\"Veuillez à bien confirmer votre mot de passe\")</script>";
        }
    }

    function loginEtudiant(){
        $auth = new Mdl_auth();
        $login = $auth :: verifyEtudiant();
    }

    function loginProf(){
        $auth = new Mdl_auth();
        $login = $auth :: verifyProf();
    }

    function loginAdmin(){
        $auth = new Mdl_auth();
        $login = $auth :: verifyAdmin();
    }

}

$object_auths = new Ctrl_Auths();
#$save_ajout = $object_auths -> login();

?>
