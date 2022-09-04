<?php

for ( $i = 0 ; $i < 100 ; ++$i ) {

 if ( $i % 3 === 0 && $i % 5 === 0 ) {
   echo "Fizz Bizz \n";
 } elseif( $i % 3 === 0 ) {
   echo "Bizz \n";
 } elseif( $i % 5 === 0 ) {
   echo "Fizz \n";
 } else {
   echo "$i \n";
 }

}