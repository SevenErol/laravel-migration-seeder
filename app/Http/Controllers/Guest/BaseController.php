<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

use App\Models\Train;


class BaseController extends Controller
{
    public function Index()
    {

        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
