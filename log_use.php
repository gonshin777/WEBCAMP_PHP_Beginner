<?php
// ファイルの読み込みを行う
require_once( __DIR__ . "/WEBCAMP_Log.php");

// 「名前空間付き」のクラスを使う(完全修飾名)
$obj = new \WEBCANP\Log();
$obj->test();