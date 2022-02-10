<?php
/**
 * 
 * 4.-Dado una matriz cualquiera calcular su transpuesta
 * 
 */

function transpose($array) {
    $transposed_array = array();
    if ($array) {
        foreach ($array as $row_key => $row) {
            foreach ($row as $column_key => $element) {
                $transposed_array[$column_key][$row_key] = $element;
                    }}
    return $transposed_array;
        }
    }
 
$mi_array = array(
    'a' => array(
       1 => '1',
       2 => '5',
       3 => '8',
       4 => '6'  
    ),
    'b' => array(
       1 => '4',
       2 => '8',
       3 => '-5',
       4 => '4' 
    )
);

var_dump(transpose($mi_array));
?>