<?php
function printFibonacci($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo "Fibonacci Series <br> \n";
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}
  
/* Function call to print Fibonacci series upto 30 numbers. */
 
printFibonacci(30);

?>
