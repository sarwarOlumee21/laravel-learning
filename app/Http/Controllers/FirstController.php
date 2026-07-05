<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function firstLesson()
    {
        return view('first_day');
    }
}
