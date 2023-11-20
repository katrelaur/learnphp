<?php

use App\Router;
Router::addRoute('/',function(){
    $name = 'Katre';
    $list = ['leib','sai','piim','viin'];
    include 'views/index.php';
});
Router::addRoute('/about',function(){
    include 'views/about.php';
});
Router::addRoute('/',function(){
   include 'views/contacts.php';
});