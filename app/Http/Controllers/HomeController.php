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
        $posts = Forum::all();

        return view('welcome',compact('hero','services','posts'));
    }
}
