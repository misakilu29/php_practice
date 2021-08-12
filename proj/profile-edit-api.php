<?php
include __DIR__. '/partials/init.php';

header('Content-Type: application/json');

// 要存放圖檔的資料夾
$folder = __DIR__. '/imgs/';

// 允許的檔案類型
$imgTypes = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
];

$output = [
    'success' => false,
    'error' => '資料欄位不足',
    'code' => 0,
    'postData' => $_POST,
];


if(empty($_POST['nickname'])){
    echo json_encode($output);
    exit;
}

$isSaved = false;


// 如果有上傳檔案
if(! empty($_FILES) and !empty($_FILES['avatar'])){

    $ext = $imgTypes[$_FILES['avatar']['type']]; // 取得副檔名

    // 如果是允許的檔案類型
    if(! empty($ext)){
        $filename = sha1( $_FILES['avatar']['name']. rand()). $ext;

        if(move_uploaded_file(
            $_FILES['avatar']['tmp_name'],
            $folder. $filename
        )){
            $output['filename'] = $filename;
            $output['error'] = '';
            $output['success'] = true;

            echo json_encode($output);
            exit;

        }
    }

}



echo json_encode($output);
