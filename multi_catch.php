<?php
// 新しい例外クラスの作成
class MyException extends Exception
{}


try {
  // 例外を発生させる(例外を投げる)
  // throw new \MyException("自分で投げた例外");
  // throw new \TypeError("自分で投げた type error");
  throw new \Exception("自分で投げた Exception");
} catch(\MyException $e)
{
  echo "MyExceptionをキャッチしました \n";
  var_dump($e->getMessage());
} catch(\Error $e)
{
  echo "Errorをキャッチしました \n";
  var_dump($e->getMessage());
} catch(\Throwable $e)
{
  echo "Throwableをキャッチしました \n";
  var_dump($e->getMessage());
}

echo "fin. \n";