<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ForumAction;
use App\Enum\CategoryEnum;
use App\Http\Requests\ForumRequest;
use App\Models\Forum;
use Illuminate\Http\Request;

final class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();

        return view('forums.index',compact('forums'));
    }
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

        return redirect()->route('home')->with('success', 'Forum created!');
    }

}
