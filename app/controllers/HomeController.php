<?php

namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function index(Request $req, Response $res)
    {
        view('home', ["name" => "Moura dev", "title" => "Home"]);
        return $res;
    }
}
