<?php

// ビット演算子
// 乱数での用意
$i = random_int(0,255);
$j = random_int(0,255);
$x = decbin($i);
$y = decbin($j);

// AND
echo "AND \n";
$k = $i & $j;

printf("%x & %x = %x \n", $i, $j, $k);
$z = decbin($k);
echo "{$x} & {$y} = {$z} \n";

// OR
echo "OR \n";
$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);
$z = decbin($k);
echo "{$x} | {$y} = {$z} \n";

// XOR
echo "XOR \n";
$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);
$z = decbin($k);
echo "{$x} ^ {$y} = {$z} \n";

// NOT
echo "NOT \n";
$k = ~$i;
printf("~%x = %x \n", $i, $k);
$z = decbin($k);
echo "~{$x} = {$z} \n";