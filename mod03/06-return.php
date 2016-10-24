<?php

function functionName()
{
  return 42;
  echo "This line has never executed.\n";
}

$result = functionName();
var_dump($result);

var_dump(functionName());
