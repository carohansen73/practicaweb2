<?php
/*
es el  recibe el llamado de las funciones del router 
(cada accion a la que desea entrar el usuario el router la dirige al controller correspondiente)

funcion filtrarCentro (recibe ID de ciudad){
    llamo al modelo, a la funcion get Centros , le paso el id_ciudad
    mando los centros a la vista, funcion showCentros.
}

funcion ocupacion (){
    llamo model.centro, funcion getCentros
    paso los centros a view. func showOcupacion
}
*/
include_once 'model.centro.php';
include_once 'view.php';

class CentroController {

    private $model;
    private $view;
    /*private $authHelper;*/

    function __construct() {
        $this->model = new CentroModel();
        $this->view = new View();
       /* $this->authHelper = new AuthHelper();

        // verifico que el usuario esté logueado siempre
        $this->authHelper->checkLogged(*/
    }

    function getCentros(){
        $centros = $this->model-> get();
        
        $this->view-> showCentrosByTipo($centros);
    }
}