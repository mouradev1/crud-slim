<?php

namespace App\controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

class UsersController
{
    public function createUser(Request $req, Response $res)
    {
        view('users', ['title' => 'Usúarios']);
        return $res;
    }

    public function store(Request $req, Response $res)
    {
        var_dump($_POST);
        return $res;
    }
}
