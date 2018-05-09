<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = ['content'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * ホーム画面のツイート
     * @return mixed
     */
    public static function home()
    {
        return self::orderBy('created_at', 'desc')
            ->take(100)
            ->get();
    }
}
