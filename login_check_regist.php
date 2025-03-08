<?php
session_start();

if(empty($_SESSION['authority'] === 1)){
    echo "権限がありません";
    exit;
}else{
    header("Location: regist.php");
}

?>