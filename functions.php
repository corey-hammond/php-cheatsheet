<?php

  # FUNCTIONS

  /* 
    NAMING CONVENTIONS:
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
  */

  function simpleFunction(){
    echo 'Hello World'.'<br>';
  }

  simpleFunction();

  function sayHello($name = 'World'){
    echo 'Hello '.$name.'<br>';
  }

  sayHello('Corey');
  sayHello('Karen');
  sayHello();

  function addNumbers($num1, $num2){
    return $num1 + $num2;
  }

  echo addNumbers(4, 6);

  # By reference
  $myNum = 10;

  function addFive($num){
    $num += 5;
  }

  function addTen(&$num){
    $num += 10;
  }

  addFive($myNum);
  echo "Value $myNum<br>";

  addTen($myNum);
  echo "Value $myNum<br>";