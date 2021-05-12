<?php
    require_once "vendor/autoload.php";
    $helloworld = new berdysh_dev\helloworld('HELLO WORLD');
    echo $helloworld->getter()."\n" ;
