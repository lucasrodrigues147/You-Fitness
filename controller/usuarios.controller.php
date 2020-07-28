<?php 

class Usuarios{

  public static function index(){

    global $DB;
    $row = [];

    $usuarios = $DB->query("SELECT *  FROM usuarios");

    foreach ($usuarios as $key => $usuario) {
       $row[] = $usuario;
    }

    new LoadingView("usuarios", $row);

  }
  public function add(){

    //new LoadingView("add");
  
    }
  public function editar(){

    //new LoadingView("editar");
    
    }  

}








?>