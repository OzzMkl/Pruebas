<?php
/*
3.-Imprimir los valores del arreglo [1,2,3,4,5,6,7,8,9] usando recursividad.
No utilizar while, do while, for, foreach
*/


function imprime($cantidad) {
    
    $mi_array = array(1,2,3,4,5,6,7,8,9);
    echo $mi_array[$cantidad].'<br />';
   
        if( $cantidad<count($mi_array) ){
        imprime($cantidad+1);
        }
   
   }
   
imprime(0);
?>