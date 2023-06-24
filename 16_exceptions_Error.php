<?php


function inverse ($x){
  if(!$x){
    throw new Exception("Division by Zero");
  }
  return 1/$x;
}

try{
  
  echo inverse(50)."<br>";
  echo inverse(0) . '<br>';
}catch(Exception $e){
  echo "Exception Rise ", $e->getMessage(),'';
}finally{
  echo "finally block";
}

// echo "Hello adib";












?>