<?php

$score = [10, 20, 45, 60, 75, 89];

//配列の要素数だけ繰り返し処理する
foreach ($score as $value) {

    // ５０以上か判定
    if ($value >= 50) {
        print $value . "は50以上です。<br>";
    } else {
        print $value . "は49以下です。<br>";
    }

}

?>