<?php

use Slim\App;
use App\controllers\HomeController as Home;
use App\controllers\UsersController as Users;

return function (App $app) {
    $app->get('/', [Home::class, 'index']);
    $app->get('/users', [Users::class, 'createUser']);
    $app->post('/users/store', [Users::class, 'store']);
};
