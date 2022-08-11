<?php

// 配列の作成
$array = [
  [
    'key1' => 1,
    'key2' => 2,
    'key3' => 3,
  ],
  [
    'key1' => 11,
    'key2' => 12,
    'key3' => 13,
  ],
  [
    'key1' => 111,
    'key2' => 112,
    'key3' => 113,
  ],
];
var_dump($array);


echo "\n";
// 多次元配列のfopreach処理
foreach( $array as $key => $value ) {
  echo "{$key}番目の配列 \n";

    // 配列内の配列に対する繰り返し処理
    foreach( $value as $k => $v ) {
      echo "{$key} : {$v} \n";
    }
  echo "\n";
}