<?php

error_reporting(E_ALL);

$num =61;

echo " All the Prime Numbers <br> \n";
for( $j = 2; $j <= $num; $j++ )
{
for( $k = 2; $k < $j; $k++ )
{
if( $j % $k == 0 )
{
break;
}
}
if( $k == $j )
{
  echo "Num  =  $j <br>";
}
}

?>
