<?php


/*
    *----------------------------------------------------------------
    *  @description: Configuração do display error
    *----------------------------------------------------------------
    */

// habilitando o log pra teste
//DISPLAY_ERRORS = true | false
const DISPLAY_ERRORS = true;


if (DISPLAY_ERRORS == true) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

/*
    *----------------------------------------------------------------
    *  @description: Configurando Base url, responsavel por direcionamento dentro do site
    *----------------------------------------------------------------
    */
const BASE_URL = 'http://localhost/y-fit/you-fit';


/*
    *----------------------------------------------------------------
    *  @description: Configurando banco de dados
    *----------------------------------------------------------------
    */
global $DB;
const HOST      = 'localhost';       // SQL server
const DBNAME    = 'youfitness';      // database name
const USER      = 'root';            // username
const PASS      = 'joao123456789';   // password
const CHARSET   = 'utf8';            // define o charset da base de dados

try {
  $DB = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";" . CHARSET, USER, PASS);
} catch (PDOException $e) {
  if (DISPLAY_ERRORS == false) {
    print "Error!: " . $e->getMessage() . "<br/>";
  }
}


/*
    *----------------------------------------------------------------
    *  @description: Criando redirecionamento
    *----------------------------------------------------------------
    */
function router($page)
{
  header("Location: " . BASE_URL . "/?url={$page}");
  exit;
}


/*
*----------------------------------------------------------------
*  @description: Configurando auto load dos arquivs
*----------------------------------------------------------------
*/
spl_autoload_register(function ($class_name) {

  $class_controller   = strtolower("controller/$class_name.controller.php");
  if (file_exists($class_controller)) {
    require_once($class_controller);
  }

  $class_helper   = strtolower("helper/$class_name.helper.php");
  if (file_exists($class_helper)) {
    require_once($class_helper);
  }
});


/*
*----------------------------------------------------------------
*  @description: Cregando a view
*----------------------------------------------------------------
*/
class LoadingView
{

  function __construct($view = null, $data = null)
  {
    $this->index($view, $data);
  }

  static public function index($view, $data)
  {
    if (!empty($view)) {
      if (file_exists("view/{$view}.view.php")) {
        require_once("view/{$view}.view.php");
      }
    }
  }
}

/*
*----------------------------------------------------------------
*  @description: Definindo minhas rotas
*----------------------------------------------------------------
*/

$url = $_GET['url'] ?? '';

$PARAMETER = explode("/", $url);
$patterns = array('/[^a-zA-Z0-9 -]/');

if (!empty($PARAMETER)) {

  if (!empty($PARAMETER[0])) {
    $class  = preg_replace($patterns, '', $PARAMETER[0]);

    if (!empty($PARAMETER[1])) {
      $method  = preg_replace($patterns, '', $PARAMETER[1]);
    }
  }
}

//chamando as classes e metodos
if (class_exists($class)) {

  $class_obj = new $class();

  if($class != 'login'){
    if(empty($_SESSION['login'])){
      router('login');
    }
  }

  if (isset($method)) {
    $class_obj->$method();
  } else {
    $class_obj->index();
  }
} else {
  Home::index();
}
