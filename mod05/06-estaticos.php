<?php 

require_once 'Hijo.php';

Hijo::$abuelos = 2;
echo Hijo::$abuelos . PHP_EOL;

$ben = new Hijo('Ben');
$miriya = new Hijo('Miriya');

echo 'Ben tiene ' . $ben::$abuelos . ' abuelos' . PHP_EOL;
echo 'Miriya tiene ' . $miriya::$abuelos . ' abuelos' . PHP_EOL;

echo $ben::saludar() . PHP_EOL;