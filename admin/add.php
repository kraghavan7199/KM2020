<?php
var_dump($_POST);
$content = $_POST["content"];
$new_content ="\n".$_POST['pls'].'(Leader) : '.$content;
$file = fopen("../student/lol.txt","a+");
fwrite($file,$new_content);
fclose($file);
header("location:forum.php");	
?>