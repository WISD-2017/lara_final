<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Classfi;
class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable=[
        'title',
        'content',
        'user_id',
        'user_name',
        'classfi_id',
    ];
    public function user()
    {
    	return $this -> hasOne(User::class);
    }
    public function comments()
    {
    	return $this -> hasMany(Comment::class);
    }
    public function classfi(){
        return $this->hasOne(Classfi::class);
    }
}
