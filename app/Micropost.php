<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];
    
    /**
     * この投稿を所有するユーザ。（userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * この投稿をお気に入りにするユーザ。（userモデルとの関係を定義）
     */
    public function favorites_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
}
