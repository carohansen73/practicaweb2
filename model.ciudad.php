<?php
class CiudadModel {

    private $db;
   

    function __construct() {
         // 1. Abro la conexión
         $this->db= $this->connect();
    }

    public function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_hospital;charset=utf8', 'root', '');
        return $db;
    }    

    function getRiesgo(){
        $query = $this->db->prepare('SELECT * FROM ciudad WHERE zona_riesgo = 1');
        $query->execute();
        $ciudadRiesgo = $query->fetchAll(PDO::FETCH_OBJ);
        return $ciudadRiesgo;
    }
    function getAll(){
        $query = $this->db->prepare('SELECT * FROM ciudad');
        $query->execute();
        $ciudad = $query->fetchAll(PDO::FETCH_OBJ);
        return $ciudad;
    }
    function post($nombre, $zonariesgo){

        //2-Enviar la consulta(los datos), lindeo los parametros (?,?,?)
        $query = $this->db->prepare('INSERT INTO ciudad (nombre_ciudad, zona_riesgo) VALUES (?,?)');
        $query->execute([$nombre, $zonariesgo]);

        //3-no necesito obtener respuesta xq estoy insertando
        return $this->db->lastInsertId();

    }
}