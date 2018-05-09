<?php

namespace App\Http\Controllers;

use App\Repositories\TweetRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TweetRepository $tweets)
    {
        return view('home', [
            'tweets' => $tweets->home(),
        ]);
    }
}
