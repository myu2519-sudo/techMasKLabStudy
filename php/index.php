<?php

//１．人物データの登録（配列）
$person1 = [
    "name" => "一郎",
    "age" => 25,
    "hobby" => "サッカー"
];

$person2 = [
    "name" => "二郎",
    "age" => 30,
    "hobby" => "読書"
];

//２．人物リストの作成
$result = array_merge([$person1],[$person2]);

//３．並び替え（年齢順）
usort($result,function ($a,$b){
    return $a["age"] <=> $b["age"];
});

//４．出力
echo "<h3>簡易プロフィール帳</h3>";

foreach ($result as $person) {
    printf(
        "名前：%s （%d歳） - 趣味：%s<br>",
        $person["name"],
        $person["age"],
        $person["hobby"]
    );
}

//５．平均年齢の計算
$ages = array_column($result,"age");
$averageAge =array_sum($ages) / count($ages);

echo "<br>";
echo "平均年齢：" . $averageAge . "歳";
?>