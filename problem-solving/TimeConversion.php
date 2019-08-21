<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    $hour = $s[0].$s[1];
    if ($s[8] === 'P') {
        if ($hour != 12) {
            $hour += 12;
        }
    } else {
        if ($hour == 12) {
            $hour = '00';
        }
    }

    return $hour.$s[2].$s[3].$s[4].$s[5].$s[6].$s[7];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
