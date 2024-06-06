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
    ]);

    }   catch(PDOException $e) {
    echo '接続失敗'. $e->getMessage();
    exit();
    };
    
    return $dbh;
    
}

$dbh dbConnect();

//DBに接続する関数を実行
//$DBdataにDBのデータが格納されている状態

$DBdata = getALLData();


$id = $_GET['id'];


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
    
    <h1>アカウント削除画面</h1>
    
    
</body>    
        
</html>