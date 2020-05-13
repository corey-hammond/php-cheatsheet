<?php
// Single line comment
# Single line comment
/*
  Multiline
  comment
*/

  # VARIABLES
  /* 
    - Prefix with $
    - Start with a letter or an underscore
    - Only letters, numbers, and underscores
    - Case sensitive
  */

  # DATA TYPES
  /* 
    String
    Integer
    Float
    Boolean
    Array
    Object
    NULL
    Resource
  */
  $output = 'Hello World!';
  $num1 = 4;
  $num2 = 13;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting1 = $string1 . ' ' . $string2 . '!';
  $greeting2 = "$string1 $string2";
  
  $string3 = 'They\'re Here';

  $float1 = 4.4;
  $bool1 = true;

  # Constants
  define('GREETING', 'Hello Everyone');

  echo GREETING;
