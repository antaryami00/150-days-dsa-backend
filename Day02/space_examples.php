<?php

// O(1) Space
function sum($a, $b) {
    return $a + $b;
}

// O(n) Space
function copyArray(array $arr) {
    $newArr = [];
    foreach ($arr as $value) {
        $newArr[] = $value;
    }
    return $newArr;
}



// highest order of n 