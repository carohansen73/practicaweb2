<?php

/*
creo la clase CentroModel q abarca todas las funciones

creo la funcion __construc, donde  Abro la conexion cn la BD (1)

funcion getCentros(id_ciudad =null){
    //2-Enviar la consulta (preparar y ejecutar)
        WHERE id ? -- en ejecutar mando el id lindeado ([id])
    //3-procesar la respuesta para generar html (centros=fetchAll)
    //4- cerrar la conexion (PDO lo hace solo)
    retorno los centros
}

func agregar centro(recibo datos){
    //2-Enviar la consulta (preparar y ejecutar) (INSERT INTO)
    //3-procesar la respuesta para generar html (centros=fetchAll)
    retorno id
}

func eliminar centro(id){
    //2-Enviar la consulta (preparar y ejecutar)
    (DELETE FROM tabla WHERE id)
}

*/
class CentroModel {

    private $db;
   

    function __construct() {
         // 1. Abro la conexión
         $this->db= $this->connect();
    }

    public function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_hospital;charset=utf8', 'root', '');
        return $db;
    }    

    function get(){
        //2-Enviar la consulta (preparar y ejecutar)
        $query = $this->db->prepare('SELECT * FROM centro');
        $query->execute();

        //3-procesar la respuesta para generar html
        $centros = $query->fetchAll(PDO::FETCH_OBJ);
        //4- cerrar la conexion (PDO lo hace solo)
        return $centros;
    }
}