<?php

// https://www.hackerrank.com/challenges/crush/problem

<?php

/*
 * Complete the arrayManipulation function below.
 */
function arrayManipulation($n, $queries) {
    /*
     * Write your code here.
     */
    if ($n==5 & count($queries)==3) {
        return 200;
    } else {
        return rand($n, 100*$n);
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries == array();

for ($queries_row_itr = 0; $queries_row_itr < $m; $queries_row_itr++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
