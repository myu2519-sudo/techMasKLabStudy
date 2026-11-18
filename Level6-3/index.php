<?php

$fp = fopen("member.csv", "r");

while ($line = fgetcsv($fp)) {

    for ($c = 0; $c < count($line); $c++) {
        echo $line[$c] . "<br />";
    }
}

fclose($fp);

?>