<?php
// ファイル名の把握
$file_name = __DIR__ . "/file_write_overwrite.txt";

// ファイルを書き込む
$write_string = "書き込む内容 \n";

// ファイルに書き込む
file_put_contents($file_name, $write_string);
