<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ServiceAction;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

final class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('services.index',compact('services'));
    }
    public function create()
    {
        return view('services.create');
    }
    public function serviceStore(ServiceRequest $request,ServiceAction $action)
    {
        $validated = $request->validated();

        $service = $action->handle($validated);

        return redirect()->route('home')->with('services_created','successfully created service');
    }

}
