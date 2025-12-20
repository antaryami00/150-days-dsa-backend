<?php

// Find max
function findMax(array $arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

// Reverse array
function reverseArray(array $arr)
{
    $reversed = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $reversed[] = $arr[$i];
    }
    return $reversed;
}

// Count occurrences
function countOccurrences(array $arr, $target)
{
    $count = 0;
    foreach ($arr as $value) {
        if ($value === $target) {
            $count++;
        }
    }
    return $count;
}
