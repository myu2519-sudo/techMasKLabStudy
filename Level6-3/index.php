<?php
// try-catchでエラー処理を行う
try{

    // フォームから送信されたか確認
    if(isset($_POST["name"])){

        // 入力された名前を取得
        $name = $_POST["name"];

        // 空欄だった場合
        if($name == ""){
            throw new Exception("システムエラー");
        }

        // Cookieに名前を保存
        setcookie("user", $name, time() + 10);  // 10秒後の入力値が削除
    }

}catch(Exception $e){ //例外をcatchしエラーメッセージを表示します。
    echo $e->getMessage();
}

if(isset($_COOKIE["user"])){
     $var = $_COOKIE["user"];
      echo "クッキーの値「" . $var . "」";
}
?>

<form method="post">

    <input type="text" name="name">

    <input type="submit" value="送信">

</form>

