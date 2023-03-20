<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        // Diz quais campos podem ser inseridos ou alterados pelo usuário

        'title',
        'content',
    ];


    public function userPost()
    {
        return $this->belongsTo(Post::class);
    }

    protected $hidden = [];


    public function coments()
    {
        return $this->hasMany(Coment::class);
    }

    public function comments()
    {
    }
}
