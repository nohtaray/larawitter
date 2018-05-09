<?php

namespace App\Repositories;

use App\Tweet;

class TweetRepository
{
    /**
     * ホーム画面のツイート
     * @return mixed
     */
    public function home()
    {
        return Tweet::orderBy('created_at', 'desc')
            ->take(100)
            ->get();
    }
}