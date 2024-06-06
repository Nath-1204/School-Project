<?php
    require('../../utils/db.php');

    class Mdl_auth{
        public static function get_data(){
            $connect = db_connect()->query('SELECT * FROM Authentification')->fetchAll();
            return $connect;           
        }   
        
        public static  function save_dataEtudiant(){           
            if($_POST){
                $insertSql = 'INSERT INTO etudiants(nom,prenom,niveau,email,password,password_retype) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['niveau'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['password_retype'].'")';
                if(db_connect()->query($insertSql)){
                    echo"<script>alert(\"  Votre compte a été créé\")</script>";   
                }
            }
        }
                
        public static  function save_dataProf(){           
            if($_POST){
                @$insertSql = 'INSERT INTO profs(nom,prenom,matiere,niveau,email,password,password_retype) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['matière'].'","'.$_POST['niveau'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['password_retype'].'")';
                if(db_connect()->query($insertSql)){
                    echo"<script>alert(\"  Votre compte a été créé\")</script>";   
                }               
            #header ("location: views/acceuil/main.php");
            }
        }

        public static  function save_dataAdmin(){   
            if($_POST){
                $insertSql = 'INSERT INTO authentification(nom,prenom,email,telephone,password,password_retype) VALUES("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['email'].'","'.$_POST['telephone'].'", "'.$_POST['password'].'","'.$_POST['password_retype'].'")';
                if(db_connect()->query($insertSql)){
                    echo"<script>alert(\"  Votre compte a été créé\")</script>";   
                }
            }
        }

        public static function verifyEtudiant(){
            if($_POST){
                extract($_POST);
                if(!empty($email) && !empty($password)){
                    $q = db_connect()->prepare("SELECT * FROM etudiants WHERE email=?");
                    $q -> execute([$email]);
                    $resultat=$q ->fetch();
                    if($resultat == FALSE){
                        echo"<script>alert(\" CE COMPTE N'EXISTE PAS : Verifier l'email saisi puis ré-essayer\")</script>";
                    }else{
                        if($password == $resultat['password']){
                            header("location: ../acceuil/acceuilEtudiant.php");
                        }else{
                            echo"<script>alert(\"  MOT DE PASSE INCORRECT : Verifier le mot de passe saisi puis ré-essayer\")</script>";
                        }
                    }
                }
            }
        }

        public static function verifyProf(){
            if($_POST){
                extract($_POST);
                if(!empty($email) && !empty($password)){
                    $q = db_connect()->prepare("SELECT * FROM profs WHERE email=?");
                    $q -> execute([$email]);
                    $resultat=$q ->fetch();
                    if($resultat == FALSE){
                        echo"<script>alert(\" CE COMPTE N'EXISTE PAS : Verifier le mail saisi puis ré-essayer\")</script>";
                    }else{
                        if($password == $resultat['password']){
                            header("location: ../acceuil/acceuilProf.php");
                        }else{
                            echo"<script>alert(\"  MOT DE PASSE INCORRECT : Verifier le mot de passe saisi puis ré-essayer\")</script>";
                        }
                    }
                }
            }
        }

        public static function verifyAdmin(){
            if($_POST){
                extract($_POST);
                if(!empty($email) && !empty($password)){
                    $q = db_connect()->prepare("SELECT * FROM authentification WHERE email=?");
                    $q -> execute([$email]);
                    $resultat=$q ->fetch();
                    if($resultat == FALSE){
                        echo"<script>alert(\" CE COMPTE N'EXISTE PAS : Verifier le mail saisi puis ré-essayer\")</script>";
                    }else{
                        if($password == $resultat['password']){
                            header("location: ../acceuil/main.php");
                        }else{
                            echo"<script>alert(\"  MOT DE PASSE INCORRECT : Verifier le mot de passe saisi puis ré-essayer\")</script>";
                        }
                    }
                }
            }
        }
    }
?>