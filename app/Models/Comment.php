<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'article_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }

    public function userAdmin()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
            ->where('is_admin', 1);
    }

    public function userNotAdmin()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
            ->where('is_admin', 0);
    }
}
