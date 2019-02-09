<?php

function IsPair($a, $b)
{
  $contolString = "" . $a . $b;
  return ($contolString === "()" || $contolString === "<>" || $contolString === "{}" || $contolString === "[]");
}


function IsStringBalanced($string)
{
  if ($string === "") {
    print_r("empty string\n");
    return false;
  }

  $arrayStart = ["(","<","{","["];

  $arrayControl = [];
  $arrayString = str_split($string);

  foreach ($arrayString as $curChar) {
    if (in_array($curChar, $arrayStart)) {
      array_push($arrayControl, $curChar);
      continue;
    }

    $lastChar = array_pop($arrayControl); // проверяем, что тут символ открытия скобок, парный к текущему

    if (!in_array($lastChar, $arrayStart)) {
      return false;
    }

    if (!IsPair($lastChar, $curChar)) {
      return false;
    }
  }

  return count($arrayControl) === 0;
}

$myString = "[]{(<>}";
var_dump(IsStringBalanced($myString));
