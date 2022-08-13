<?php

echo "引数の値を2倍にする関数\n";
function numToDouble(int $i): int
{
  // 値を2倍にする
  $ret = $i * 2;
  // 戻り値
  return $ret;
}

$num = numToDouble(10);
echo "10を倍にしたら{$num}になった\n";

echo "\n";
echo "2つの引数を加算する関数\n";
function numAdd(int $a,int $b): int
{
  $ret = $a + $b;
  return $ret;
}
$add = numAdd(5,6);
echo "5と6を足したら{$add}になった\n";