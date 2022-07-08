<?php

require_once('src/HelloInterface.php');
require_once('src/Hello.php');

use Tekirara\JustHello\Hello;

$someone = new Hello();

$someone->say("What a beautiful world.");

$someone->multiSay("Single Hello");

$someone->multiSay([
    "Multi Hello - 1",
    "Multi Hello - 2",
    "Multi Hello - 3",
    "Multi Hello - 4",
    "Multi Hello - 5",
    "Multi Hello - 6",
    "Multi Hello - 7",
]);