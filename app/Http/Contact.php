<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
