<?php

namespace berdysh_dev;

class helloworld
{
    private $str;
    
    public function __construct($str='')
    {
        $this->str = $str;
    }

    public function getter()
    {
        return $this->str;
    }

    
}

