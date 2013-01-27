<?php

$filename = “http://openapi.baidu.com/public/2.0/bmt/translate?client_id=Your&q=中国&from=zh&to=en”;   // 中文翻译成英文
$json = json_decode(file_get_contents($filename),true); //
// print_r($json);

//print_r($json[3][0]);

// print_r ($json[trans_result]);
$result=$json[trans_result];
echo   $result[0][dst];
?>