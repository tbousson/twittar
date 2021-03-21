<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function messages () {
        return $this->morphByMany(Message::class,'likables');
    }

    public function comments () {
        return $this->morphByMany(Comment::class,'likables');
    }
}
