<?php

// Complete the redJohn function below.
function redJohn($n) {
    $combinationsCount = 0;
    $maxFours = intval($n/4);
    for($i=0;$i<=$maxFours;$i++) {
        $onesCount = $n - (4 * $i);
        $combinationsCount += gmp_strval(gmp_fact($onesCount + $i))/
        (gmp_strval(gmp_fact($onesCount)) * gmp_strval(gmp_fact($i)));
    }
    $result = 0;
    if ($combinationsCount > 1) {
        for ($i=2;$i<=$combinationsCount;$i++) {
            $r = gmp_prob_prime($i);
            if ($r > 0) {
                $result++;
            }
        }
    }
    
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = redJohn($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
