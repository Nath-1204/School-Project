<?php 
    include ("../../utils/db.php");

    class Mdl_contact{
        public static function get_data(){
            $connect = db_connect()->query("SELECT * FROM contact")->fetchAll();
            return $connect;
        }

        public static function save_data(){
            $insertion = db_connect()->prepare('INSERT INTO contacts (nom,prenom,fonction,email,telephone) VALUES (?,?,?,?,?) ');
            $insertion->execute([$_POST['nom'],$_POST['prenom'],$_POST['fonction'],$_POST['email'], $_POST['telephone']]);
            if($insertion){
                echo '    <p style="font-size:20px;margin-left:37%; font-weight:900">Les informations saisies ont été enregistrés</p>';
            }
        }

        public static function set_data(){
           $cont = db_connect()->prepare('UPDATE contacts SET nom=? , prenom=?, fonction=?, email=?, telephone=? WHERE id=?');
           if($cont->execute([$_POST['nom'], $_POST['prenom'], $_POST['fonction'], $_POST['email'], $_POST['telephone'], $_POST['id']])){
                header("Location: ../views/contacts/list_contact.php");
           }
        }

        public static function delete_data(){
            if(isset($_GET['id'] ) && $_GET['action'] == 'delete'){
                $sqlDelete = 'DELETE FROM contacts WHERE id = '.$_GET['id'].' ';
                if(db_connect()->query($sqlDelete)){
                    header('location: ../views/contacts/list_contact.php');
                }
            }
        }
    }
?>
