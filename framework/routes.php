<?php
/**
 * Application routing
 */
use Controllers\PagesController;

// instantiate the router
$router = new AltoRouter();

// basic example route
$router->map('GET', '/', function() {
    PagesController::index();
});

// handle route matches
$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    PagesController::index(["type" => "error", "body" => "Requested page not found"]);
}
