<?php

//前のページからidを取ってくる
    $id = $_GET['id'];
    var_dump($id);

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


    $id = $result['id'];
    $namesei = $_POST['namesei'];
    $namemei = $_POST['namemei'];
    $kanasei = $_POST['kanasei'];
    $kanamei = $_POST['kanamei'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['seibetu'];
    $yuubinn = $_POST['yuubinn'];
    $kenn = $_POST['kenn'];
    $juusyosiku = $_POST['juusyosiku'];
    $juusyobann = $_POST['juusyobann'];
    $aka = $_POST['aka'];




    var_dump($id);
    var_dump($_POST['seibetu']);

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
    
    <h1>アカウント登録確認画面</h1>
    
    <div class="kakuningamen">
    <ul>
        <div>
            <li>
            <label>名前（姓）</label>
            <?php echo $namesei; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>名前（名）</label>
            <?php echo $namemei; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（姓）</label>
            <?php echo $kanasei; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（名）</label>
            <?php echo $kanamei; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>メールアドレス</label>
            <?php echo $email; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>パスワード</label>
            <label>●●●●●●●</label><br>
            </li>
        </div>
        
        <div>
            <li>
            <label>性別</label>
            <?php if($gender === "0"){echo "男";}else{echo "女";} ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>郵便番号</label>
            <?php echo $yuubinn; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（都道府県）</label>
            <?php echo $kenn; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（市区町村）</label>
            <?php echo $juusyosiku; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（番地）</label>
            <?php echo $juusyobann; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>アカウント権限</label>
            <?php if($aka === "0"){echo "一般";}else{echo "管理者";} ?>
            </li>
        </div>
        
        
        <form action="update.php?action=edit&id=<?php echo $result['id']?>" method="post">
            <input type="submit" value="前に戻る" id="modoru" >
            <input type="hidden" value="<?php echo $namesei; ?>" name="namesei">
            <input type="hidden" value="<?php echo $namemei; ?>" name="namemei">
            <input type="hidden" value="<?php echo $kanasei; ?>" name="kanasei">
            <input type="hidden" value="<?php echo $kanamei; ?>" name="kanamei">
            <input type="hidden" value="<?php echo $email; ?>" name="email">
            <input type="hidden" value="<?php echo $pass; ?>" name="pass">
            <input type="hidden" value="<?php echo $gender; ?>" name="gender">
            <input type="hidden" value="<?php echo $yuubinn; ?>" name="yuubinn">
            <input type="hidden" value="<?php echo $kenn; ?>" name="kenn">
            <input type="hidden" value="<?php echo $juusyosiku; ?>" name="juusyosiku">
            <input type="hidden" value="<?php echo $juusyobann; ?>" name="juusyobann">
            <input type="hidden" value="<?php echo $aka; ?>" name="aka">
            
            
        </form>
        
        <form action="update_complete.php?id=<?php echo $result['id']?>" method="post">
            <input type="submit" value="登録する" id="touroku" >
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <input type="hidden" value="<?php echo $namesei; ?>" name="namesei">
            <input type="hidden" value="<?php echo $namemei; ?>" name="namemei">
            <input type="hidden" value="<?php echo $kanasei; ?>" name="kanasei">
            <input type="hidden" value="<?php echo $kanamei; ?>" name="kanamei">
            <input type="hidden" value="<?php echo $email; ?>" name="email">
            <input type="hidden" value="<?php echo $pass; ?>" name="pass">
            <input type="hidden" value="<?php echo $gender; ?>" name="seibetu">
            <input type="hidden" value="<?php echo $yuubinn; ?>" name="yuubinn">
            <input type="hidden" value="<?php echo $kenn; ?>" name="kenn">
            <input type="hidden" value="<?php echo $juusyosiku; ?>" name="juusyosiku">
            <input type="hidden" value="<?php echo $juusyobann; ?>" name="juusyobann">
            <input type="hidden" value="<?php echo $aka; ?>" name="aka">
            
        </form>
        
    </ul>
    </div>
    
    
    
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>