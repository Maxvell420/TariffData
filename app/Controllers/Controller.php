<?php

namespace App\Controllers;

use Core\View\View;

class Controller
{
    protected function render(string $viewName,array $data)
    {
        return new View($viewName,$data);
    }
}