<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Hero;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

final class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();

        // Get 3 random services
        $services = Service::inRandomOrder()->take(3)->get();

        // Get 3 random forums
        $forums = Forum::inRandomOrder()->take(3)->get();

        return view('home',compact('hero','services','forums'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
