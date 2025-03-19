



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント一覧</title>
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
    
    <h1>アカウント一覧画面</h1>
    

        <form action='list.php' method="POST">
            名前（姓）<input type="text" name="namesei"><br>    
            名前（名）<input type="text" name="namemei"><br>
            カナ（姓）<input type="text" name="kanasei"><br>
            カナ（名）<input type="text" name="kanamei"><br>
            メールアドレス<input type="mail" name="email"><br>
            性別<input type="radio" name="gender" value="男">男
                <input type="radio" name="gender" value="女">女<br>
            権限<select name="authority" >
                <option value="一般">一般</option>
                <option value="管理者">管理者</option>
                </select>
        <p>
            <input type="submit" value="検索">
        </p>    
        </form>
    
    
    <?php
    //データベースへ接続
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        if(@$_POST["namesei"] != "" OR @$_POST["namemei"] != "" OR @$_POST["kanasei"] != "" OR @$_POST["kanamei"] != "" OR @$_POST["email"] != ""  ){ //IDおよびユーザー名の入力有無を確認
            $stmt = $pdo->query("SELECT * FROM account_registration WHERE family_name LIKE '%" .$_POST["namesei"]. "%' and last_name LIKE '%" .$_POST["namemei"]. "%' and family_name_kana LIKE '%" .$_POST["kanasei"]. "%' and last_name_kana LIKE '%" .$_POST["kanamei"]. "%' and mail LIKE '%" .$_POST["email"]. "%'  "); //SQL文を実行して、結果を$stmtに代入する。
        }
    ?>
    
    <?php var_dump($stmt); ?>
    
    <?php foreach ($stmt as $row): ?>
        <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td></tr>
    <?php endforeach; ?>
    
    
    

    
    
    
    
 
    
</body>    
        
</html>