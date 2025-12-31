<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\ForumAction;
use App\Actions\UpdateForumAction;
use App\Enum\CategoryEnum;
use App\Http\Requests\ForumRequest;
use App\Http\Requests\UpdateForumRequest;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return redirect()->route('forum')->with('success', 'Forum created!');
    }
    public function show(Forum $forum)
    {
        return view('forums.show',compact('forum'));
    }
    public function edit(Forum $forum)
    {
        return view('forums.edit',compact('forum'));
    }

    public function update(UpdateForumRequest $request,Forum $forum,UpdateForumAction $action)
    {
        $validated = $request->validated();

        if ($request->hasFile('image'))
        {
            //delete old image
            if ($forum->image)
            {
                Storage::disk('public')->delete($forum->image);
            }
            //store  new one
            $validated['image'] = $request->file('image')->store('images','public');
        }

        $forum = $action->handle($forum,$validated);

        return redirect()->route('forum')->with('success','Forum successfully updated!');

    }

    public function destroy(Forum $forum)
    {
        //delete image
        if ($forum->image)
        {
            Storage::disk('public')->delete($forum->image);
        }
        $forum->delete();

        return redirect()->route('forum')->with('success','Forum deleted successfully');
    }

}
