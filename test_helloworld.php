<?php
    require_once "vendor/autoload.php";
    $helloworld = new berdysh_dev\HelloComposer('HELLO WORLD');

    printf("1:%s\n\n",$helloworld->getter()) ;

    class MyHelloWorld extends berdysh_dev\HelloComposer{}

    $myHelloWorld = new MyHelloWorld('hello world') ;

    printf("2:%s\n\n",$myHelloWorld->getter()) ;

    printf("3:%s\n\n",berdysh_dev\HelloComposer::version()) ;
