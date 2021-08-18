<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Andrew', 'Chelsea', 'Nacho'];

        return view('welcome', compact('people'));
    }
}