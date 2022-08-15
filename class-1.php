<?php

class クラス名
{
  //
  private $変数;

  public function 関数()
  {
    // 処理
    // 処理

  }

  public function set変数($v)
  {
    $this->変数 = $v;
  }

  public function get変数()
  {
    return $this->変数;
  }

}

// クラスからインスタンス(オブジェクト)を作ってみる
$obj = new クラス名();
var_dump($obj);
$obj->関数(); // メソッドの呼び出し
// echo $obj->変数 , "\n"; // 変数の呼び出し

$obj->set変数('data');
echo $obj->get変数(), "\n";
