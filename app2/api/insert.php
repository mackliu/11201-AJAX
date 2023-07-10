<?php
//處理新增資料的請求
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
//$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=s1120226','s1120226','s1120226');
$keys=array_keys($_POST);
echo $pdo->exec("insert into students (`".join("`,`",$keys)."`) 
                        value('".join("','",$_POST)."')");
?>