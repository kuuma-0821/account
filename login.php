
<?php   
session_start();





    if(isset($_POST['login'])){
        
        $mail = $_POST['email'];
        $password = $_POST['password'];
        
        try {
            $db = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $sql = 'select count(*) from account_registration where mail=:mail';
            $stmt = $db->prepare(sql);
    

            $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
            
            $stmt->execute();
            $result = $stmt->fetch();
            $stmt = null;
            $db = null;
        
            
            if ($result[0] != 0){
                echo 'aaa';
                exit;
                
            }
                
            
            }catch (PDOExeption $e) {
                echo $e->getMessage();
                exit;
            }
                
                
                
                
                
                
                
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
        <form action='' method="POST">
        <p>
            <label for="email">メールアドレス：</label>
            <input type="email" name="email">
        </p>    
        <p>
            <label for="password">パスワード：</label>
            <input type="password" name="password">
        </p>    
        <p>
            <input type="submit" value="ログイン" name="login">
        </p>    
        </form>
    
    
<footer>
    <div class="footer_logo">Copyreight.D.I.blog is the one which provides A to Z about programming</div>
</footer>    
    
</body>    
        
</html>