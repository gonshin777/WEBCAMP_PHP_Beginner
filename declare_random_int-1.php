<?php

echo "random_intの内部関数のリファレンスでは、int型の指定が必要であるが、 \n";
echo "下記の通り、数字(string)を代入しても処理に問題ない \n";
$i = random_int('1', '999');
echo "{$i} \n";