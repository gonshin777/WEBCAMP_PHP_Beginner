<?php

echo "普通に比較\n";
$f = 0.3;
var_dump($f === 0.3 );

echo "\n";
echo "0.1 + 0.2 と 0.3 を比較 \n";
$f = 0.1 + 0.2;
var_dump($f === 0.3);

echo "\n";
echo "0.1 + 0.2 と  0.3 を printf で表示\n";
printf("0.1+0.2: %f \n", $f);
printf("    0.3: %f \n", 0.3);

echo "\n";
echo "0.1 + 0.2 と  0.3 を高精度の printf で表示\n";
printf("0.1+0.2: %.32f \n", $f);
printf("    0.3: %.32f \n", 0.3);

// 精度6桁までの正しい比較
echo "\n";
echo "0.1 + 0.2 と 0.3 の現実的な比較\n";
// 精度比較は引用頻度が高くなることが予想されるため、定数を定義する
define('FLOAT_PRECISION', 0.000001);
var_dump( abs($f - 0.3) < FLOAT_PRECISION );