<?php

class Alunos
{

  public static function index()
  {


    global $DB;
    $row = [];

    $alunos = $DB->query("SELECT *  FROM alunos");

    foreach ($alunos as $key => $aluno) {
      $row[] = $aluno;
    }

    new LoadingView("alunos", $row);
  }


  private function getAluno($id)
  {

    global $DB;
    $query = $DB->query("SELECT * FROM alunos where id = '{$id}' ");
    $row = $query->fetch(PDO::FETCH_OBJ);

    return $row;
  }


  public function dadosDoFormulario()
  {

    global $DB;

    $nome   = $_POST['nome'];
    $email  = $_POST['email'];
    $idade  = $_POST['idade'];
    $peso   = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo   = $_POST['sexo'];
    $id     = $_POST['id'];


    if (empty($nome)) {
      if (empty($email)) {
        if (empty($idade)) {
          if (empty($peso)) {
            if (empty($altura)) {
              if (empty($sexo)) {
                return false;
              }
            }
          }
        }
      }
    }
    

    $query = $DB->query("UPDATE`alunos` SET 
            `nome`  ='$nome', 
            `email`  ='$email', 
            `idade` ='$idade',  
            `peso`  ='$peso',
            `altura`='$altura', 
            `sexo`  ='$sexo'
             WHERE `id` = {$id};");

    if (!empty($query)) {
      router('alunos');
    } else {
      return false;
    }
  }



  public function alterar()
  {

    global $DB;
    $id = $_GET['id'];
    $aluno = $this->getAluno($id);

    new LoadingView("alterar-alunos", $aluno);
  }



  public function add()
  {

    global $DB;

    $nome   = $_POST['nome'];
    $email  = $_POST['email'];
    $idade  = $_POST['idade'];
    $peso   = $_POST['peso'];
    $altura = $_POST['altura'];
    $sexo   = $_POST['sexo'];


    if (empty($nome)) {
      if (empty($email)) {
        if (empty($idade)) {
          if (empty($peso)) {
            if (empty($altura)) {
              if(empty($sexo)){
              return false;
              }
            }
          }
        }
      }
    }

    $query = $DB->query("INSERT INTO `alunos` (`nome`, `email`,`idade`, `peso`, `altura`, `sexo`) 
    VALUES ('{$nome}', '{$email}', '{$idade}', '{$peso}', '{$altura}', '{$sexo}');");

    if (!empty($query)) {
    router('alunos');
    } else {
      return false;
    }
  }

  public function excluir(){
    global $DB;

    $id = $_GET['id'];
    
    $query = $DB->query("DELETE FROM alunos where id =  {$id} ");
    
    if (empty($query)) {
      return false;
    } else {
      router('alunos');
    }
  }
}
