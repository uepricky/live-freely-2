<head>

<!-- IE8+に対して「IE=edge」と指定することで、
     利用できる最も互換性の高い最新のエンジンを使用するよう指示できます。
     参考: https://www.modern.ie/en-us/performance/how-to-use-x-ua-compatible -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- パフォーマンスのために使用する文字のエンコーディングを記述。
     最初のオプションとしてHTTPヘッダで指定し、
     HTTPヘッダとmetaタグでの指定が同じであることを確認。
     参考: https://developers.google.com/speed/docs/best-practices/rendering#SpecifyCharsetEarly -->
<meta charset="utf-8">

<!-- ページのタイトルを記述 -->
<title>LiveFreely</title>

<!-- Scontent属性にページの紹介文を記述 -->
<meta name="description" content="">

<!-- content属性にページの著者情報を記述 -->
<meta name="author" content="">

<!-- モバイル端末への対応、
     ページをビューポートの幅に合わせてレンダリング（Android, iOS6以降）
     ズームを許可しない設定「user-scalable=no」は加えない -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- スタイルシートはできるだけ早くレンダリングされるため、
     HTMLドキュメントの上の方に記述
     href属性にスタイルシートファイルのURIを記述 -->
<link rel="stylesheet" href="public_html/views/style.css">

<!-- IE8以下用に2つのスクリプトを記述
     html5shiv.js: IE8以下にHTML5の要素を認識するようにさせる
     respond.js: IE8以下にMedia Queriesの代替え機能を提供 -->
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

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
     例: <script src="" async></script> -->
</head>
