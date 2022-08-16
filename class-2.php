<?php

class MyClass
{
  // オブジェクト定数の宣言
  const HOGE = 'string';

  // コンストラクタ
  public function __construct()
  {
    echo "コンストラクタが動いた\n";
  }

  public function __destruct()
  {
    echo "ディストラクタが動いた\n";
  }

}

// オブジェクト定数を利用する
var_dump( MyClass::HOGE );

// インスタンス(オブジェクト)を作成する
$obj = new MyClass();