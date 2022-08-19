<?php

// traitの宣言
trait 部品
{
  public function トレイトのメソッド()
  {
    echo "トレイとのメソッド \n";
  }
}

//
class クラス名
{
  use 部品; //　traitの仕様宣言
  public function クラスのメソッド()
  {
    echo "クラスのメソッド \n";
  }
}

$obj = new クラス名();
$obj->クラスのメソッド();
$obj->トレイトのメソッド();