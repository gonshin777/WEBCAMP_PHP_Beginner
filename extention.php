<?php
//
try {
  // 例外を発生させる
  throw new \Exception("自分で投げた例外");
  // 関数で例外を発生させる
  // $obj = new SplFileObject(dummy);

  // 例外が起きない場合の処理(例外処理が動作しないことの確認目的)
  echo "例外が起きない場合の処理 処理通過確認 \n";
} catch(\Throwable $e) {
  //
  echo "例外が発生した場合、走る処理 \n";
  var_dump($e->getMessage());
}

echo "fin. \n";