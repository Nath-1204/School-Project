<?php

class Mdl_etudiant{
    public static function get_data(){
        require "../../utils/db.php";
        $sql = "SELECT * FROM etudiants";
        $statement = db_connect()->prepare($sql);
        $statement->execute();
        $people = $statement->fetchAll(PDO::FETCH_OBJ);
        return $people;
    }

    public static function save_data(){
        require "../utils/db.php";
        require "../views/modules/add_etudiants.php";
        $message = '';
        if(isset ($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['email'])){
            $sql = "INSERT INTO etudiants VALUES (NULL, :nom, :prenom, :niveau, :email)";
            $statement = $connexion -> prepare($sql);
            $statement->bindValue(':nom', $_POST['nom']);
            $statement->bindValue(':prenom', $_POST['prenom']);
            $statement->bindValue(':niveau', $_POST['niveau']);
            $statement->bindValue(':email', $_POST['email']);
            if($statement->execute()){
                $message = 'Nice😍';
            }else{
                $message = 'Bad connexion';
            }
        }
    }

    
    function set_data(){
        require "../utils/db.php";
        /*$set = 'SELECT * FROM etudiants WHERE id=:id';
        $statement = $pdo->prepare($set);
        $statement->execute([':id' => $id ]);
        $person = $statement->fetch(PDO::FETCH_OBJ);
        return $set;*/
        $id = $_GET['id'];
        $sql = "SELECT * FROM etudiants WHERE id=:id";
        $statement = $connexion -> prepare($sql);
        $statement ->execute([':id' => $id]);
        $person = $statement->fetch(PDO::FETCH_OBJ);
        if(isset ($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['email'])){
            $name = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $niveau = $_POST['niveau'];
            $email = $_POST['email'];
            $sql = 'UPDATE modules SET nom= :nom, prenom=:prenom, niveau=:niveau, email=:email WHERE id=:id';
            $statement = $connexion -> prepare($sql);
            if($statement -> execute([':nom' => $name, ':prenom' => $prenom, ':niveau' => $niveau, ':email' => $email, ':id' => $id])){
                header("Location: ../views/etudiants/list_etudiants.php");
            }
        }
    }

    function delete_data(){
        include "../views/etudiants/list_etudiants.php";
        require "../utils/db.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM etudiants WHERE id=:id";
        $statement = $connexion -> prepare($sql);
        if($statement -> execute([':id' => $id])){
            header("Location: http://localhost/projet%20Examen/views/etudiants/list_etudiants.php");
        }
    }
}