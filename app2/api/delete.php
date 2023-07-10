<?php
//處理刪除資料的請求
$id=$_POST['id'];
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$pdo->exec("delete from students where `id`='$id'");
?>