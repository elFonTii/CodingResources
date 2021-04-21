<?php 
include ("db_connect.php");

Database_Connection("localhost","root","","tienda");

CreadorDeTablas("prueba1");

function CreadorDeTablas($tableName){
    $conexion = Database_Connection("localhost","root","","tienda");
    
    $createTable = "CREATE TABLE";
    $result = mysqli_query($conexion, $createTable." ".$tableName.Params(" (id", "INT NOT NULL AUTO_INCREMENT, PRIMARY_KEY(id));"));

    $logFile = fopen("log.txt", 'a') or die(" Ha ocurrido un error inexplicable al intentar crear el archivo log.txt");
    fwrite($logFile, "\n".date("d/m/Y H:i:s")." Se ha echo una consulta a la base de datos:".$createTable." ".$tableName.Params(" (id", "INT NOT NULL AUTO_INCREMENT, PRIMARY_KEY(id));")) or die(" Error escribiendo en el archivo");


}

function Params($param, $typeOfParam){
    $conexion = Database_Connection("localhost","root","","tienda");
    $param = mysqli_query($conexion, $typeOfParam);

}


?>