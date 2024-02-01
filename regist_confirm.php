<?php
session_start();
if(isset($_POST['namesei'])){
    $_SESSION['namesei'] = $_POST['namesei'];
}
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
    
    <h1>アカウント登録確認画面</h1>
    
    <div class="kakuningamen">
    <ul>
        <div>
            <li>
            <label>名前（姓）</label>
            <?php echo $_SESSION['namesei']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>名前（名）</label>
            <?php echo $_POST['namemei']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（姓）</label>
            <?php echo $_POST['kanasei']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（名）</label>
            <?php echo $_POST['kanamei']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>メールアドレス</label>
            <?php echo $_POST['email1']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>パスワード</label>
            <label>●●●●●●●</label><br>
            <input type="hidden" value="<?php echo $_POST['pass']; ?>" name="pass">
            </li>
        </div>
        
        <div>
            <li>
            <label>性別</label>
            <?php echo $_POST['seibetu']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>郵便番号</label>
            <?php echo $_POST['yuubinn']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（都道府県）</label>
            <?php echo $_POST['kenn']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（市区町村）</label>
            <?php echo $_POST['juusyosiku']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（番地）</label>
            <?php echo $_POST['juusyobann']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>アカウント権限</label>
            <?php echo $_POST['aka']; ?>
            </li>
        </div>
        
        <form action="regist.php?action=edit">
            <input type="submit" value="前に戻る" id="modoru">
            <input type="hidden" value="<?php echo $namesei ?>" name="namesei">
        </form>
        
        <form action="regist_complete.php" method="post">
            <input type="submit" value="登録する" id="touroku" name="token">
        </form>
        
    </ul>
    </div>
    
    
    
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>