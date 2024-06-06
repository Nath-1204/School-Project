<?php
    require "../../models/mdl_etudiant.php";

    class Ctrl_Etudiants{
        public static function index(){
            $etudiants = new Mdl_etudiant;
            $people = $etudiants -> get_data();
            return $people;
        }

        public static function add(){
            return Mdl_etudiant::save_data();
        }

        public static function update(){
            return Mdl_etudiant::set_data();
        }

        public static function delete(){
            return Mdl_etudiant::delete_data();
        }
    }