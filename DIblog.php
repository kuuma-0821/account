<?php
session_start();


var_dump($_SESSION);
if($_SESSION['authority'] === 0){
    echo '3';
}





?>



<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="UTF-8">
    <title>DIブログ</title>
    <link rel="stylesheet" type="text/css" href="DIブログ .css">
 </head>

<body>
    <div class="logo_img">
    <img src="diblog_logo.jpg">
    </div>
    
<header>
    <div class="logo">
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <a href="login_check_regist.php"><li>アカウント登録</li></a>
        <a href="login_check_list.php"><li>アカウント一覧</li></a>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
    
    
    
</header>
    
<main>
 <div class="main-container">
    <div class="left">
        <h1>プログラミングに役立つ情報</h1>
        <h5>2017年1月15日</h5>
        <img src="bookstore.jpg">
        <h3>D.I.BlogはD.I.Worksが提供する演習課題です</h3>
        <h3>記事中身</h3>
        <div class="gray_box">
            <div class="box_pc2">
            <img src="pic1.jpg">
            <p>ドメイン取得方法</p>
            </div>
            <div class="box_pc2">
            <img src="pic2.jpg">
            <p> 快適な職場環境</p>
            </div>
            <div class="box_pc2">
            <img src="pic3.jpg">
            <p>Linuxの基礎</p>
            </div>
            <div class="box_pc2">
            <img src="pic4.jpg">
            <p>マーケティング入門</p>
            </div>
            <br>
            <div class="box_pc3">
            <img src="pic5.jpg">
            <p>アクティブラーニング</p>
            </div>
            <div class="box_pc3">
            <img src="pic6.jpg">
            <p>CSSの効率的な勉強方法</p>
            </div>
            <div class="box_pc3">
            <img src="pic7.jpg">
            <p>リーダブルコードとは</p>
            </div>
            <div class="box_pc3">
            <img src="pic8.jpg">
            <p>HTML5の可能性</p>
            </div>
        </div>
      </div>
    <div class="right">
        <br>
        <h2>人気の記事</h2>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTops</li>
            <li>HTMLの基礎</li>
        </ul>
        <h2>オススメリンク</h2>
        <ul>
            <li>ディーアイワークス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>
 </div>
</main>

<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>
    
</body>
</html>