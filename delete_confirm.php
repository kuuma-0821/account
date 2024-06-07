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


//SQL準備(今回はセキュリティを強めるためにプレースホルダーを作る)
//プレースホルダ―を使うためSQL文はprepareメソッドを使っていく
    $stmt = $dbh->prepare('SELECT * FROM account_registration Where id = :id');
    

//プレースホルダ―を設定するためにbindValueメソッドを使っていく
    $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);


//SQL実行するためにexecuteメソッドをつかう
    $stmt->execute();


//結果を取得していく。今回は一つの結果でいいのでfetchを使っていく
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

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

    <h1>アカウント削除確認画面</h1>
    
    
    <p>本当に削除してよろしいですか？</p>
    
    <a href="delete.php?id=<?php echo $result['id'] ?>">前に戻る</a>
    
    <form action="delete_complete.php">
        <input type="submit" class="button" value="削除する">
    </form>
    
    
    
</body>    
        
</html>