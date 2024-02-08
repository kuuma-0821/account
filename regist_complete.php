<?php

    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
        $pass_after = password_hash($pass,PASSWORD_DEFAULT);
    }

mb_internal_encoding("utf8");

$pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into account_registration(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)values
('".$_POST['namesei']."','".$_POST['namemei']."','".$_POST['kanasei']."','".$_POST['kanamei']."','".$_POST['email1']."','".$pass_after."','".$_POST['seibetu']."','".$_POST['yuubinn']."','".$_POST['kenn']."','".$_POST['juusyosiku']."','".$_POST['juusyobann']."','".$_POST['aka']."');");

?>

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
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
        <li>アカウント登録</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
</header>
   
    <h1>アカウント登録完了画面</h1>
    <?php echo $_POST['seibetu']; ?>
    <h2>登録完了しました</h2>
    
    
    
    
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>