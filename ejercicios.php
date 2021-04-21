<?php 


//EL CONTENIDO DE ESTE CODIGO SON LOS EJERCICIOS PROPUESTOS YA RESUELTOS

//Si lo que realmente quieres es aprender lo ideal es que no consultes esto antes de hacer los ejercicios
//Si lo que realmente quieres es boludear, en ese caso miralo y no te compliques - Fontana


// EJERCICIO 1 - Crear una funcion que permita sumar, restar, dividir y multiplicar numeros (Cabe destacar que pueden haber muchas soluciones a un mismo problema)

//Solucion: 



function Math($n1,$math,$n2)
{
    if($math == "+"){
      $result = $n1 + $n2;
      echo("El resultado de la suma es: ".$result." ");

    }
    else if($math == "-"){
      $result = $n1 - $n2;
      echo("El resultado de la resta es: ".$result." ");
    }
    else if($math == "x"){
      $result = $n1 * $n2;
      echo("El resultado de la multiplicacion es: ".$result." ");
    }
    else if($math == "/"){
      $result = $n1 / $n2;
      echo("El resultado de la division es: ".$result." ");
    }
    else{
        echo("Lo siento, eso no es correcto");
    }

    
}

//PRUEBAS

#Math(10,"+",5);
#Math(10,"-",5);
#Math(10,"x",5);
#Math(10,"/",5);
#Math(10,"jajasaludos",5);



//EJERCICIO 2 - Elaborar una funcion que permita escribir algo por pantalla, ese algo debe ser versátil y pasado por parámetro a la función

function PR($texto){
    echo($texto);
}

//PRUEBAS

#PR("Hola broder");


//EJERCICIO 3 - Elaborar una calculadora de ecuaciones de segundo grado completas, que al recibir el parámetro a,b,c en la función devuelva las raices
//            - Como extra también se le puede añadir el estudio analitico de la funcion.

function Bascara($a,$b,$c){
    //Fórmula: -(b) +- sqrt (b)2-4(a)(c) / 2(a)
    $firstStepPositive = -$b + sqrt($b**2-4*$a*$c);
    $firstStepNegative = -$b - sqrt($b**2-4*$a*$c);

    $secondStepNegative =  $firstStepNegative / 2*$a;
    $secondStepPositive = $firstStepPositive / 2*$a;

    echo(" x1: ".$secondStepNegative);
    echo(" x2: ".$secondStepPositive);
    
    return $secondStepNegative;
    return $secondStepPositive;

    //Estudio Analítico

    #Raices

    $x1 = $secondStepPositive;
    $x2 = $secondStepNegative;

    #Corte con Oy
    $Oy = $c;

    #Concavidad

    if($a > 0){
      $concavidad = "Positiva";
    }else{
      $concavidad = "Negativa";
    }

    #Vértice (Fórmula: -(b) / 2(a) )

    $vertice = -$b / 2*$a;

}

function RepresentacionGrafica(){
  header ('Content-Type: image/png');
  $im = @imagecreatetruecolor(120, 20)
        or die('No se puede Iniciar el nuevo flujo a la imagen GD');
  $color_texto = imagecolorallocate($im, 233, 14, 91);
  imagestring($im, 1, 5, 5,  'A Simple Text String', $color_texto);
  imagepng($im);
  imagedestroy($im);
}

RepresentacionGrafica();



//PRUEBAS
//Estas pruebas se pueden verificar en una calculadora, el valor de las 2 raices coinciden en absolutamente todos los casos. 
// EN CASO DE QUE LA INCOGNITA NO PERTENEZCA A LOS REALES LA CALCULADORA DEVUELVE "NAN"

    #Bascara(-1,2,4);
    #Bascara(2,5,9);
    #Bascara(-7,3,7);





































//EJERCICIO 4 - Elaborar una calculadora de cuadrado de binomio (Siempre utlizando funciones y los digitos son pasados por parametro)

## PROTOTIPO ##

/*function CuadradoDeBinomio($a,$b){
    //Fórmula: (a+b)2 = a2 + 2ab + b2
    $a2 = $a**2;
    $twoab = 2*$a*$b;
    $b2 = $b**2;
    $finalResult = $a2+$twoab+$b2;

    echo("El cuadrado de binomio resuelto es:". $finalResult);
}

CuadradoDeBinomio(2,5);
*/
?>