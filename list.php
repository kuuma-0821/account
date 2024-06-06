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
    
    <table border="1">
  <tr>
    <th>id</th>
    <th>名前（姓）</th>
    <th>名前（名）</th>
    <th>カナ（姓）</th>
    <th>カナ（名）</th>
    <th>メールアドレス</th>
    <th>性別</th>
    <th>アカウント権限</th>
    <th>削除フラグ</th>
    <th>登録日時</th>
    <th>更新日時</th>
    <th colspan="2">操作</th>
    
  </tr>
    
    <?php

        $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");

        $stmt = $pdo->query("select * from account_registration ORDER BY id DESC");
        
     ?>   
    
        <?php
        foreach($stmt as $record): ?>
        
            <tr>
                
                <td><?php echo $record['id']?></td>
                <td><?php echo $record['family_name']?></td>
                <td><?php echo $record['last_name']?></td>
                <td><?php echo $record['family_name_kana']?></td>
                <td><?php echo $record['last_name_kana']?></td>
                <td><?php echo $record['mail']?></td>
                
                <td><?php if($record['gender'] === 0){ echo "男";}else{ echo "女";}?></td>
                <td><?php if($record['authority'] === 0){ echo "一般";}else{ echo "管理者";}?></td>
                <td><?php if($record['delete_flag'] === 0){ echo "有効";}else{ echo "無効";}?></td>
                
                <td><?php echo substr($record['registered_time'],0,10);?></td>
                <td><?php echo substr($record['update_time'],0,10);?></td>
                <td><a href="delete.php?id=<?php echo $record['id'] ?>">更新</a></td>
                <td><a href="delete.php?id=<?php echo $record['id'] ?>">削除</a></td>
                
            </tr>
        
        <?php endforeach; ?>

    </table>
    
    
    
    
 
    
</body>    
        
</html>