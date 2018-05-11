<?php
// https://www.hackerrank.com/challenges/strong-password/problem

$handle = fopen ("php://stdin", "r");
function minimumNumber($n, $password) {
    return 6-$n;
}

fscanf($handle, "%i",$n);
fscanf($handle, "%s",$password);
$answer = minimumNumber($n, $password);
echo $answer . "\n";
