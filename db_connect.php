<?php
    #Logfile (Genera un archivo de registro de los eventos ocurridos durante la ejecución del programa.)
    global $logFile;
    $logFile = fopen("log.txt", 'a') or die(" Ha ocurrido un error inexplicable al intentar crear el archivo log.txt");
    fwrite($logFile, "\n".date("d/m/Y H:i:s")." Se ha ejecutado el programa") or die(" Error escribiendo en el archivo");



//Llamado a las funciones

#Database_Connection("localhost","root","","tienda");
#Consulta("SELECT * FROM FABRICANTES",0,"Nombre");





//FUNCION QUE CONECTA A LA BASE DE DATOS POR MEDIO DE PARAMETROS (Versatil)

//Function - 1
function Database_Connection($server, $user, $pass, $db_name ){



    $conexion = mysqli_connect($server, $user, $pass,$db_name) 
        or die("Casi conecta");

    return $conexion;
} 

//FUNCION QUE REALIZA UNA CONSULTA A LA BASE DE DATOS
//El parametro consulta es un un string con la consulta en lenguaje Mysql
//El parametro fila es la fila de datos en la tabla a la cual se le quiere extraer información
//El parametro dato es el dato que se quiere extraer

//Ejemplo de uso de esta funcion: Consulta("SELECT * FROM FABRICANTES","0", Nombre)
//Utilizando la base de datos de la tienda de informatica usada el año pasado el valor que devolvería esta funcion es: Kingston

//Function - 2

function Consulta($consulta, $fila, $dato){
    $conexion = Database_Connection("localhost","root","","tienda");

    $result = mysqli_query($conexion, $consulta);
    mysqli_data_seek ($result, $fila);
    $extraido= mysqli_fetch_array($result);
    echo($extraido[$dato]);
    $logFile = fopen("log.txt", 'a') or die(" Ha ocurrido un error inexplicable al intentar crear el archivo log.txt");
    fwrite($logFile, "\n".date("d/m/Y H:i:s")." Se ha echo una consulta a la base de datos: ". $consulta." Fila: ".$fila. " Dato: ".$dato) or die(" Error escribiendo en el archivo");
    
}



?>