<?php

//前のページからidを取ってくる
    $id = $_GET['id'];
    $idint = intval($id);
    $genderint = intval($_POST['seibetu']);
    $yuubinint = intval($_POST['yuubinn']);
    $akaint = intval($_POST['aka']);
    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
        $pass_after = password_hash($pass,PASSWORD_DEFAULT);
    }


    var_dump($idint);
    var_dump($_POST['seibetu']);
    $delete_flag = 1;



    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","",);


    $stmt = $pdo->prepare("UPDATE account_registration SET
                            family_name = :namesei, last_name = :namemei, family_name_kana = :kanasei, last_name_kana = :kanamei, mail = :email, password = :pass, gender = :seibetu, postal_code = :yuubinn,
                            prefecture = :kenn, address_1 = :juusyosiku, address_2 = :juusyobann, authority = :aka, delete_flag = :delete_flag
                            WHERE id = :id");
    
    $stmt->bindParam(':id', $idint, PDO::PARAM_INT);
    $stmt->bindParam(':namesei', $_POST['namesei'], PDO::PARAM_STR);
    $stmt->bindParam(':namemei', $_POST['namemei'], PDO::PARAM_STR);
    $stmt->bindParam(':kanasei', $_POST['kanasei'], PDO::PARAM_STR);
    $stmt->bindParam(':kanamei', $_POST['kanamei'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass_after, PDO::PARAM_STR);
    $stmt->bindParam(':seibetu', $genderint, PDO::PARAM_INT);
    $stmt->bindParam(':yuubinn', $_POST['yuubinn'], PDO::PARAM_STR);
    $stmt->bindParam(':kenn', $_POST['kenn'], PDO::PARAM_STR);
    $stmt->bindParam(':juusyosiku', $_POST['juusyosiku'], PDO::PARAM_STR);
    $stmt->bindParam(':juusyobann', $_POST['juusyobann'], PDO::PARAM_STR);
    $stmt->bindParam(':aka', $akaint, PDO::PARAM_INT);
    $stmt->bindParam(':delete_flag', $delete_flag, PDO::PARAM_INT);
    //SQL実行するためにexecuteメソッドをつかう
    $res = $stmt->execute();
   
//SQLの準備(今回はセキュリティを強めるためにプレースホルダーを作る)
//プレースホルダ―を使うためSQL文はprepareメソッドを使っていく

    

//プレースホルダ―を設定するためにbindValueメソッドを使っていく
   

?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
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
    
    <h1>アカウント更新完了画面</h1>
    
    
    <p>更新完了しました</p>
    
    
    
    <div class="botan">
        <input type="submit" onclick="location.href='http://localhost/account/DIブログ .html'" value="TOPページへ戻る" id="top" name="submit1">
    </div>
    
    
    
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>