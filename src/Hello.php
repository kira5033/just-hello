<?php

namespace Tekirara\JustHello;

class Hello
{
    public function __construct() {}

    public function demo () {
        echo "Hello, World!" . PHP_EOL;
    }

    public function say($text = null)
    {
        if($text) {
            echo "You say : " . $text . PHP_EOL;
        }
    }
}