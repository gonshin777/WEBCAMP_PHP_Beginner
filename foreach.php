<?php

$array = [
  "key1"  => "Hello",
  0       => '1st',
  1       => '2nd',
  "key2"  => 3.14,
];

// foreachで処理
foreach($array as $k => $v) {
  echo "{$k} => {$v} \n";
}
echo "\n";

// foreachで処理 値のみ受け取る書き方：keyが受け取れないので注意
foreach($array as $value) {
  echo "$value \n";
}