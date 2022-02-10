<?php
/*
2.-Dado una cadena de texto imprimir la primera letra que se repite no distinguiendo
entre mayusculas y minisculas. No utilizar strpos, strstr, substr
    a) Ejemplo: "zapato" la primera ketra que mas se repite es a.
*/


 $palabra = 'dOnkikon';
 $limite = strlen($palabra);
 $letraRepetida = false;
 $letra = array();
 $i = 0;
 $k = 0;

while(!$letraRepetida && $i <  $limite ){
    $k = $i + 1;
    while($k < $limite){
        
        if(strcasecmp($palabra[$i], $palabra[$k]) ==0){
            $letraRepetida == true;
            $letra == $palabra[$i];
            echo 'Letra repetida = '.  $palabra[$i].'<br>';
            break;
        }else{
            $k++;
        }
    }
    $i++;
}

// if($letraRepetida){
//     echo 'Letra repetida = '. $letra;
// }else{
//     echo 'No se repite ninguna   ';
// }




?>