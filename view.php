<?php
/*
incluyo smarty
require_once('libs/Smarty.class.php');

funcion showCentros(centros){
    instancio smarty
    asigno variable centros
    renderizo(display, llamo al tpl)
}

func showOcupacion{
    instancio smarty
    asigno variable centros
    renderizo(display, llamo al tpl) (en tpl muestro a centros->ocupacion)
}

*/
require_once('libs/Smarty.class.php');

class View{

    function showRiesgo($ciudadRiesgo, $cantidad){
        echo "<ul>";
        foreach ($ciudadRiesgo as $ciudad){
           echo "<li>' $ciudad->nombre_ciudad '</li>";
           
        }
        echo "<ul>";
        
        echo "$cantidad";
    }

    function showCentrosByTipo($centros){

        echo "<h1>Hospital</h1>";
        echo "<ul>";
        foreach ($centros as $centro){
            if($centro->tipo == "hospital"){
               echo" <li>' $centro->nombre_centro '</li>"; 
            }
        }
        echo "</ul>";

        echo "<h1>Clinica</h1>";
        echo "<ul>";
        foreach ($centros as $centro){
            if($centro->tipo == "clinica"){
                echo" <li>' $centro->nombre_centro '</li>"; 
            }
        }
        echo "</ul>";

        echo "<h1>Sanatorio</h1>";
        echo "<ul>";
        foreach ($centros as $centro){
            if($centro->tipo == "sanatorio"){
                echo" <li>' $centro->nombre_centro '</li>"; 
            }
        }
        echo "</ul>";
    }

    function showForm($ciudades, $error=null){
        $smarty=new smarty();
        $smarty->assign('ciudades', $ciudades);
        $smarty->assign('error', $error);
        $smarty->display('templates/form_ciudad.tpl');
    }

}