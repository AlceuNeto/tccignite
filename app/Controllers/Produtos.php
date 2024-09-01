<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController
{
    public function index()
    {
        return view('produtos');
    }
}
