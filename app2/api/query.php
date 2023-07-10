<?php
//處理查詢資料的請求
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
//$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=s1120226','s1120226','s1120226');
$code=$_GET['classroom'];
$students=$pdo->query("select * from students where classroom='$code'")->fetchAll();
foreach($students as $student){
    echo "<div class='m-2'>";
    echo $student['name']. '-'.$student['birthday'];
    echo "-";
    echo "<button class='btn btn-success mx-2'>編輯</button>";
    echo "<button class='btn btn-danger del' data-id='{$student['id']}' >刪除</button>";
    echo "</div>";
}
?>