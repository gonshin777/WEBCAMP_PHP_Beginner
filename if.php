<?php


echo "・if文の基本 \n";
if ( true ) {
  echo "trueだとここを通る? \n";
}

if ( false ) {
  echo "falseだとここを通る? \n";
}


echo "\n";
echo "・比較演算子と組み合わせてif文を使う\n";
$age = 20;
if ($age >= 20  ) {
  echo "成人です\n";
}

if ( $age <= 20 ) {
  echo "未成年です \n";
}

echo "\n";
echo "if-else文\n";
if ( $age > 20 ) {
  echo "成人です\n";
} else if ( $age === 20 ) {
  echo "新成人おめでとう \n";
} else {
  echo "未成年です \n";
}