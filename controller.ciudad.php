<?php
/*
es el  recibe el llamado de las funciones del router 
(cada accion a la que desea entrar el usuario,corresp a ciudad el router la dirige al controller correspondiente)
*/

include_once 'model.ciudad.php';
include_once 'view.php';


class CiudadController {

    private $model;
    private $view;
    /*private $authHelper;*/

    function __construct() {
        $this->model = new CiudadModel();
        $this->view = new View();
       /* $this->authHelper = new AuthHelper();

        // verifico que el usuario esté logueado siempre
        $this->authHelper->checkLogged();*/
    }
    /*function obtenerCiudadRiesgo(){
        modelCiudad->obtenerRiesgo()
    }*/

    function getRiesgo(){
        $ciudadRiesgo=$this->model->getRiesgo();
        $cantidad= count($ciudadRiesgo);
        $this->view->showRiesgo($ciudadRiesgo, $cantidad);
    }
/*AGREGAR CIUDAD. VERIF Q NO EXISTA CIUDAD=*/
    function form(){
        $ciudad=$this->model->getAll();
        $this->view->showForm($ciudad);

        //header("Location: " . BASE_URL . "administrador");
    }

    function post(){
        $nombre = $_POST['nombre'];
        $zonariesgo = $_POST['zonariesgo'];
        
        //chequeo q la ciudad no exista
        $ciudades = $this->model-> getAll();
        foreach  ($ciudades as $ciudad){
            if($ciudad->nombre_ciudad == $nombre){
            
                echo"esa ciudad ya existe";
                header("Location: " . BASE_URL . "form"); 
                die();
            }
        }
        //cheueo campos vacios
        if(empty($nombre) || empty($zonariesgo)){
            $ciudad = $this->model-> getAll();
            $this->view->showForm($ciudad, "Faltan datos obligatorios");
            die();
        }
         
        //hago el post
            $id = $this->model->post($nombre, $zonariesgo);
            // redirigimos al  la tabla
           header("Location: " . BASE_URL . "form"); 

        //$this->view->showRiesgo($ciudadRiesgo, $cantidad);
    }
}