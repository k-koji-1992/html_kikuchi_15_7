<html>

<head>
	<meta charset="utf-8">
	<title>アンケート記入フォーム</title>
</head>

<body>
<form action="write.php" method="post">
		<p>お名前と連絡先を記入してください。</p>
		お名前: <input type="text" name="name"><br>
		EMAIL: <input type="text" name="mail"><br>
		<p>好きな本のジャンルを選んでください：</p>
		<input type="radio" id="nonfiction" name="genre" value="ノンフィクション">
		<label for="nonfiction">フィクション</label><br>
		<input type="radio" id="sciencefiction" name="genre" value="SF">
		<label for="sciencefiction">SF</label><br>
		<input type="radio" id="fantasy" name="genre" value="ファンタジー">
		<label for="fantasy">ファンタジー</label><br>
		<input type="radio" id="mystery" name="genre" value="ミステリー">
		<label for="mystery">ミステリー</label><br>
		<p>好きな本を記入してください：</p>
		好きな本のタイトル: <input type="text" name="title"><br>
		<input type="submit" value="送信">
	</form>
	
</body>

</html>