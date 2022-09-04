<?php
// 書き込むべきデータの準備
// 「複数行」あるので、「多次元配列」でデータを保持させる
$write_data = [
  [1,2,3]  ,
  ["aaa","bbb","ccc"],
  [",aa","b \" b","c \n c"], // カンマ区切りやダブルクォート、改行の入ったデータ
];

// 書き込むファイル名の把握
$file_name = __DIR__ . "/data.csv";

// ファイルのopen
$file_obj = new SplFileObject($file_name, "w");

//
foreach($write_data as $datum) {
  // CSVの書き込み
 $file_obj->fputcsv($datum);
}