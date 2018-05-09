<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * TweetController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ツイート投稿
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140',
        ]);

        $request->user()->tweets()->create([
            'content' => $request->content,
        ]);

        return redirect('/home');
    }
}
