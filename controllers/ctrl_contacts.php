<?php 
//Session_start();
// $_SESSION['pseudo'] = $_POST['pseudo'];

include('../../models/mdl_contact.php');

class Ctrl_Contacts{
    #afficher liste
    public function index(){
        $contact = new Mdl_contact();
        $data_contact = $contact :: get_data();
        return $data_contact;
    }

    #afficher formulaire d'ajout
    function add(){
        require("views/contacts/formulaire_ajout.php");
    }

    #sauvegarder l'ajout
    function save(){
        $contact = new Mdl_contact();
        $save = $contact :: save_data();
        return $this;
    }

    #pour sauvegarder le formulaire de modification 
    function update(){
        $update = new Mdl_contact();
        $object_contact = new Ctrl_Contacts();
        $update :: set_data();
        return $this;
    }

    #pour supprimer un élément
    function delete(){
        $delete = new Mdl_contact();
        $object_contact = new Ctrl_Contacts();
        $delete :: delete_data();
        return $this;
    }

}
    /*
    $object_contact = new Ctrl_Contacts();
    $liste_contact = $object_contact -> index();
        
       $ajout_form = $object_contact -> add();
       $save_ajout = $object_contact -> save();

        $suppr = $object_contact -> delete()
        $modif = $object_contact -> update();
    */

?>
