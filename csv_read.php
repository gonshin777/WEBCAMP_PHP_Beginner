 <?php
 // 読込ファイル名の把握
 $file_name = __DIR__ . "/data.csv";

// ファイルのopen
$file_obj = new SplFileObject($file_name);
// ファイルをcsvとして読み込む
$file_obj->setFlags( SplFileObject::READ_CSV );

//
foreach($file_obj as $no => $datum ){
  // 1レコード分を出力
  var_dump($datum);
}
