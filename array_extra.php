<?php

// keyを明示的に描く
$array_1 = [
  0 => '1st',
  1 => '2nd',
  2 => '3rd',
];
var_dump($array_1);

// 順番を入れ替えたりkeyの値を負の値にしたりした配列
$array_2 = [
  2    => '3rd',
  0    => '1st',
  -100 => -100,
  1    => '2nd',
];
var_dump($array_2);

// 連想配列と配列の組み合わせ
$array_3 = [
  "key1" => "Hello",
  2      => '3rd',
  0      => '1st',
  "key2" => 3.14,
  "key3" => 999,
];
var_dump($array_3);
