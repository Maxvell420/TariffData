<?php

use App\Controllers\UserController;
use Core\Route\Route;
return [
      new Route('GET','/user',UserController::class,'test'),
];