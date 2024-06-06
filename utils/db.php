<?php 
    function db_connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=exam_projet','root','');
        return $pdo;
    }
?>