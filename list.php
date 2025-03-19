



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
    

        <form action='kensaku.php' method="POST">
            名前（姓）<input type="text" name="namesei"><br>    
            名前（名）<input type="text" name="namemei"><br>
            カナ（姓）<input type="text" name="kanasei"><br>
            カナ（名）<input type="text" name="kanamei"><br>
            メールアドレス<input type="mail" name="email"><br>
            性別<input type="radio" name="gender" value="男" <?php if (isset($seibetu) && $seibetu === "男") {echo "checked";} else {echo "checked";} ?>>男
                <input type="radio" name="gender" value="女" <?php if (isset($seibetu) && $seibetu === "女") {echo "checked";} ?>>女<br>
            権限<select name="authority" >
                <option value="一般">一般</option>
                <option value="管理者">管理者</option>
                </select>
        <p>
            <input type="submit" value="検索">
        </p>    
        </form>
   
    
    

    
    
    
    
 
    
</body>    
        
</html>