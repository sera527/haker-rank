<?php

// Complete the staircase function below.
function staircase($n) {
    $step = 1;
    $output = '';
    while ($step <= $n) {
        for ($i=0;$i<$n-$step;$i++) {
            $output .= ' ';
        }
        for ($i=0;$i<$step;$i++) {
            $output .= '#';
        }
        $output .= PHP_EOL;
        ++$step;
    }
    print $output;

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
