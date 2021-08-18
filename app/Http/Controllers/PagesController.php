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

    public function about()
    {
        return view('pages.about');//dot notation to find subdirectory{can also use slash}
    }
}