<?php require ('db.php') ?>

<?php
    function getNameInDatabase($name){
        db_connect();
        $request = 'SELECT nom FROM contacts WHERE id='.$name.'';
        $resultat = db_connect()->query($request)->fetch();
        $nom = $resultat['nom'];
        echo $nom;
    }

    function getFirstNameInDatabase($firstname){
        db_connect();
        $request = 'SELECT prenom FROM contacts WHERE id='.$firstname.'';
        $resultat = db_connect()->query($request)->fetch();
        $prenom = $resultat['prenom'];
        echo $prenom;
    }

    function getFunctionInDatabase($func){
        db_connect();
        $request = 'SELECT fonction FROM contacts WHERE id='.$func.'';
        $resultat = db_connect()->query($request)->fetch();
        $fonction = $resultat['fonction'];
        echo $fonction;
    }

    function getMailInDatabase($mail){
        db_connect();
        $request = 'SELECT email FROM contacts WHERE id='.$mail.'';
        $resultat = db_connect()->query($request)->fetch();
        $email = $resultat['email'];
        echo $email;
    }

    function getTelephoneInDatabase($tel){
        db_connect();
        $request = 'SELECT telephone FROM contacts WHERE id='.$tel.'';
        $resultat = db_connect()->query($request)->fetch();
        $telephone = $resultat['telephone'];
        echo $telephone;
    }

?>    