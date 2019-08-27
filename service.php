<?php
session_start();
header('Content-Type: application/json; charset=UTF-8'); 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    @$name = $_POST["name"];
    if ($name != null) { 
		$name=$_SESSION[user];
	     echo json_encode(array(
            	'name' => $nAME,
        	));
    } else {
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }
} else {
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));
}
	echo $_SESSION[user];
?>
