<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();

        return view('welcome',compact('hero'));
    }
}
