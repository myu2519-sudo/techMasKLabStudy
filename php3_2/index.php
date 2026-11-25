<?php

/**
 * 与えられた配列の中から、2回だけ出現する値を見つけて返す関数
 *
 * @param array $nums - 整数が格納された配列
 * @return array - 2回出現した値だけを含む配列を返す
 */
function singleNumber($nums)
{
    //出現回数を取得
    $counts = array_count_values($nums);

    $result = [];

    // 出現回数が2の値を抽出
    foreach ($counts as $num => $count) {
        if ($count === 2) {
            $result[] = $num;
        }
    }
    // 昇順ソート
    sort($result);
    return $result;
}

$array = [1, 2, 3, 1, 4, 4, 6, 5, 5, 5, 5]; //元のデータ

$result = singleNumber($array); //関数を呼び出し

// 結果を出力
foreach ($result as $value) {
    echo $value . PHP_EOL;
}