<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

// O(1): Execution time does not change with input size
// O(1) - Constant Time
function getFirstElement(array $arr)
{
    return $arr[0];
}

// O(n): Time grows linearly with input
// O(n) - Linear Time
function printAllElements(array $arr)
{
    foreach ($arr as $value) {
        echo $value . PHP_EOL;
    }
}

// O(n²): Time grows exponentially (nested loops)
// O(n²) - Quadratic Time
function printPairs(array $arr)
{
    foreach ($arr as $i) {
        foreach ($arr as $j) {
            echo $i . ',' . $j . PHP_EOL;
        }
    }
}
