<html>

<head>
    <meta charset="utf-8">
    <title>アンケート結果表示</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>アンケート結果</h2>

    <table>
        <tr>
            <th>回答時間</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>好きな本のジャンル</th>
            <th>好きな本</th>
        </tr>

        <?php
        $file = fopen("data/data.txt", "r"); // ファイル読み込み

        while ($str = fgets($file)) {
            // 行を分割
            list($time, $name, $mail, $genre, $title) = explode(",", trim($str));

            echo "<tr>";
            echo "<td>" . htmlspecialchars($time) . "</td>";
            echo "<td>" . htmlspecialchars($name) . "</td>";
            echo "<td>" . htmlspecialchars($mail) . "</td>";
            echo "<td>" . htmlspecialchars($genre) . "</td>";
            echo "<td>" . htmlspecialchars($title) . "</td>";
            echo "</tr>";
        }

        fclose($file);
        ?>
    </table>

    <ul>
        <li><a href="post.php">アンケートの記入に戻る</a></li>
    </ul>
</body>

</html>