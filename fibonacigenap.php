<?php

$angka1=2;
$angka2=2;
  

echo "$angka1 $angka2";
 
for ($i=0; $i<10; $i++)
{
 
  $output = $angka1 + $angka2;
  echo " $output";
  
  
  $angka1 = $angka2 ;
  $angka2 = $output;
}
 
?>