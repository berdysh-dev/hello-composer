<?php

namespace berdysh_dev;

class HelloComposer
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

    public static function version(){
        return '1.0.11' ;
    }
    
}

