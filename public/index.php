<?php


spl_autoload_register(function ($class){
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

require_once __DIR__ . '/../routes.php';



$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    call_user_func($match['action']);

} else {
    http_response_code(404);
    include 'views/404.php';
}



// switch($_SERVER['REQUEST_URI']){
// case '/'
//     $name = 'Katre';
//     $list = ['leib','sai','piim'];
//     include 'views/index.php';
//     break;
//  case '/about'
//     include 'views/about.php';
//     break;
// case '/contacts'
//     include 'views/contacts.php';
//     break;
//     default:
//     http_response_code(404);
// }