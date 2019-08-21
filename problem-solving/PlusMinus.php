<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $count = count($arr);
    $plus = 0;
    $minus = 0;
    array_walk($arr, function($item) use (&$plus, &$minus) {
        if ($item > 0) {
            ++$plus;
        } elseif ($item < 0) {
            ++$minus;
        }
    });

    print number_format($plus/$count, 6)."\n".number_format($minus/$count, 6)."\n".number_format(($count-$plus-$minus)/$count, 6);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
