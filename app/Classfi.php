<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Classfi extends Model
{
    protected $table = 'classfis';
    protected $fillable=[
        'id',
        'class',
        ];
    public function post(){
        return $this->hasMany(Post::class);
    }

}
