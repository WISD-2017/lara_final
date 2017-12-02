<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable=[
        'title',
        'content',
        'user_id',
        'user_name',
    ];
    public function user()
    {
    	return $this -> hasOne(User::class);
    }
    public function comments()
    {
    	return $this -> hasMany(Comment::class);
    }
}
