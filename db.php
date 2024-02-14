<?php
$mysqli = new mysqli('localhost', 'advbbs', '12345', 'advbbs');
if ($mysqli->connect_errno) {
    echo " 연결실패".$mysqli->connect_error;
    exit(); //스트립트 종료, 뒤 script 는 무시(실행불가)
}
?>