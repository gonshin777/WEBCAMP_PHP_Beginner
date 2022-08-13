<?php

// 変数の代入
$a = 10;
// 変数の仕様
echo "global:a is {$a} \n";

// 関数の宣言
function myFunc()
{
  // 変数の代入
  $b = 999;
  // 変数の仕様：使うことができる
  echo "in function:b is {$b}\n";
}
// 関数の呼び出し
myFunc();

// 変数の仕様:使えない
echo "global:b is {$b}\n";