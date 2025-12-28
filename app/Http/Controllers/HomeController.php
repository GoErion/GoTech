<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Hero;
use App\Models\Service;
use Illuminate\Http\Request;

final class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $services = Service::all();
        $forums = Forum::all();

        return view('home',compact('hero','services','forums'));
    }
}
