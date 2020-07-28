<?php 

class Treinos{

  public static function index(){

    global $DB;
    $row =[];

    $sexo = $_SESSION['alunos']->sexo;/// M ou F

    $treinos = $DB->query("SELECT *  FROM treinos where sexo = '{$sexo}' ");

    //listando e tratando dados
    foreach ($treinos as $key => $treino) {
      $row[] = $treino;
    }

    new LoadingView("treinos", $row);

  }


  public function exercicios(){


    global $DB;
    $row =[];

    $treino_id = $_GET['treino_id'];
    $sexo = $_SESSION['alunos']->sexo;/// M ou F

    $rows = $DB->query("SELECT *  FROM exercicios where treinos_id = '{$treino_id}' ");

    //listando e tratando dados
    foreach ($rows as $key => $exercicio) {
      $row[] = $exercicio;
    }


    new LoadingView("exercicios", $row);

  }

  
}


?>