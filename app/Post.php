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
        'owner'
    ];
    public function user()
    {
    	return $this -> belongsTO(User::class);
    }
    public function comments()
    {
    	return $this -> hasMany(Comment::class);
    }
}
