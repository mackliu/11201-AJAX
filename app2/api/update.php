<?php
//處理新增資料的請求
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
//$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=s1120226','s1120226','s1120226');
$keys=array_keys($_POST);

$sql="update students set ";
$id=$_POST['id'];
unset($_POST['id']);
foreach($_POST as $col => $val){
    $tmp[]="`$col`='$val'";
}

$sql=$sql . join(",",$tmp);

$sql=$sql . " where `id`='{$id}'";

//echo $sql;
echo $pdo->exec($sql);
?>