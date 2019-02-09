<?php

function FizzBuzz($start = 1, $finish = 100) {

  if ($finish < $start) {
    print_r("Некорректно заданы параметры старта и финиша \n");
    return;
  }


  for ($i = $start; $i <= $finish; $i++) {
    $sinString = "";
    $fizz = "";
    $buzz = "";
    $fizzOrBuzz = false;

    if ($i % 3 === 0) {
      $fizz = "Fizz";
      $fizzOrBuzz = true;
    }

    if ($i % 5 === 0) {
      $buzz = "Buzz";
      $fizzOrBuzz = true;
    }

    $sinString .= ($fizzOrBuzz ? "" : (string) $i) . $fizz . $buzz . " ";
    print_r($sinString);


  }

  print_r("\n");
}



FizzBuzz();
