<?php

namespace App\Http\Controllers;

class SingleActionController extends Controller
{
    public function __invoke()
    {
        return 'Single action Controller';
    }
}
