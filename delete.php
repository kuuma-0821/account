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
    
    <h1>アカウント削除画面</h1>
    <p><?php echo $result['id']?></p>
    <p>名前（姓）　　　　　<?php echo $result['family_name'] ?></p>
    <p>名前（名）　　　　　<?php echo $result['last_name'] ?></p>
    <p>カナ（姓）　　　　　<?php echo $result['family_name_kana'] ?></p>
    <p>カナ（名）　　　　　<?php echo $result['family_name_kana'] ?></p>
    <p>メールアドレス　　　<?php echo $result['mail'] ?></p>
    <p>パスワード　　　　　<?php echo '●●●●●●' ?></p>
    <p>性別　　　　　　　　<?php if($result['gender'] === 0){ echo "男";}else{ echo "女";} ?></p>
    <p>郵便番号　　　　　　<?php echo $result['postal_code'] ?></p>
    <p>住所（都道府県）　　<?php echo $result['prefecture'] ?></p>
    <p>住所（市区町村）　　<?php echo $result['address_1'] ?></p>
    <p>住所（番地）　　　　<?php echo $result['address_2'] ?></p>
    <p>アカウント権限　　　<?php if($result['authority'] === 0){ echo "一般";}else{ echo "管理者";} ?></p>
    
    <a href="delete_confirm.php?id=<?php echo $result['id'] ?>">確認する</a>
    
    
    
    
</body>    
        
</html>