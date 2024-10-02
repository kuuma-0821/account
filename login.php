aaaaaaaaaaaaaaaaaaaaaa
<?php   
session_start();


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

    if (isset($_SESSION['login_user']) && $_SESSION['login_user']['id'] > 0){
        
        return $result = true;
        
    }



?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body>
    
    <h2>ログイン画面</h2>
        <form action='http://localhost/account/DIブログ .html' method="POST">
        <p>
            <label for="email">メールアドレス：</label>
            <input type="email" name="email">
        </p>    
        <p>
            <label for="password">パスワード：</label>
            <input type="password" name="password">
        </p>    
        <p>
            <input type="submit" value="ログイン">
        </p>    
        </form>
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>