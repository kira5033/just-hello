<?php

namespace Tekirara\JustHello;

interface HelloInterface 
{
    public function demo();

    public function say($content);

    public function multiSay($content);
}