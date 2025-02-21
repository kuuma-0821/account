<?php   
session_start();


//文字列に特殊文字があったら無害化する処理
    function str2html(string $string) :string {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
        try {
        $dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","",[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        $sql = "SELECT password FROM account_registration WHERE mail = :mail";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":mail", $_POST['email'], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$result) {
            echo "ログインに失敗しました。";
            exit;
        }
        
        if(password_verify($_POST['password'], $result['password'])){
            session_regenerate_id(true);
            $_SESSION['practice'] = true;
            header("Location: practice_form.php");
        }else{
            echo 'ログイン失敗';
            exit;
        }

        }   catch(PDOException $e) {
            echo '接続失敗'. str2html($e->getMessage());
            exit();
        };
?>