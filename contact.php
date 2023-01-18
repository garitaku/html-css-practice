<!DOCTYPE html>
<!-- 日本語のサイトやで -->
<html lang="ja">

<!-- ページ全体の情報 -->

<head>
    <!-- 文字コードの設定、UTF-8が標準 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- ビューポートの設定、画面サイズが異なるデバイスで表示する際に必要 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ - FITTED</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!-- ぐーぐるふぉんと -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,900&display=swap" rel="stylesheet">
    <!-- ここまでぐーぐるフォント -->
    <link rel="stylesheet" href="css/style.css" class="rel">
</head>

<!-- 実際にブラウザに表示される部分 -->

<body>
    <header>
        <div class="container">
            <a href="index.html">FITTED</a>
            <nav>
                <ul>
                    <li><a href="index.html">トップへ</a></li>
                    <li><a href="about.html">サイトについて</a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="contents">
        <div class="container">
            <article>
                <h1>お問い合わせ</h1>
                <p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。記事に関するご質問などもお気軽にお寄せください。</p>
                <form action="action.php" method="post">
                    <p>
                        <label for="name">名前:</label>
                        <input type="text" name="name" id="name">
                    </p>
                    <p>
                        <label for="email">メールアドレス:</label>
                        <input type="email" name="email" id="email">
                    </p>
                    <p>
                        <label for="comment">コメント:</label>
                        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
                    </p>
                    <p><input type="submit" value="送信"></p>
                </form>
            </article>
        </div>
    </div>
    <footer>© FITTED</footer>

</body>

</html>