<?php
//
class 親クラス
{
  //
  public function 親メソッド()
  {
    echo "親クラス内親メソッド\n";
  }
  //
  public function メソッド()
  {
    echo "親クラス内親メソッド\n";
  }
}
//
class 子クラス extends 親クラス
{
 //
 public function 子メソッド()
 {
   echo "子クラス内子メソッド\n";
   //
 }
   public function メソッド()
   {
    echo "子クラス内子メソッド\n";
   }
 }

 $obj = new 子クラス();
 $obj->親メソッド(); // 「自分にはないメソッド」でも、親が持っていれば親のメソッドをそのまま使える
 $obj->子メソッド();
 $obj->メソッド();  // 「親でも自分でも定義されているメソッド」は、自分優先