<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        //retrieveing cards from db
        $cards = Card::all();

        
        return view('cards.index', compact('cards'));
    }


    //type hinting must match the wildcard tag in routes/web.php
    public function show(Card $card)
    {

        
        // $card = Card::find($id);

        return view('cards.show', compact('card'));
    }
}