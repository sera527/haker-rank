<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $sum = array_sum($arr);
    print $sum-max($arr);
    print ' ';
    print $sum-min($arr);

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
