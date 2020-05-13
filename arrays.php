<?php

  /* 
    Arrays:
      - Indexed
      - Associative
      - Multi-dimensional
  */

  # Indexed
  $people = array('John', 'Kate', 'Henry');
  $ids = array(15, 67, 334);
  $cars = ['Honda', 'Ford', 'Chevy', 'Toyota'];
  $cars[4] = 'Lexus';
  $cars[] = 'BMW'; # Adds to last index

  // echo count($cars);
  // print_r($cars);
  // var_dump($cars);

  // echo $people[2];
  // echo $ids[1];
  // echo $cars[5];

  # Associative
  $people = array('Corey' => 35, 'John' => 23, 'Kim' => 54);
  $ids = [22 => 'Corey', 54 => 'Cate', 12 => 'Jimmy'];

  // echo $people['Corey'];
  // echo $ids['22'];
  $people['Jane'] = 42;
  // echo $people['Jane'];

  # Multi-dimensional
  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Chevy', 25, 12),
  );

  echo $cars[1][0];
