<?php
    require_once "vendor/autoload.php";
    $helloworld = new berdysh_dev\helloworld('HELLO WORLD');
    printf("1:%s\n\n",$helloworld->getter()) ;
