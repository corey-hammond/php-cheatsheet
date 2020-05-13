<?php

  # DATE FUNCTION

  #Set Timezone
  date_default_timezone_set('America/Los_Angeles');

  echo date('d').'<br>'; # Day
  echo date('m').'<br>'; # Month
  echo date('Y').'<br>'; # Year
  echo date('l').'<br>'; # Day of week

  echo '<br>';

  echo date('m/d/Y');

  echo '<br>';
  echo '<br>';

  echo date('h').'<br>'; # Hour
  echo date('i').'<br>'; # Min
  echo date('s').'<br>'; # Seconds
  echo date('a').'<br>'; # AM or PM

  echo '<br>';
  echo '<br>';

  echo date('h:i:sa');

  echo '<br>';
  echo '<br>';

  $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  echo $timestamp;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp);

  echo '<br>';
  echo '<br>';

  $timestamp2 = strtotime('7:00pm March 22 2019');
  echo $timestamp2;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp2);