<?php
/*
1.- Recorrer los numeros del 1 al 100 e imprimir
    a) si es divisible por 3 escribir fizz
    b) Si es divisible por 2 buzz
*/

for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        if($i % 3 == 0){
            echo $i .' = buzz & fizz' .'<br />';
            continue;
        }
        echo $i .' = buzz' .'<br />';
    }elseif($i % 3 == 0){
        echo $i .' = fizz'. '<br />';
    }
 }
 ?>