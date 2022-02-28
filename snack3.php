<?php

/* 
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/



$numbers = [];


while(count($numbers) !== 15) {
    $rand_num = rand(1, 50);
    if(!in_array($rand_num, $numbers)) {
        $numbers[] = $rand_num;
    }
}

var_dump($numbers);










?>