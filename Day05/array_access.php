<?php

$arr = [10, 20, 30, 40];

// O(1)
echo $arr[2];

// O(n)
foreach ($arr as $value) {
    echo $value;
}
