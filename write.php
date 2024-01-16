<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$genre = $_POST["genre"];
$title = $_POST["title"];

 // 文字列の作成
 $str = date("Y-m-d H:i:s") . "," . $name . "," . $mail . "," . $genre . "," . $title;

 // ファイル書き込み
 $file = fopen("data/data.txt", "a");
 if ($file) {
     fwrite($file, $str . "\n");
     fclose($file);
 } else {
     // ファイルオープンに失敗した場合のエラーメッセージ
     echo "ファイルの書き込みに失敗しました。";
 }
?>


<html>

<head>
    <meta charset="utf-8">
    <title>アンケート記入完了</title>
</head>

<body>

    <h1>アンケートへの記入が完了しました。</h1>
    <h2>アンケート結果はこちら</h2>

    <ul>
        <li><a href="post.php">戻る</a></li>
        <li><a href="read.php">結果を見る</a></li>
    </ul>
</body>

</html>