<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;


class BaseController extends Controller
{
    public function Index()
    {
        return view('welcome');
    }
}
