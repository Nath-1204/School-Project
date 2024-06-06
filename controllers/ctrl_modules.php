<?php
  require '../../models/mdl_module.php';

  class Ctrl_Modules{
    public static function index(){
        $modules = new Mdl_module;
        $people = $modules -> get_data();
        return $people;
    }

    public static function add(){
        return Mdl_module::save_data();
    }

    public static function update(){
        return Mdl_module::set_data();
    }

    public static function delete(){
        return Mdl_module::delete_data();
    }
  }