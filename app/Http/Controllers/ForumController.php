<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ForumAction;
use App\Enum\CategoryEnum;
use App\Http\Requests\ForumRequest;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function create()
    {
        return view('forums.create');
    }
    public function forumStore(ForumRequest $request,ForumAction $action)
    {
        $validated = $request->validated();

        if ($request->hasFile('image'))
        {
            $validated['image']  = $request->file('image')->store('images','public');
        }
        if (isset($validated['category']) && !($validated['category'] instanceof CategoryEnum))
        {
            $validated['category'] = CategoryEnum::from($validated['category']);
        }
        $forum = $action->handle($validated);

        return redirect()->back()->with('success', 'Forum created!');
    }
}
