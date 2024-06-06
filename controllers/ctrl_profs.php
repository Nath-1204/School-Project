<?php
    require '../../models/mdl_prof.php';

    class Ctrl_Profs{
        public static function index(){
            $profs = new Mdl_prof;
            $people = $profs -> get_data();
            return $people;
        }

        public static function add(){
            return Mdl_prof::save_data();
        }

        public static function update(){
            return Mdl_prof::set_data();
        }

        public static function delete(){
            return Mdl_prof::delete_data();
        }
    }