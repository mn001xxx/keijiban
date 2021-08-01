<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>

<form method="post" action="insert.php">
</form>

<header>
    <div class="logo"><image src="4eachblog_logo.jpg"></div class>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
</header>

<main>

<div class="main">
    <div class="right">

     <p>人気の記事</p>
        <ul>
         <li>PHPおすすめ本</li>
          <li>PHP Myadminの使い方</li>
          <li>いま人気のエディタtop5</li>
         <li>HTMLの基礎</li>
         </ul>

    　<p>オススメリンク</p>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
          <li>Bracketsのダウンロード</li>
        </ul>

    　<p>カテゴリ</p>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>

    </div>



    <div class="left"></div>

        <h1>プログラミングに役立つ掲示板</h1>

        <h2>入力フォーム</h2>
        <form method="post",action="4each_keijiban">
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size=35 name="handlename">
            </div>
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size=35 name="title">
            </div>
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rowa="7" name="comments">
            </div>

            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
        </form>

</div>


<fotter>
    copyright © internous │ 4each blog the which provides A to Z about programming.
</footer>



</main>

</body>