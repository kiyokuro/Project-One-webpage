<!DOCTYPE html>
<html>
<head>
<!-- IE8+に対して「IE=edge」と指定することで、利用できる最も互換性の高い最新のエンジンを使用するよう指示できます
     参考: https://www.modern.ie/en-us/performance/how-to-use-x-ua-compatible -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- ページのタイトルを記述 -->
<title>Project One!</title>

<!-- パフォーマンスのために使用する文字のエンコーディングを記述
     参考: https://developers.google.com/speed/docs/best-practices/rendering#SpecifyCharsetEarly -->
<meta charset="utf-8">

<!-- content属性にページの紹介文を記述 -->
<meta name="description" content="">

<!-- content属性にページの著者情報を記述 -->
<meta name="author" content="">

<!-- モバイル端末への対応、ページをビューポートの幅に合わせてレンダリング（Android, iOS6以降）
     ズームを許可しない設定「user-scalable=no」は加えない -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- スタイルシートはできるだけ早くレンダリングされるため、HTMLドキュメントの上の方に記述
     href属性にスタイルシートファイルのURIを記述 -->
<link rel="stylesheet" type="text/css" href="res/index_layout.css" />

<!-- IE8以下用に2つのスクリプトを記述
     html5shiv.js: IE8以下にHTML5の要素を認識するようにさせる
     respond.js: IE8以下にMedia Queriesの代替え機能を提供 -->
<!--&#91;if lt IE 9&#93;>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<!&#91;endif&#93;-->

<!-- href属性にファビコンファイルのURIを記述 -->
<link rel="shortcut icon" href="">

<!-- コメントアウトしてあるコードは、iOS/Android用のアイコン指定 -->
<!--
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="196x196" href="">
<link rel="apple-touch-icon" sizes="152x152" href="">
-->

<!-- スクリプトでブロッキングを起こさないものはここに記述
     可能であれば「async（文書の読み込みが完了した時点でスクリプトを実行）」を使用
     Example: <script src="" async></script> -->
</head>
<body>

<!-- コンテンツを記述 -->

<!-- スクリプトでブロッキングを起こすものはここに記述
ブロッキングを起こす原因としては、CSSのセレクタ操作（IE）、負荷の高いDOM操作、多数のスクリプトなど -->
<!-- SCRIPTS -->
<!-- 例: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<div id="pagebody">
  <!-- ヘッダ -->
	<div id="header"><h1><a href="index.php"><img src="res/images/title.jpg" alt="Project One!"></a></h1></div>
	<!-- メインメニュー -->
		<ul id="menu">
			<li id="menu01"><a href="xxx.html">ホーム</a></li>
			<li id="menu02"><a href="xxx.html">製品概要</a></li>
			<li id="menu03"><a href="xxx.html">ログイン</a></li>
			<li id="menu04"><a href="messege.php">メッセージ</a></li>
			<li id="menu05"><a href="xxx.html">活動</a></li>
			<li id="menu06"><a href="xxx.html">お問い合わせ</a></li>
		</ul>
</div>

<div id="content1">
	<div id="messege1">
		農業へ新しい角度からの<br>
		「支援」<br>
		固定概念を捨て<br>
		新しいカタチへ
	</div>
</div>

<div id="content2title">
	製品情報
</div>
<div id="content2subtitle">
	フィールドサーバ親機・子機
</div>
<div id="content2">

</div>

<div id="footer">
＊画像は開発中のものです。
</div>
</body>
</html>
