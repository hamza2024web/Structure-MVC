<?php

use Src\Http\Request;
use Src\Http\Response;
use Src\Http\Route;

require_once __DIR__  .'../../vendor/autoload.php';

require_once '../routes/web.php';

$route = new Route(new Request , new Response);
$route->resolve();
