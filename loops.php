<?php
  # LOOPS
  /* 
    - For
    - While
    - Do...While
    - Foreach
  */

  # For Loop
  # @params - init, condition, increment

  // for($i = 0; $i < 10; $i++){
  //   echo "Number $i";
  //   echo '<br>';
  // }

  # While Loop
  # @params - condition

  // $i = 0;
  // while($i < 10){
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  # Do...While
  # @params - condition

  // $i = 0;
  // do{
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  // while($i < 10);

  # Foreach loop - for arrays
  // $people = ['Corey', 'John', 'Kate', 'Kim'];

  // foreach($people as $person){
  //   echo $person;
  //   echo '<br>';
  // }

  $people = ['Corey' => 35, 'John' => 26, 'Kate' => 49, 'Kim' => 18];

  foreach($people as $person => $age){
    echo "$person is $age";
    
    echo '<br>';
  }

