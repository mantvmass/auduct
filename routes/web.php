<?php


    use Illuminati\Routing\Router;
    use Illuminati\View\View;

    use App\Http\Controllers\Login;

    View::$prefix_make = __DIR__ . "/../templates/";

    $app = new Router();


    $app::route('/', ["GET"], function(){
        return View::make("welcome");
    });


    $app::route('/login', ["GET", "POST"], function(){
        global $app;
        // echo App\Http\Controllers\Login::request();
        echo Login::request();
    });


?>