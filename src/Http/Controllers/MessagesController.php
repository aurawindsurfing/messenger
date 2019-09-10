<?php

namespace Aurawindsurfing\Messenger\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Aurawindsurfing\Messenger\Thread;

class MessagesController
{
    public function index(Thread $thread)
    {
        $user = Auth::user();

        if (! isset($user)) {
            return abort(404);
        }

        if (! $thread->users()->get()->contains($user)) {
            return abort(404);
        }

        $contacts = User::all();
        $threads = null;
        $activeThread = Thread::find($thread->id);

        if (isset($user)) {
            if ($user->threads()->exists()) {
                $threads = $user->threads()->with('messages')->get();
            }
        }

        return view('vendor.messenger.index', compact('threads', 'activeThread', 'contacts'));
    }

    public function create($user)
    {
        $fromUser = Auth::user();
        $contacts = User::all();
        $threads = collect([]);

        $activeThread = Thread::firstOrCreate([
            'from_user_id' => $fromUser->id,
            'to_user_id'   => $user,
        ]);

        if (isset($fromUser)) {
            if ($fromUser->threads()->exists()) {
                $threads = $fromUser->threads()->with('messages')->get();
            }
        }

        $threads = collect([$activeThread])->merge($threads);

        return view('vendor.messenger.index', compact('threads', 'activeThread', 'contacts'));
    }

    public function store(Thread $thread)
    {
        request()->merge(['user_id' => Auth::user()->id]);

        request()->validate([
            'body'    => 'required',
            'user_id' => 'required',
        ]);

        $thread->addMessage(request('body'), Auth::user()->id);

        return redirect($thread->path());
    }
}
