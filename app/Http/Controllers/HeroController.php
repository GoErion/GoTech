<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\HeroAction;
use App\Http\Requests\HeroRequest;

final class HeroController extends Controller
{
    public function create()
    {
        return view('hero.create');
    }
    public function heroStore(HeroRequest $request, HeroAction $action)
    {
        $validated = $request->validated();

        // Handle file upload here (controller responsibility)
        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $request
                ->file('hero_image')
                ->store('heroes', 'public');
        }

        $action->handle($validated);

        return redirect()
            ->back()
            ->with('success', 'Hero Successfully Updated');
    }

}
