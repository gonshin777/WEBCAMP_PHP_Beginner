<?php

echo "contindnnueの確認\n";
for ( $i = 0; $i < 10; ++$i ) {
  echo "{$i}は奇数かな? \n";
  if ( ( $i %2 === 1 )) {
    echo "奇数でした!! \n";
    continue;
  }
  // [continue]を通らなければこの処理が動く
  echo "偶数でした!! \n";
}

echo "\n breakの確認 \n";
$i = 0;
while($i < 10 ) {
  echo "{$i}は5未満かどうかを確認したい!! \n";
  if ( $i >= 5 ) {
    // ループを抜ける
    echo "{$i}なのでループを抜けます\n";
    break;
  }
  ++$i;
  echo "5未満だったのでループを継続 \n";
}

