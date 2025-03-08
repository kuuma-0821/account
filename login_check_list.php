<?php
session_start();

if(empty($_SESSION['authority'] === 0)){
    echo "権限がありません";
    exit;
}else{
    header("Location: list.php");
}

?>