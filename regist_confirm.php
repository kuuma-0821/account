<?php
session_start();
if(isset($_POST['namesei'])){
    $_SESSION['namesei'] = $_POST['namesei'];
    $_SESSION['namemei'] = $_POST['namemei'];
    $_SESSION['kanasei'] = $_POST['kanasei'];
    $_SESSION['kanamei'] = $_POST['kanamei'];
    $_SESSION['email'] = $_POST['email1'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['seibetu'] = $_POST['seibetu'];
    $_SESSION['yuubinn'] = $_POST['yuubinn'];
    $_SESSION['kenn'] = $_POST['kenn'];
    $_SESSION['juusyosiku'] = $_POST['juusyosiku'];
    $_SESSION['juusyobann'] = $_POST['juusyobann'];
    $_SESSION['aka'] = $_POST['aka'];
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
            <?php echo $_SESSION['namemei']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（姓）</label>
            <?php echo $_SESSION['kanasei']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>カナ（名）</label>
            <?php echo $_SESSION['kanamei']; ?>
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
            <?php echo $_SESSION['seibetu']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>郵便番号</label>
            <?php echo $_SESSION['yuubinn']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（都道府県）</label>
            <?php echo $_SESSION['kenn']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（市区町村）</label>
            <?php echo $_SESSION['juusyosiku']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>住所（番地）</label>
            <?php echo $_SESSION['juusyobann']; ?>
            </li>
        </div>
        
        <div>
            <li>
            <label>アカウント権限</label>
            <?php echo $_SESSION['aka']; ?>
            </li>
        </div>
        
        <form action="regist.php?action=edit" method="post">
            <input type="submit" value="前に戻る" id="modoru" >
            <input type="hidden"  name="namesei">
        </form>
        
        <form action="regist_complete.php" method="post">
            <input type="submit" value="登録する" id="touroku" name="token">
            <input type="hidden" value="<?php echo $_POST ['namesei' ]; ?>" name="namesei">
            <input type="hidden" value="<?php echo $_POST ['namemei' ]; ?>" name="namemei">
            <input type="hidden" value="<?php echo $_POST ['kanasei' ]; ?>" name="kanasei">
            <input type="hidden" value="<?php echo $_POST ['kanamei' ]; ?>" name="kanamei">
            <input type="hidden" value="<?php echo $_POST ['email1' ]; ?>" name="email1">
            <input type="hidden" value="<?php echo $_POST ['pass' ]; ?>" name="pass">
            <input type="hidden" value="<?php echo $_POST ['seibetu' ]; ?>" name="seibetu">
            <input type="hidden" value="<?php echo $_POST ['yuubinn' ]; ?>" name="yuubinn">
            <input type="hidden" value="<?php echo $_POST ['kenn' ]; ?>" name="kenn">
            <input type="hidden" value="<?php echo $_POST ['juusyosiku' ]; ?>" name="juusyosiku">
            <input type="hidden" value="<?php echo $_POST ['juusyobann' ]; ?>" name="juusyobann">
            <input type="hidden" value="<?php echo $_POST ['aka' ]; ?>" name="aka">
            
        </form>
        
    </ul>
    </div>
    
    
    
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>