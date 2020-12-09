<?php

/*include_once 'controller.admin.php';
include_once 'controller.auth.php';*/
include_once 'controller.centro.php';
include_once 'controller.ciudad.php';


// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'riesgo'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);




// determina que camino seguir según la acción
switch ($params[0]) {
    /*case 'centros':
       llamo a la clase del controller.centro, a la funcion q muestar los centros, paso ID recibido x parametro
    break;
     case 'ocupacion':
        llamo a la clase del controller.centro. funcion ocupacion
    break;
    case 'iniciar':
       llamo a la clase del controller.admin, func login
    break;
    case 'ciudadDeRiesgo'
        controller->ciudad->ciudadDeRiesgo
    case'riesgoOcupacionMayor70':
        controller->listarOcupacion70
*/
    case 'riesgo':
        $controller = new CiudadController();
        $controller->getRiesgo();
    break;
    case 'tipodecentro':
        $controller = new CentroController();
        $controller->getCentros();
    break;
    case 'form':
        $controller = new CiudadController();
        $controller->form();
    break;
    case 'postciudad':
        $controller = new CiudadController();
        $controller->post();
    break;
        

    default:
    header("HTTP/1.0 404 Not Found");
    echo('404 Page not found');
    break;
}
    
    /*redirigo al controlador correspondiente segun la accion
    (auth, admin, centro, ciudad)

*/