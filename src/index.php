<?php

require '../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$output = $bessie->say();
$bessie->setTongue('U');
echo $output;


echo $bessie;