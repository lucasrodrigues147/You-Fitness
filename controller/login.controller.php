<?php

class Login
{

    public static function index()
    {

        global $DB;
     
        new LoadingView('login');
    }


    public static function aluno()
    {
        global $DB;
        //$query = $DB->query("SELECT *  FROM plans");
        //$row = $query->fetch(PDO::FETCH_OBJ);

        echo "Login aluno";
    }


    public static function admin()
    {
        global $DB;
        // $query = $DB->query("SELECT *  FROM plans");
        // $row = $query->fetch(PDO::FETCH_OBJ);

        echo "Login admin";
    }

    public function autentication()
    {
        global $DB;

        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        if(empty($email) || empty($senha)){
            return false; 
        }

        $query = $DB->query("SELECT *  FROM alunos where email = '{$email}' and senha = '{$senha}'");
        $row = $query->fetch(PDO::FETCH_OBJ);

        if(!empty($row)){
            $_SESSION['login'] = true;
            $_SESSION['alunos'] = $row;

            if($row->tipo == 1){  /// verifica se é administrador
                router('menu');

            }else if($row->tipo == 0){ /// verifica se é aluno
                router('treinos');
            }


        }else{

        }
    
    }


    public function sair(){
        session_destroy();
        router('login');
    }


}
