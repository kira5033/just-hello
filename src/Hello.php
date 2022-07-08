<?php

namespace Tekirara\JustHello;

use Tekirara\JustHello\HelloInterface;

class Hello implements HelloInterface
{
    public function __construct() {}

    public function demo () {
        echo "Hello, World!" . PHP_EOL;
    }

    public function say($content = null)
    {
        if($content) {
            echo "You say : " . $content . PHP_EOL;
        }
    }

    public function multiSay($content)
    {
        $sayQueue = [];
        if(is_array($content))
        {
            $sayQueue = $content;
        }
        else
        {
            $sayQueue[] = $content;
        }
        
        foreach($sayQueue as $text)
        {
            $this->say($text);
        }
    }
}