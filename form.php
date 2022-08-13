<?php

// var_dump($_GET);

error_reporting(-1);
ini_set('display_errors', on);

function h(string $s): string
{
  return htmlspecialchars($s, ENT_QUOTES);
}


// データの取得
$input = $_GET['input_text'] ?? ""; // 追記

// 出力
//echo "あなたが入力したのは" , htmlspecialchars($input, ENT_QUOTES) , "ですね";
echo "あなたが入力したのは" , h($input) , "ですね";

