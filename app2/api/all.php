<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
//$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=s1120226','s1120226','s1120226');

$students=$pdo->query("select * from students")->fetchAll();
/* foreach($students as $student){
    echo $student['name']. '-'.$student['birthday'];
    echo "<br>";
} */

echo json_encode($students);