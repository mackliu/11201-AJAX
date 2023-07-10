<?php
//header("Access-Control-Allow-Origin: *");
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$classes=$pdo->query("SELECT classroom FROM `students` group by classroom")->fetchAll();

foreach($classes as $class){
    echo "<button class='btn btn-info m-2' onclick='query({$class['classroom']})'>";
    echo $class['classroom'];
    echo "</button>";
}

