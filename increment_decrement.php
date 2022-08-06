<?php

$i = 1;
echo "{$i} \n";

echo "\n 今までに学習した普通の加算 \n";
$i = $i + 1;
echo "{$i} \n";

echo "\n 複合演算を使って「プラス1」する \n";
$i += 1;
echo "{$i} \n";

echo "\n 加算子を使って「プラス1」する \n";
++ $i;
echo "{$i} \n";

echo "\n 減算子を使って「マイナス1」する";
-- $i;
echo "{$i} \n";

echo "複合演算子を使って「マイナス1」する \n";
$i -= 1;
echo "{$i} \n";

echo "\n";
$var = 1;
echo "increment/decrementの前置 \n";
echo '$var++は、' . ++$var . 'となり、incrementした後の $var = 2 を返す' . "\n";
echo '$varは' . $var . 'すでにインクリメントされているので $var = 2 を返す' . "\n";

echo "\n";
$var = 1;
echo "increment/decrementの後置 \n";
echo '$var++は、' . $var++ . 'となり、incrementする前の $var = 1 を返す' . "\n";
echo '処理後の$varは' . $var . 'となり、インクリメントした後の$var = 2 を返す' . "\n";
