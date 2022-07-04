<?php

namespace Tekirara\JustHello;

class Hello
{
    public function __construct() {}

    public function say($text = null)
    {
        if($text) echo $text . "\n";
        echo "Hello!" . PHP_EOL;
    }
}