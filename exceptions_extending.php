<?php
// 新しい例外クラスの作成
class MyException extends Exception
{
}
//
try {
  // 自力で例外を発生させる(例外を投げる)
  throw new \MyException("自分で投げた例外");
  // 関数で例外を発生させる
  $obj = new SplFileObject('dummy');

  // 例外が発生しなかった場合()
  echo "例外が発生しなかった場合の処理 処理の通貨確認 \n";
} catch(\Throwable $e) {
  //
  echo "例外が発生した場合、走る処理 \n";
  var_dump($e->getMessage());
}
//
echo "fin. \n";