<?php


//前のページからidを取ってくる
    $id = $_GET['id'];


//データベースに接続する関数作成
//引数：なし
//返り値：接続結果を返す
    function dbConnect(){
        try {
        $dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","",[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);

        }   catch(PDOException $e) {
            echo '接続失敗'. $e->getMessage();
            exit();
        };
    
        return $dbh;
    
    }


//データベース接続用関数実行
//dbhは接続結果
    $dbh = dbConnect();


//SQLの準備(今回はセキュリティを強めるためにプレースホルダーを作る)
//プレースホルダ―を使うためSQL文はprepareメソッドを使っていく
    $stmt = $dbh->prepare('DELETE FROM account_registration Where id = :id');
    

//プレースホルダ―を設定するためにbindValueメソッドを使っていく
    $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);


//SQL実行するためにexecuteメソッドをつかう
    $stmt->execute();


?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント削除更新</title>
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
        <li>アカウント一覧</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
</header>
   
    <h1>アカウント削除完了画面</h1>
    
    <p>削除完了しました</p>

    <div class="botan">
        <input type="submit" onclick="location.href='http://localhost/account/DIブログ .html'" value="TOPページへ戻る" id="top" name="submit1">
    </div>
    
</body>    
        
</html>