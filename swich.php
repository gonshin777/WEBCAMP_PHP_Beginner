<?php

$i = 1;
switch($i) {
  case 0:
    echo "i は 0 です \n";
    break;

  case 1:
    echo "i は 1 です \n";
    break;

  default:
    echo "i は 0 と 1 以外です \n";
    break;
}


echo "\n";
echo "・PHP8未満だと注意が必要なコード\n";
$i = 2;
switch($i) {
  case '2a':
    echo "i は '2a' です \n";
  break;

  case '2':
    echo "i は '2'(string) です \n";
  break;

  case 2:
    echo "i は 2(int) です \n";
  break;
}
