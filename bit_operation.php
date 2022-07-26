<?php

// ビット演算子
// 乱数での用意
$i = random_int(0,255);
$j = random_int(0,255);

// AND
echo "AND \n";
$k = $i & $j;
printf("%x & %x = %x \n", $i, $j, $k);
printf("%d & %d = %d \n", $i, $j, $k);

// OR
echo "OR \n";
$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);
printf("%d | %d = %d \n", $i, $j, $k);

// XOR
echo "XOR \n";
$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);
printf("%d ^ %d = %d \n", $i, $j, $k);

// NOT
echo "NOT \n";
$k = ~$i;
printf("~%x = %x \n", $i, $k);
printf("~%d = %d \n", $i, $k);