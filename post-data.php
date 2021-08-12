<?php

//設定檔頭給用戶設定
header('Content-Type: application/json');

$a = isset($_POST['a']) ? intval($_POST['a']) : 0;

$b = isset($_POST['b']) ? intval($_POST['b']) : 0;


echo json_encode([
    'postdata' => $_POST,
    'result' => $a + $b
]);