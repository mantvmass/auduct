<?php


    use Illuminati\Routing\Router;
    use Illuminati\View\View;

    View::$prefix_make = __DIR__ . "/../templates/";

    $app = new Router();


    $app::route('/', ["GET"], function(){
        return View::make("welcome");
    });


    $app::route('/test/hung/:n', ["GET", "POST"], function(){
        global $app;
        // echo $app::$request_path;
        print_r($app::$params);
    });


    $app::route('/hosting/buy', $methods=["GET"], function(){
        echo "test";
        global $app;
        print_r($app::$params);
    });


    $app::route('/introduction/category/:movie1/:movie2/:movie3/:movie4', $methods=["GET"], function(){
        global $app;
        print_r($app::$params);
    });


    $app::errorhandler(404, function(){
        echo "page not found";
    });


?>