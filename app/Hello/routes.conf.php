<?php

use App\Hello\Controllers\HelloController;

return [

    [
        'method'     => 'GET',
        'path'       => '/',
        'action'     => 'welcome',
        'controller' => HelloController::class,
    ],

    [
        'method'     => 'GET',
        'path'       => '/hello/{name}',
        'action'     => 'hello',
        'controller' => HelloController::class,
    ],

];